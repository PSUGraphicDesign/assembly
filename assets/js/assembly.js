window.Assembly = window.Assembly || {
  Classes: {},
  UI: {},
  Storage: {}
};

window.Assembly.Storage.map_marker_inactive = {
  url: '/assets/images/map/pin-inactive.png',
  size: new google.maps.Size(24, 50),
  origin: new google.maps.Point(0,0),
  anchor: new google.maps.Point(12, 50)
};

window.Assembly.Storage.map_marker_active = {
  url: '/assets/images/map/pin-active.png',
  size: new google.maps.Size(24, 50),
  origin: new google.maps.Point(0,0),
  anchor: new google.maps.Point(12, 50)
};


window.Assembly.Storage.map_styles = [
  {
    "stylers": [
      { "hue": "#003bff" },
      { "saturation": -100 }
    ]
  }
];

window.Assembly.Storage.map_settings = {
  styles: window.Assembly.Storage.map_styles,
  disableDefaultUI: true
}


$(function () {
  var page = $(document.body);

  if ( page.hasClass('schedule') ) {
    new window.Assembly.Classes.Schedule({
      map_settings: window.Assembly.Storage.map_settings,
      map: "#map",
      day_selector: ".day",
      event_selector: ".event"
    });
  }

  if ( page.hasClass('event') ) {
    var map_container = $('#map'),
        lat = map_container.data('center-lat'),
        lng = map_container.data('center-lng'),
        center = new google.maps.LatLng(lat, lng),
        map = new google.maps.Map(map_container.get(0), $.extend(true, window.Assembly.Storage.map_settings, {
          zoom: 16,
          center: center
        })),
        marker = new google.maps.Marker({
          position: center,
          map: map,
          icon: window.Assembly.Storage.map_marker_active
        });
  }
});
