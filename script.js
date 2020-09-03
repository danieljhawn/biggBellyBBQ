  (function (exports) {
  "use strict";

  function initMap() {

    var myLatLng = {
      lat: 30.450483,
      lng:  -97.784343
    };

    exports.map = new google.maps.Map(document.getElementById("map"), {
      center: {
        lat: 30.4502798,
        lng: -97.7865223
      },
      zoom: 14
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: "Bigg Belly BBQ"
    });
  }

  exports.initMap = initMap;
})((this.window = this.window || {}));