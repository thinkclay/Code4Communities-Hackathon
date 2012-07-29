/* Author: 
	Jiran Dowlati, Varun Varada
*/

var MarkerGroup = function () {
	this.markers = new Array();
	this.getMarkerById = function ( id ) {
		for ( var i = 0; i < this.markers.length; i++ ) {
			var marker = this.markers[i];
			if ( marker.id == id ) { 
				return {index: i, marker: marker};
			}
		}
		return false;
	};
	this.addMarker = function ( marker ) {
		this.markers.push( marker );
	};
	this.removeMarker = function ( id ) {
		var i = this.getMarkerById( id );
		if( i && i.index ) {
			this.markers.splice( i.index,1 );
		}
	};
	this.showMarker = function ( id, map ) {
		var i = this.getMarkerById( id );
		if( i && i.marker ) {
			i.marker.setAnimation( $map.markerAnimation );
			i.marker.setMap( map );
		}
	};
	this.hideMarker = function ( id ) {
		var i = this.getMarkerById( id );
		if( i && i.marker ) {
			i.marker.setMap( null );
		}
	};
	this.showAll = function ( map ) {
		for( var i=0; i < this.markers.length; i++ ) {
			this.markers[i].setAnimation( $map.markerAnimation );
			this.markers[i].setMap( map );
		}
	};
	this.hideAll = function () {
		for( var i=0; i < this.markers.length; i++ ) {
			this.markers[i].setMap( null );
		}
	};
	return this;
}//End MarkerGroup

var $map = {
	map: null,
	geocoder: null,
	infowindow: null,
	_disastersGeoCache: [],
	currentDisaster: null,
	disastersURL: './populate',
	offersURL: './populate',
	disastersZoom: 2,
	offersZoom: 6,
	mapStyle: 'none',
	whiteStyle: [
		{
			stylers: [
				{visibility: 'off'}
			]
		},{
			featureType: 'water',
			elementType: 'geometry',
			stylers: [
				{visibility: 'on'},
				{saturation: -64},
				{lightness: 100}
			]
		},{
			featureType: 'landscape',
			stylers: [
				{visibility: 'on'},
				{gamma: 0.04},
				{lightness: 61},
				{saturation: 2}
			]
		}
	],
	markerAnimation: google.maps.Animation.DROP,
	disasterMarkers: new MarkerGroup(),
	offerMarkers: new MarkerGroup(),
	disasterIcons: {
		'1': '/media/img/drought.png',
		'2': '/media/img/earthquake.png',
		'3': '/media/img/fire.png',
		'4': '/media/img/flood.png',
		'5': '/media/img/general.png',
		'6': '/media/img/hurricane.png',
		'7': '/media/img/tornado.png',
		'8': '/media/img/tsunami.png',
		'9': '/media/img/volcano.png'
	},
	 offerIcons: {
		'1': '/media/img/condominium.png',
		'2': '/media/img/police.png',
		'3': '/media/img/demographic.png',
		'4': '/media/img/school.png',
		'5': '/media/img/bus.png',
		'6': '/media/img/park.png',
		'4': '/media/img/library.png',
		'5': '/media/img/interest.png',
		'6': '/media/img/ems.png'
	},
	offerMarkerIcons: {
		accomodations: '/media/img/icons/house-25-pog.png',
		products: '/media/img/icons/box-25-pog.png',
		nourishment: '/media/img/icons/food-25-pog.png',
		medical: '/media/img/icons/medic-25-pog.png',
		transport: '/media/img/icons/car-25-pog.png',
		animals: '/media/img/icons/pet-25-pog.png'
	},
	initMap: function ( element ) {
		$map.map = new google.maps.Map( document.getElementById( element ), $map.options );
		$map.geocoder = new google.maps.Geocoder();
		$map.infowindow = new google.maps.InfoWindow();
		
		$( '.world' ).click( function () {
			$map.worldMapMode();
		} )
		$map.worldMapMode( true );
	},
	go: function ( location, zoom ) {
		$map.map.panTo( location );
		if ( zoom ) {
			$map.map.setZoom( zoom );
		}
	},
	worldMapMode: function ( init ) {
		if ( init || $map.currentDisaster ) {
			$map.disasterMarkers.hideAll();
			$map.offerMarkers.hideAll();
			$map.currentDisaster = null;
			$map.map.setOptions( $map.options );
			$map.go( $map.options.center, $map.options.zoom );
			
			if ( $map._disastersGeoCache.length == 0 ) {
				for ( var i in disasters ) {
					//if ( typeof $map._disastersGeoCache[disasters[i].id] == 'undefined' ) {
						$map.geocoder.geocode( { 'address': disasters[i].location}, ( function ( j ) {
							return function ( results, status ) {
								if ( status == google.maps.GeocoderStatus.OK ) {
									$map._disastersGeoCache[disasters[j].id] = results[0].geometry.location;
									$map.addMarker( 'disaster-' + disasters[j].id, $map._disastersGeoCache[disasters[j].id], disasters[j].type, disasters[j].name );
								} else {
									alert( 'Geocode was not successful for the following reason: ' + status );
								}
							};
						} )( i ) );
					/*} else {
						$map.addMarker( 'disaster-' + disasters[i].id, $map._disastersGeoCache[disasters[i].id], disasters[i].type, disasters[i].name );
					}*/
				}
			} else {
				$map.disasterMarkers.showAll( $map.map );
			}
			
			$( '#select-disaster' ).html( $( '.world' ).html() );
			$( '#menu > li#disaster > a' ).removeClass();
			$( '#menu > li#disaster > a' ).addClass( 'world' );
		}
	},
	localMapMode: function () {
		$map.disasterMarkers.hideAll();
		$map.offerMarkers.hideAll();
		$map.map.setOptions( {
			minZoom: $map.offersZoom,
			draggable: true,
			scrollwheel: true,
			zoomControl: true
		} );
		$( '#select-disaster' ).html( disasters[$map.currentDisaster.replace( 'disaster-', '' ) - 1].name );
		$( '#menu > li#disaster > a' ).removeClass();
		$( '#menu > li#disaster > a' ).addClass( $( '#' + $map.currentDisaster + ' > a' ).get( 0 ).className );
	},
	toggleStyle: function () {
		if( $map.mapStyle == 'none' ) {
			$map.whiteOutStyle();
		}
		else{
			$map.clearStyle();
		}
	},
	clearStyle: function () {
		$map.mapStyle = 'none';
		$map.map.setOptions( {styles: false} );
	},
	addMarker: function ( id, loc, type, title ) {
		if ( id.indexOf( 'disaster' ) != -1 ) {
			var marker = new google.maps.Marker( {
				id: id,
				position: loc,
				map: $map.map,
				icon: $map.disasterIcons[type],
				title: title,
				animation: $map.markerAnimation
			} );
			$map.disasterMarkers.addMarker( marker );
		} else {
			var marker = new google.maps.Marker( {
				id: id,
				offerInfo: (typeof arguments[4] != 'undefined') ? arguments[4] : '',
				position: loc,
				map: $map.map,
				icon: $map.offerIcons[type],
				title: title,
				animation: $map.markerAnimation
			} );
			$map.offerMarkers.addMarker( marker );
		}
		$map.addMarkerEvents( marker, id );
	},
	getMarkerByID: function ( id ) {
		if ( id.indexOf( 'disaster' ) != -1 ) {
			return $map.disasterMarkers.getMarkerById( id );
		} else {
			return $map.offerMarkers.getMarkerById( id );
		}
	},
	hideMarker: function ( id ) {
		if ( id.indexOf( 'disaster' ) != -1 ) {
			$map.disasterMarkers.hideMarker( id );
		} else {
			$map.offerMarkers.hideMarker( id );
		}
	},
	showMarker: function ( id ) {
		if ( id.indexOf( 'disaster' ) != -1 ) {
			$map.disasterMarkers.showMarker( id, $map.map );
		} else {
			$map.offerMarkers.showMarker( id, $map.map );
		}
	},
	showAllMarkers: function ( type ) {
		if ( id.indexOf( 'disaster' ) != -1 ) {
			$map.disasterMarkers.showAll( $map.map );
		} else {
			$map.offerMarkers.showAll( $map.map );
		}
	},
	hideAllMarkers: function ( type ) {
		if ( id.indexOf( 'disaster' ) != -1 ) {
			$map.disasterMarkers.hideAll( $map.map );
		} else {
			$map.offerMarkers.hideAll( $map.map );
		}
	},
	addMarkerEvents: function ( marker, id ) {
		if ( marker.id.indexOf( 'disaster' ) != -1 ) {
			google.maps.event.addListener( marker, 'click', 
				function () {
					if ( $map.currentDisaster != id ) {
						$map.currentDisaster = id;
						$map.localMapMode();
						$map.go( marker.getPosition(), $map.offersZoom );
						$.getJSON( $map.offersURL, { 'id': id.replace( 'disaster-', '' ) }, function ( result ) {
							//window.location.hash = '#/relief';
							$map.offerMarkers = new MarkerGroup();
							for ( var i in result ) {
								$map.geocoder.geocode( { 'address': result[i].location}, ( function ( j ) {
									return function ( results, status ) {
										if ( status == google.maps.GeocoderStatus.OK ) {
											$map.addMarker( 'offer-' + result[j].id, results[0].geometry.location, result[j].type, result[j].location, result[i] );
										} else {
											alert( 'Geocode was not successful for the following reason: ' + status );
										}
									}
								} )( i ) );
							}
						} );
					}
				}
			);
			$( '#' + id ).click( function () {
				if ( $map.currentDisaster != id ) {
					google.maps.event.trigger( $map.disasterMarkers.getMarkerById( id ).marker, 'click' );
				}
			} );
		} else {
			google.maps.event.addListener( marker, 'click', 
				function () {
					/*$map.map.panTo( marker.getPosition() );
					$map.map.setZoom( 6 );*/
					$map.infowindow.setContent( '<div class="infowindow">' +
						'<div class="location">' + marker.offerInfo.location + '</div>' +
						'<div class="description">' + marker.offerInfo.description + '</div>' + 
						( (marker.offerInfo.username.indexOf( '@' ) != -1) ? '<a href="mailto:' + marker.offerInfo.username + '" class="button">Contact Person</a>' : '<div class="contact">Contact: ' + marker.offerInfo.username + '</div>' ) +
					'</div>' );
					$map.infowindow.open( $map.map, marker );
				}
			);
		}
	}
}//Closes $map

$map.options = {
	disableDefaultUI: true,
	center: new google.maps.LatLng( 0,0 ),
	zoom: 2,
	minZoom: 2,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
	backgroundColor: '#ffffff',
	styles: $map.whiteStyle,
	draggable: false,
	keyboardShortcuts: false,
	scrollwheel: false,
	panControl: false,
	zoomControl: false,
	scaleControl: false,
	streetViewControl: false
}

var SR = {
	options: {},
	loggedIn: false,
	init: function () {
		// Initialize user logged-in state
		if ( typeof SR.options.userInfo != 'undefined' ) {
			SR.loggedIn = true;
			$( '#user > a' ).html( 'welcome ' + SR.options.userInfo.firstname.toLowerCase() );
		}
		
		// Bind event handlers
		$( 'nav a' ).click( function ( e ) {
			e.preventDefault();
			var html = $( this ).text();

			if ( !$( this ).hasClass( 'active' ) ) {
				$( '#sidebar' ).children( 'ul' ).each( function () {
					if ( $( this ).hasClass( html ) ) {
						$( this ).siblings().slideUp();
						$( this ).slideDown();
					}
				} );

				$( '#sidebar a' ).each( function ( elem ) {
					$( elem ).removeClass( 'active' );
				} );
				/*$( this ).addClass( 'active' );*/
			}
		} );
		
		$( '#find-relief' ).click( function( e ) {
			e.preventDefault();
			$map.worldMapMode();
		} );
		
		$( '#offer-relief' ).click( function ( e ) {
			if ( !SR.loggedIn ) {
				$( '#user' ).addClass( 'shown' );
				$( '#login-menu' ).addClass( 'shown' );
				$( '#username' ).focus();
				$( '#user' ).mouseleave( function ( e ) {
					if ( $( this ).hasClass( 'shown' ) ) {
						$( '#user' ).removeClass( 'shown' );
						$( '#login-menu' ).removeClass( 'shown' );
					}
				} );
			} else {
				//Jquery Reveal
				$( '#offerReliefBox' ).reveal( {
					animation: 'fadeAndPop',                   //fade, fadeAndPop, none
					animationspeed: 300,                       //how fast animtions are
					closeonbackgroundclick: true,              //if you click background will modal close?
					dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
				} );
			}
		} );

		$( '.filterform' ).click( function ( e ) {
			e.preventDefault();
			$html = $( this ).text();

			
			$( '.filter' ).children( 'div' ).each( function () {
				if( $( this ).hasClass( $html + '_filter' )) {
					$( this ).animate( {'left' : '-=240px' } );
				}
			} );

			$( '#sidebar a' ).each( function ( elem ) { $( elem ).removeClass( 'active' ); } );
			$( this ).addClass( 'active' );
			
		} );

		$( '.back_button' ).click( function ( e ) {
			e.preventDefault();
			$( '.filterform' ).removeClass( 'active' );
			$( '.filter > div' ).animate( {'left' : '+=240px' } );
			$( '.filter > div' ).removeClass( 'shown' );
		} );

		$( 'button' ).click( function () {
			$( this ).toggleClass( 'active' );
		} );
		
		$( '#login-menu > form' ).submit( function ( e ) {
			e.preventDefault();
			if ( $( '#username' ).val() && $( '#password' ).val() )
				SR.login();
		} );
		
		$( '#offerReliefBox > form' ).ajaxForm( function( response ) {
			alert( response );
		} );
	},
	login: function () {
		if ( !SR.loggedIn ) {
			$.post( './login', {
				username: $( '#username' ).val(),
				password: $( '#password' ).val()
			}, function ( result ) {
				if ( result.response == 'success' ) {
					SR.loggedIn = true;
					SR.options.userInfo = result.userInfo;
					$( '#user > a' ).html( 'welcome ' + SR.options.userInfo.firstname.toLowerCase() );
					$( '#login-menu' ).html( result.content );
					if ( $( '#user' ).hasClass( 'shown' ) ) {
						window.setTimeout( function () {
							$( '#user' ).removeClass( 'shown' );
							$( '#login-menu' ).removeClass( 'shown' );
						}, 2000 );
					}
				} else if ( result.response == 'failure' ) {
					var bcolor = $( '#login-menu > form' ).css( 'border-left-color' );
					$( '#login-menu > form' ).animate( {
						'borderTopColor': '#ff0000',
						'borderRightColor': '#ff0000',
						'borderBottomColor': '#ff0000',
						'borderLeftColor': '#ff0000'
					}, 'swing' ).delay( 1000 ).animate( {
						'borderTopColor': bcolor,
						'borderRightColor': bcolor,
						'borderBottomColor': bcolor,
						'borderLeftColor': bcolor
					}, 'swing' );
				} else if ( result.response == 'multiple' ) {
					alert( 'You have already logged into another location.' );
				}
			}, 'json' );
		}
	}
};


$( document ).ready( function () {
	// Initialize the Sparkrelief user interface
	SR.init();
	
	//Call Google Map Api Initialize
	$map.initMap( 'map' );
} );

//Edits for JS fiel
/*
 var crime =
 [
  {
   "incident_id": "2009118827.0",
   "offense_id": "2009118827299901",
   "offense_code": "2999",
   "offense_code_extension": "1",
   "offense_type_id": "criminal-mischief-mtr-veh",
   "offense_category_id": "public-disorder",
   "first_occurance_date": "2009-02-23 18:00:00",
   "last_occurance_date": "2009-02-24 06:30:00",
   "reported_date": "2009-02-24 07:16:59",
   "incident_address": "5300 BLK N TUCSON WAY",
   "geo_x": "3185398.0",
   "geo_y": "1713751.0",
   "geo_lon": "-104.8402543",
   "geo_lat": "39.7912063",
   "district_id": "5",
   "precinct_id": "521",
   "neighborhood_id": "montbello"
  }
 ]

var disasters = 
[
  {
    id: "1",
    location: "Alberta, Canada",
    name: "Alberta Fires",
    type: "3"
  },

  {
    id: "2",
    location: "Colorado, USA",
    name: "Colorado Fires",
    type: "3"
  }
]

$map.geocoder.geocode( {'address' : crime[0].incident_address}, function(result, status){
              if (status == google.maps.GeocoderStatus.OK) {
                $map.addMarker('disaster-' + disasters[i].id, result[0].geometry.location, disasters[i].type, disasters[i].name);
                $map.showMarker('disaster-' + disasters[i].id);
              } else {
                alert( 'Geocode was not successful for the following reason: ' + status );
              }
}); */