var placeTypes = ['atm','restaurant','bank'];


orderPoints = function() {
	headings = [];
	for (i=0; i<points.raw.length; i++)
	{
		headings.push(Math.ceil(google.maps.geometry.spherical.computeHeading(homeLocation ,points.raw[i])));	
	}
	orderedPoints = [];
	for (i=0; i<181; i++)
	{
		for (y=0; y<headings.length; y++)
		{
			if (i == headings[y])
			{
				orderedPoints.push(points.raw[y])
			}
		}
	}
	for (i=(-180); i<0; i++)
	{
		for (y=0; y<headings.length; y++)
		{
			if (i == headings[y])
			{
				orderedPoints.push(points.raw[y])
			}
		}
	}
	points.raw = orderedPoints;
	points.clean = [];
	for ( i=0; i<points.raw.length; i++ )
		points.clean.push([ points.raw[i].lat(), points.raw[i].lng() ]);
	
	}

$(function(){
	points = { count: 0, raw: [], clean: [] };
	$map = $('#map');
	$go = $('<a id="go" href="/browse?search=true"><span class="hidden">View Listings</span><span id="count"></span></a>');
	first_click = false;
});

function clear () 
{
	points.count = 0;
	points.raw = []; 
	points.clean = [];
	$map.gmap3({ action: 'clear' });
	$go.remove();
}

function draw(marker, loc, data, action) 
{	
	if ( action == 'add' ) 
	{ 
		points.raw.push(loc.latLng);
		points.clean.push([loc.latLng.lat(), loc.latLng.lng()]);
		points.count = parseInt(points.count + 1);
		draw(null, null, null, 'update');
	}
	
	else if ( action == 'update' ) 
	{
		$map.gmap3({ action: 'clear', name: 'marker' });
		
		for ( i=0; i<points.raw.length; i++ ) {
			var a = new google.maps.Point(-100,0) 
			$map.gmap3({ 
				action	: 'addMarker', 
				latLng	: points.raw[i],
				options	: { anchor: a, draggable: true, icon: '/media/img/map-handle.png', zIndex: 333 },
				tag		: 'point-'+i,
				events	: {
					dragstart: function (sender) {
						draw(sender, null, null, 'remove');
					},
					dragend: function (sender, loc) {
						draw(null, loc, null, 'add');
					}   
				}
			});
		}
	}
	
	else if ( action == 'remove' ) {
		var mark = [marker.position.lat(), marker.position.lng()];

		for (i=0; i<points.clean.length; i++) {
			var raw = [points.raw[i].lat(), points.raw[i].lng()];
			
			if (mark.toString() == points.clean[i].toString()) 
				points.clean.splice(i,1);

			if (mark.toString() == raw.toString())
				points.raw.splice(i,1);
		}
	}
	orderPoints();
	$map.gmap3(
		{ action: 'clear', name: 'polygon' },
		{
			action	: 'addPolygon',
			options	: {
				strokeWeight	: 2,
				fillColor		: '#000000',
				strokeColor		: '#000000'
			},
			paths	: points.raw,
			events	: { click: function () { /*$go.click();*/ } }
		}
	);
}

function map_init(type, callback)
{
	if (type == 'geo')
	{
		if (navigator.geolocation) 
		{		
			navigator.geolocation.getCurrentPosition(
				// On Success
				function (position) 
				{
					homeLocation = new google.maps.LatLng(position.coords['latitude'],position.coords['longitude']);	 			
					$map.gmap3(
						{ 
							action		: 'geoLatlng', 
							callback	: function (loc) { 								
								$map.gmap3(
									{
										action	: 'init',
										events	: { 
											center_changed: function( map){
												homeLocation = map.getCenter()
											},
											click: function (marker, event, data) { 
												if ( first_click == false ) {
													first_click = true;
													clear();
												}
												draw(marker, event, data, 'add'); 
											} 
										},
									},
									{
										action	: 'addMarker',
										latLng	: loc,
										map		: { center: true, zoom: 14 },
										callback: function () {
											points.raw.push(new google.maps.geometry.spherical.computeOffset(loc, 1200, 30));
											points.raw.push(new google.maps.geometry.spherical.computeOffset(loc, 1500, 90));
											points.raw.push(new google.maps.geometry.spherical.computeOffset(loc, 1500, 190));
											points.raw.push(new google.maps.geometry.spherical.computeOffset(loc, 1500, 250));
											points.raw.push(new google.maps.geometry.spherical.computeOffset(loc, 1500, 300));
											//orderPoints();
											for ( i=0; i<points.raw.length; i++ )
												points.clean.push([ points.raw[i].lat(), points.raw[i].lng() ]);
											draw(null, null, null, 'update');
											callback.call();
											
										}
									}
								) 
							} 
						}
					);
				},
				
				// On Error
				function () 
				{	
					$map.gmap3({ action: 'addMarker', address: "Denver, CO", map: { center: true, zoom: 14 } });
					$('#address').focus();
				}
			);
		} 
		else 
		{
			$map.gmap3({ action: 'addMarker', address: "Denver, CO", map: { center: true, zoom: 14 } });
			$('#address').focus();
		}
	} // end: if type geo
	else if (type == 'set')
	{
		$map.gmap3(
			{ 
				action		: 'geoLatlng', 
				callback	: function () { 
					$map.gmap3(
						{
							action	: 'init',
							events	: { 
								click: function (marker, event, data) { 
									if ( first_click == false ) {
										first_click = true;
										clear();
									}
									draw(marker, event, data, 'add'); 
								} 
							},
							options	: { styles: gmap_styles }
						},
						{
							action	: 'addMarker',
							latLng	: [latitude, longitude],
							map		: { center: true, zoom: 14 },
							callback: function (marker) {
								points.raw.push(new google.maps.geometry.spherical.computeOffset(marker.position, 1200, 30));
								points.raw.push(new google.maps.geometry.spherical.computeOffset(marker.position, 1500, 90));
								points.raw.push(new google.maps.geometry.spherical.computeOffset(marker.position, 1500, 190));
								points.raw.push(new google.maps.geometry.spherical.computeOffset(marker.position, 1500, 250));
								points.raw.push(new google.maps.geometry.spherical.computeOffset(marker.position, 1500, 300));
								
								for ( i=0; i<points.raw.length; i++ )
									points.clean.push([ points.raw[i].lat(), points.raw[i].lng() ]);
									
								draw(null, null, null, 'add');
								
								callback.call();
								
							}
						}
					) 
				} 
			}
		);
	} 
	else
	{
		$map.gmap3(
			{ 
				action		: 'geoLatlng', 
				callback	: function () { 
					$map.gmap3(
						{
							action	: 'init',
							options	: { styles: gmap_styles }
						}, 
						{
							action	: 'addMarker',
							latLng	: [latitude, longitude],
							map		: { center: true, zoom: 14 },
							callback: function (marker) {
								callback.call();
							}
						}
					) 
				} 
			}
		);	
	}
}

function get_crime () 
{
	
	$map.gmap3({ action: 'clear', tag: 'crime' });
	
		geoRequest = $.ajax({
			type	:'GET',
			data	: { 
				token: '287475de3e36adb61c1a3efc124e906ab0abae153a0daa157fa538cdb1cd90ca',
				limit: 500
			},
			url		:'/api/stats/crime',
			success	: function (result) {

				if ( result.length >= 1 ) 
				{
					data = [];
					
					for ( i=0; i<result.length; i++ ) 
					{
						data[i] = {};
						data[i].data = result[i];
						data[i].lat = result[i].geo_lat;
						data[i].lng = result[i].geo_lon;
					}
					
					$map.gmap3({ 
						action	: 'addMarkers',
						tag     : 'crime',
						radius	: 20,
						markers	: data,
						clusters: {
							0: {
								content: '<div class="cluster cluster-small">CLUSTER_COUNT</div>',
								width: 35,
								height: 39
							}
						},
						marker	: {
							options	: { icon: '/media/img/map-icon-crime.png', zIndex: 555 },
							events	: {  
				                mouseover: function(marker, event, data){
				                  $(this).gmap3(
				                    { action:'clear', name:'overlay'},
				                    { action:'addOverlay',
				                      latLng: marker.getPosition(),
				                      content:  '<div class="infobullet">' +
				                                  '<div class="title">'+data.offense_type_id+' / '+data.offense_category_id+'</div>'+
				                                  '<div class="text">First Occurance: '+data.first_occurance_date+
				                                  	'<br />Last Occurance: '+data.last_occurance_date+
				                                  	'<br />Incident Address: '+data.incident_address+
				                                  	'<br />Neighborhood: '+data.neighborhood_id+
				                                  '</div>' +
				                                '</div>',
				                      offset: {
				                        x:-46,
				                        y:-98
				                      }
				                    }
				                  );
				                },
				                mouseout: function(){
				                  $(this).gmap3({action:'clear', name:'overlay'});
								},
								click: function(marker, event, data){
									window.location = '/browse/detail/'+data.listing_num;
								}
							}
						}
					});	
				}
			},
			error	: function (data) {
				if (typeof console == 'object')
					console.log('ajax error');
			}
		});
	
	
}

function get_attractions() {
	pins = [{
		lat 	: latitude,
		lng 	: longitude,
		data 	: targetAddress,
	}];
	$map.gmap3(
		{ 
			action: 'clear', 
			tag: 'attractions' 
		},
		{ 
			action: 'getAddress',
			latLng: [latitude,longitude],
			callback: function(data) 
			{
				var city = data[0].formatted_address.split(',')[1];
				var tmpData = $.trim(data[0].formatted_address.split(',')[2]);
				var region = tmpData.split(' ')[0];
				address[0] = city;
				address[1] = region;
				// get the schools from our  GreaterSchools api factory
				$.ajax({
					type	: 'GET',
					dataType: 'json',
					url		: '/api/ajax/public/attractions',
					data	: { 
						//key			: __KEY__, 
						points		: points.clean,
						address		: address, 
						targetLoc	: [parseFloat(latitude), parseFloat(longitude)],
					},
					success	: function(response) {
						if (typeof console == 'object')
							console.log(response);
						
						if (response.success === true) 
						{
							for (i=0; i < response.attractions.length; i++) 
							{
								var img = '/resources/images/icons/map-marker-blue.png';
								if (response.attractions[i].attraction_type == 'school')
								{
									img = '/resources/images/icons/map-marker-school.png';
								}
								pins.push(
									{
										lat : response.attractions[i].lat,
										lng : response.attractions[i].lon,
										data : '<p style="color:black;font-size:1em;">'+response.attractions[i].name+'<br />'+response.attractions[i].address+'</p>',
										options : {
											icon : img
										}
									}
								);
							}
							getPlaces();
						}
					},
					error	: function(response) {
						if (typeof console == 'object')
							console.log(response);
					}
				});		
				
			}
		}	
	);
	
	function getPlaces (){
		var request = {
			location : new google.maps.LatLng(latitude,longitude),
			types : placeTypes,
			radius : (1609*3) // 3 miles approx.
		};
		var service = new google.maps.places.PlacesService($map.gmap3('get'));
		service.search(request, function(results, status) {
			if (status == google.maps.places.PlacesServiceStatus.OK) {
				for (var i = 0; i < results.length; i++) {
					var place = results[i];
					pins.push(
						{
							lat : place.geometry.location.Sa,
							lng : place.geometry.location.Ta,
							data : '<p style="color:black;font-size:1em;">'+place.name+'<br />'+place.vicinity+'</p>',
							options : {
								icon : '/resources/images/icons/map-marker-blue.png',
							}
						}
					);
				}
				addPins();
			}
		});	
	}
	
	function addPins (){
		//console.log(pins);
		
		$map.gmap3(
			{
				action 	: 'addMarkers',
				markers	: pins,
				marker	: {
					options	: {
						draggable 	: false
					},
					events	: {
						mouseover	: function(marker, event, data){
							var mapObject	= $map.gmap3('get'),
								infowindow = $map.gmap3({action:'get', name:'infowindow'});
							if (infowindow){
								infowindow.open(mapObject, marker);
								infowindow.setContent(data);
							} else {
								$map.gmap3({action:'addinfowindow', anchor:marker, options:{content:data}});
							}
						},
						mouseout	: function(){
							var infowindow	= $map.gmap3({action:'get', name:'infowindow'});
							if (infowindow){
								infowindow.close();
							}
						}
					}
				}
			}
		);	
	}
	
	
	
}



$(function () {	
	map_init(
		'geo',
		function () {
			// put defaults here at some point
		}
	);


	$('#address').autocomplete({
		position: { my : "right bottom", at: "right top" },

		// This bit uses the geocoder to fetch address values
		source: function(request, response) 
		{
			$map.gmap3(
				{
					action:'getAddress',
	                address: request.term,
	                callback: function (results) {
						if ( ! results ) 
							return;
	                  
						response($.map(results, function(item) {
	                    	return {
								label	: item.formatted_address,
	                      		value	: item.formatted_address,
	                      		latLng	: item.geometry.location
	                    	}
	                  	}));
                	}
				}
			);
		},

		// This bit is executed upon selection of an address
		select: function (event, ui) 
		{			
			clear();
			points.raw.push(new google.maps.geometry.spherical.computeOffset(ui.item.latLng, 150, 70));
			points.raw.push(new google.maps.geometry.spherical.computeOffset(ui.item.latLng, 150, 180));
			points.raw.push(new google.maps.geometry.spherical.computeOffset(ui.item.latLng, 150, -70));
			$map.gmap3(
				{ action: 'clear', name: 'polygon' },
				{
					action	: 'addPolygon',
					options	: {
						strokeWeight	: 2,
						fillColor		: '#000000',
						strokeColor		: '#000000'
					},
					paths	: points.raw,
					events	: { click: function () { $go.click(); } }
				}
			);
			for ( i=0; i<points.raw.length; i++ )
			{
				points.clean.push([ points.raw[i].lat(), points.raw[i].lng() ]);
				$map.gmap3({ 
					action	: 'addMarker', 
					latLng	: points.raw[i],
					options	: { draggable: true, icon: '/media/img/map-handle.png', zIndex: 333 },
					tag		: 'point-'+i,
					events	: {
						dragstart: function (sender) {
							draw(sender, null, null, 'remove');
						},
						dragend: function (sender, loc) {
							draw(null, loc, null, 'add');
						}   
					}
				});
			}			
			
			$map.gmap3(
				//{ action: 'clear'},
                { 
                	action	: 'addMarker',
                	marker  : {
                		options	: { icon: '/resources/images/icons/clear-marker.png', zIndex: 0 },
                		events : {
	                		mouseover: function(){
				                  $(this).gmap3(
				                    { action:'clear', name:'overlay'},
				                    { action:'addOverlay',
				                 	  latLng: ui.item.latLng,
				                      content:  '<div class="infobulle">' +
				                                  '<div class="bg"></div>' +
				                                  '<div class="text">Please Draw an area to search.</div>' +
				                                '</div>' +
				                                '<div class="arrow"></div>',
				                      offset: {
				                        x:-46,
				                        y:-98
				                      }
				                    }
				                  );
				                },
				                mouseout: function(){
				                  $(this).gmap3({action:'clear', name:'overlay'});
								},
	                	},
	                },
					latLng	: ui.item.latLng,
					map		: { center: true, zoom: 16 }
               }
			);
		}
	});
});

$(function(){
	$('#sidebar li a').click(function() {
		if ( $(this).hasClass('crime') )
		{
			get_crime();
		}
		
		return false;
	});
});
