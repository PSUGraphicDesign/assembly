/*
  Assembly Schedule & Map Manager
  August W. Miller, Jordan Hoagbin
  2015
*/

// Schedule Organizer

window.Assembly.Classes.Schedule = window.Assembly.Classes.Schedule || function (opts) {
  this.options = $.extend(true, {
    map_container: $('.map-container'),
    map_settings: {
      zoom: 13,
      center: new google.maps.LatLng($('.map-container').data('center-lat'), $('.map-container').data('center-lng')),
    },
    marker_image: '/assets/images/map/pin-inactive.png',
    marker_image_active: '/assets/images/map/pin-active.png'
  }, opts);

  this.days = [];

  this.init();

  console.log(this);
}

window.Assembly.Classes.Schedule.prototype = {
  init: function () {
    this.map = new google.maps.Map(this.options.map_container.get(0), this.options.map_settings);

    $(this.options.day_selector).each((function (_this) {
      return function (index, el) {
        _this.days.push(new window.Assembly.Classes.Day(el, _this));
      }
    })(this));
  },
  isolate: function (to_isolate) {
    $.each(this.days, function (index, day) {
      if (day !== to_isolate) {
        day.hide();
      }
    });
  }
}


// Individual Days

window.Assembly.Classes.Day = window.Assembly.Classes.Day || function (el, schedule) {
  this.schedule = schedule;
  this.el = $(el);
  this.event_container = this.el.find('.events');
  this.is_open = false;

  this.events = [];

  this.init();
}

window.Assembly.Classes.Day.prototype = {
  init: function () {
    $.each(this.event_container.find('.event'), (function (_this) {
      return function (index, el) {
        _this.events.push(new window.Assembly.Classes.Event(el, _this));
      }
    })(this));

    this.listen();
    this.hide();
  },
  listen: function () {
    this.el.find('.day-banner').on('click', (function (_this) {
      return function (e) {
        _this.toggle();
      }
    })(this));
  },
  toggle: function () {
    if (this.is_open) {
      this.hide();
    } else {
      this.show();
    }
  },
  show: function () {
    // this.schedule.isolate(this);
    this.event_container.slideDown({ queue: false });

    $.each(this.events, function (index, el) {
      el.focus();
    });

    this.is_open = true;
  },
  hide: function () {
    this.event_container.slideUp({ queue: false });

    $.each(this.events, function (index, el) {
      el.blur();
    });

    this.is_open = false;
  }
}


// Events

window.Assembly.Classes.Event = window.Assembly.Classes.Event || function (el, day) {
  this.el = $(el);
  this.day = day;
  this.schedule = day.schedule;
  this.lat = this.el.data('lat');
  this.lng = this.el.data('lng');

  this.init();
}

window.Assembly.Classes.Event.prototype = {
  init: function () {
    this.icon_active = {
      url: this.schedule.options.marker_image_active,
      size: new google.maps.Size(24, 50),
      origin: new google.maps.Point(0,0),
      anchor: new google.maps.Point(0, 12)
    };

    this.icon_inactive = {
      url: this.schedule.options.marker_image,
      size: new google.maps.Size(24, 50),
      origin: new google.maps.Point(0,0),
      anchor: new google.maps.Point(0, 12)
    };

    this.pin = new google.maps.Marker({
      position: new google.maps.LatLng(this.lat, this.lng),
      map: this.schedule.map,
      title: this.el.find('.event-title').text(),
      icon: this.icon_inactive
    });

    this.listen();
  },
  listen: function () {
    google.maps.event.addListener(this.pin, 'click', (function(_this) {
      return function (e) {
        _this.day.show();
      }
    })(this));

    this.el.on('mouseenter', (function(_this) {
      return function (e) {
        _this.mouseenter();
      }
    })(this)).on('mouseleave', (function(_this) {
      return function (e) {
        _this.mouseleave();
      }
    })(this));


  },
  focus: function () {
    this.pin.setIcon(this.icon_active);
  },
  blur: function () {
    this.pin.setIcon(this.icon_inactive);
  },
  mouseenter: function () {
    this.pin.setAnimation(google.maps.Animation.BOUNCE);
  },
  mouseleave: function () {
    this.pin.setAnimation(null);
  }
}
