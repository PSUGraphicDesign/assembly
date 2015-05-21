window.Assembly = window.Assembly || {
  Classes: {},
  UI: {},
  Storage: {}
};

window.Assembly.Storage.map_styles = [
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
];

$(function () {
  if ( $('.map').length ) new window.Assembly.Classes.Schedule({
    map_options: window.Assembly.Storage.map_options,
    map: "#map",
    day_selector: ".day",
    event_selector: ".event",
    map_settings: {}
  });
});
