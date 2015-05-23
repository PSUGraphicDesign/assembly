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
    map_settings: {
      styles: window.Assembly.Storage.map_styles,
      disableDefaultUI: true
    },
    map: "#map",
    day_selector: ".day",
    event_selector: ".event"
  });
});
