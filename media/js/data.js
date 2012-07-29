var placeTypes = ['atm', 'restaurant', 'bank'];

//Global Var on Location Object for get_lat_lon
var demographics = {};

$(function() {
	$map = $('#map');
});

function get_crime(on) {
	if (on === false) {
		$map.gmap3({
			action : 'clear',
			tag : 'crime'
		});
		return;
	}

	geoRequest = $.ajax({
		type : 'GET',
		data : {
			token : '287475de3e36adb61c1a3efc124e906ab0abae153a0daa157fa538cdb1cd90ca',
			limit : 1500
		},
		url : '/api/stats/crime',
		success : function(result) {

			if (result.length >= 1) {
				data = [];

				for ( i = 0; i < result.length; i++) {
					data[i] = {};
					data[i].data = result[i];
					data[i].lat = result[i].geo_lat;
					data[i].lng = result[i].geo_lon;
				}

				$map.gmap3({
					action : 'addMarkers',
					tag : 'crime',
					radius : 20,
					markers : data,
					clusters : {
						0 : {
							content : '<div class="cluster cluster-small">CLUSTER_COUNT</div>',
							width : 35,
							height : 39
						}
					},
					marker : {
						options : {
							icon : '/media/img/map-icon-crime.png',
							zIndex : 555
						},
						events : {
							mouseover : function(marker, event, data) {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								}, {
									action : 'addOverlay',
									latLng : marker.getPosition(),
									content : '<div class="infobullet">' + '<div class="title">' + data.offense_type_id + ' / ' + data.offense_category_id + '</div>' + '<div class="text">First Occurance: ' + data.first_occurance_date + '<br />Last Occurance: ' + data.last_occurance_date + '<br />Incident Address: ' + data.incident_address + '<br />Neighborhood: ' + data.neighborhood_id + '</div>' + '</div>',
									offset : {
										x : -46,
										y : -98
									}
								});
							},
							mouseout : function() {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								});
							}
						}
					}
				});
			}
		},
		error : function(data) {
			if ( typeof console == 'object')
				console.log('ajax error');
		}
	});
}

function get_parks(on) {
	if (on === false) {
		$map.gmap3({
			action : 'clear',
			tag : 'parks'
		});
		return;
	}

	geoRequest = $.ajax({
		type : 'GET',
		data : {
			token : '287475de3e36adb61c1a3efc124e906ab0abae153a0daa157fa538cdb1cd90ca',
			limit : 500
		},
		url : '/api/locations/recreation/parks',
		success : function(result) {
			if (result.length >= 1) {
				data = [];

				for ( i = 0; i < result.length; i++) {
					data[i] = {};
					data[i].data = result[i];
					data[i].lat = result[i].geo_lat;
					data[i].lng = result[i].geo_lon;
				}

				$map.gmap3({
					action : 'addMarkers',
					tag : 'parks',
					radius : 20,
					markers : data,
					clusters : {
						0 : {
							content : '<div class="cluster cluster-small parks">CLUSTER_COUNT</div>',
							width : 35,
							height : 39
						}
					},
					marker : {
						options : {
							icon : '/media/img/map-icon-tree.png',
							zIndex : 555
						},
						events : {
							mouseover : function(marker, event, data) {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								}, {
									action : 'addOverlay',
									latLng : marker.getPosition(),
									content : '<div class="infobullet parks">' + '<div class="title">' + data.name + ' / ' + Math.round(data.gis_acres) + ' acres</div>' + '<div class="text"><strong>Designated</strong>: ' + data.designated + '<br /><strong>Park Type</strong>: ' + data.park_type + '<br /><strong>Park Class</strong>: ' + data.park_class + '<br /><strong>Facilities</strong>: ' + data.facilities + '</div>' + '</div>',
									offset : {
										x : -46,
										y : -98
									}
								});
							},
							mouseout : function() {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								});
							}
						}
					}
				});
			}
		},
		error : function(data) {
			if ( typeof console == 'object')
				console.log('ajax error');
		}
	});
}

function get_bus_routes(on) {
	if (on === false) {
		$map.gmap3({
			action : 'clear',
			tag : 'bus'
		});
		return;
	}

	geoRequest = $.ajax({
		type : 'GET',
		data : {
			token : '287475de3e36adb61c1a3efc124e906ab0abae153a0daa157fa538cdb1cd90ca',
			limit : 500
		},
		url : '/api/transit/bus',
		success : function(result) {
			if (result.length >= 1) {
				data = [];

				for ( i = 0; i < result.length; i++) {
					data[i] = {};
					data[i].data = result[i];
					data[i].lat = result[i].geo_lat;
					data[i].lng = result[i].geo_lon;
				}

				$map.gmap3({
					action : 'addMarkers',
					tag : 'bus',
					radius : 20,
					markers : data,
					clusters : {
						0 : {
							content : '<div class="cluster cluster-small bus">CLUSTER_COUNT</div>',
							width : 35,
							height : 39
						}
					},
					marker : {
						options : {
							icon : '/media/img/map-icon-bus.png',
							zIndex : 555
						},
						events : {
							mouseover : function(marker, event, data) {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								}, {
									action : 'addOverlay',
									latLng : marker.getPosition(),
									content : '<div class="infobullet bus">' + '<div class="title">' + data.stopname + '</div>' + '<div class="text">' + '<strong>Direction</strong>: ' + data.direction + '<br /><strong>Routes</strong>: ' + data.routes + '<br /><strong>Bus ID</strong>: ' + data.bsid + '</div>' + '</div>',
									offset : {
										x : -46,
										y : -98
									}
								});
							},
							mouseout : function() {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								});
							}
						}
					}
				});
			}
		},
		error : function(data) {
			if ( typeof console == 'object')
				console.log('ajax error');
		}
	});
}

function get_demographics(on) {

	if (on === false) {
		$map.gmap3({
			action : 'clear',
			tag : 'demographic'
		});
		return;
	}

	geoRequest = $.ajax({
		type : 'GET',
		data : {
			token : '287475de3e36adb61c1a3efc124e906ab0abae153a0daa157fa538cdb1cd90ca',
			limit : 500
		},
		url : '/api/stats/census/demographics',
		success : function(result) {

			if (result.length >= 1) {
				var data = [];
				var city = 'Denver';
				var state = 'CO';
				
				for ( i = 0; i < result.length; i++) {
					data[i] = {};
					data[i].data = result[i];
					data[i].address = result[i].address+', '+city+', '+state;
					
						$.get('/geocode', { address: data[i].address }, (function(result){
							console.log('--- get ---');
							console.log(result); // works
							console.log('--- get ---');
							
							return data[i].test = 'foo';
						})(data[i]), result)
					
					
					console.log(data[i].test);
				}

				$map.gmap3({
					action : 'addMarkers',
					tag : 'demographic',
					radius : 20,
					markers : data,
					clusters : {
						0 : {
							content : '<div class="cluster cluster-small">CLUSTER_COUNT</div>',
							width : 35,
							height : 39
						}
					},
					marker : {
						options : {
							icon : '/media/img/demographic.png',
							zIndex : 555
						},
						events : {
							mouseover : function(marker, event, data) {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								}, {
									action : 'addOverlay',
									latLng : marker.getPosition(),
									content : '<div class="infobullet">' + '<div class="title">' + data.population_2010 + '</div>',
									offset : {
										x : -46,
										y : -98
									}
								});
							},
							mouseout : function() {
								$(this).gmap3({
									action : 'clear',
									name : 'overlay'
								});
							}
						}
					}
				});
			}
		},
		error : function(data) {
			if ( typeof console == 'object')
				console.log('ajax error');
		}
	});
}

$(function() {
	$map.gmap3({
		action : 'addMarker',
		address : "Denver, CO",
		map : {
			center : true,
			zoom : 14
		}
	});

	$('#search').autocomplete({
		position : {
			my : "right bottom",
			at : "right top"
		},

		// This bit uses the geocoder to fetch address values
		source : function(request, response) {
			$map.gmap3({
				action : 'getAddress',
				address : request.term,
				callback : function(results) {
					if (!results)
						return;

					response($.map(results, function(item) {
						return {
							label : item.formatted_address,
							value : item.formatted_address,
							latLng : item.geometry.location
						}
					}));
				}
			});
		},

		// This bit is executed upon selection of an address
		select : function(event, ui) {
			clear();
			points.raw.push(new google.maps.geometry.spherical.computeOffset(ui.item.latLng, 150, 70));
			points.raw.push(new google.maps.geometry.spherical.computeOffset(ui.item.latLng, 150, 180));
			points.raw.push(new google.maps.geometry.spherical.computeOffset(ui.item.latLng, 150, -70));
			$map.gmap3({
				action : 'clear',
				name : 'polygon'
			}, {
				action : 'addPolygon',
				options : {
					strokeWeight : 2,
					fillColor : '#000000',
					strokeColor : '#000000'
				},
				paths : points.raw,
				events : {
					click : function() {
						$go.click();
					}
				}
			});
			for ( i = 0; i < points.raw.length; i++) {
				points.clean.push([points.raw[i].lat(), points.raw[i].lng()]);
				$map.gmap3({
					action : 'addMarker',
					latLng : points.raw[i],
					options : {
						draggable : true,
						icon : '/media/img/map-handle.png',
						zIndex : 333
					},
					tag : 'point-' + i,
					events : {
						dragstart : function(sender) {
							draw(sender, null, null, 'remove');
						},
						dragend : function(sender, loc) {
							draw(null, loc, null, 'add');
						}
					}
				});
			}

			$map.gmap3(
			//{ action: 'clear'},
			{
				action : 'addMarker',
				marker : {
					options : {
						icon : '/resources/images/icons/clear-marker.png',
						zIndex : 0
					},
					events : {
						mouseover : function() {
							$(this).gmap3({
								action : 'clear',
								name : 'overlay'
							}, {
								action : 'addOverlay',
								latLng : ui.item.latLng,
								content : '<div class="infobulle">' + '<div class="bg"></div>' + '<div class="text">Please Draw an area to search.</div>' + '</div>' + '<div class="arrow"></div>',
								offset : {
									x : -46,
									y : -98
								}
							});
						},
						mouseout : function() {
							$(this).gmap3({
								action : 'clear',
								name : 'overlay'
							});
						},
					},
				},
				latLng : ui.item.latLng,
				map : {
					center : true,
					zoom : 16
				}
			});
		}
	});
});

$(function() {
	$map = $('#map');
	
	$('#sidebar li a').click(function() {
		var $this = $(this);

		if ($this.hasClass('crime')) {
			if (! $this.hasClass('on')) {
				$this.addClass('on');
				get_crime(true);
			} else {
				$this.removeClass('on');
				get_crime(false);
			}
		}

		if ($this.hasClass('parks')) {
			if (! $this.hasClass('on')) {
				$this.addClass('on');
				get_parks(true);
			} else {
				$this.removeClass('on');
				get_parks(false);
			}
		}

		if ($this.hasClass('transport')) {
			if (! $this.hasClass('on')) {
				$this.addClass('on');
				get_bus_routes(true);
			} else {
				$this.removeClass('on');
				get_bus_routes(false);
			}
		}

		if ($(this).hasClass('demographic')) {
			get_demographics();
		}

		return false;
	});
}); 