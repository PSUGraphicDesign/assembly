$(function () {
  if ( $('.map').length ) {
    map_init('#map-canvas');
  }
});

function map_init (map) {
  var lat = $(map).data('center-lat'),
      lng = $(map).data('center-lng'),
      zoom = $(map).data('zoom')
  var mapOptions = {
    zoom: zoom,
    center: new google.maps.LatLng(lat, lng),
    disableDefaultUI: true,
    styles: [
      {
        "stylers": [
          { "hue": "#003bff" },
          { "saturation": 100 }
        ]
      },{
        "featureType": "landscape.natural",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "road.highway",
        "stylers": [
          { "visibility": "simplified" }
        ]
      }
    ]
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var marker = new google.maps.Marker({
      position: mapOptions.center,
      map: map,
      title: 'Hello World!'
  });
}
