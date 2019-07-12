!function (i) {
    "use strict";
    i(document).ready(function () {
        var i = [{
            lat: 40.665472,
            lon: -73.927885,
            title: "NEW YORK",
            html:
                [   "<h3>Consulting Inc</h3>", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus arc</p>",
                    "<ul>" +
                    "<li><i class='fa fa-home'></i>  8th floor, 379 Hudson St, New York, NY 10018</li>" +
                    "<li><i class='fa fa-phone'></i>  (+1) 96 716 6879</li>" +
                    "<li><i class='fa fa-fax'></i>  (+1) 96 716 6879</li>" +
                    "</ul>"].join(""),
            icon: "images/icons/ic-location.png",
            animation: google.maps.Animation.DROP,
            zoom: 10
        }, {
            lat: 37.749119,
            lon: -122.435437,
            title: "SAN FRANCISCO",
            html:
                [   "<h3>Consulting Inc</h3>", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus arc</p>",
                    "<ul>" +
                    "<li><i class='fa fa-home'></i> 500-528 Burnett Ave San Francisco, CA 94131</li>" +
                    "<li><i class='fa fa-phone'></i>  (+1) 96 716 6879</li>" +
                    "<li><i class='fa fa-fax'></i>  (+1) 96 716 6879</li>" +
                    "</ul>"].join(""),
            icon: "images/icons/ic-location.png",
            show_infowindow: !0,
            animation: google.maps.Animation.DROP,
            zoom: 10
        }, {
            lat: 51.509827,
            lon: -0.132490,
            title: "LONDON",
            html:
                [   "<h3>Consulting Inc</h3>", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus arc</p>",
                    "<ul>" +
                    "<li><i class='fa fa-home'></i>  Privy Council Waterloo Rd, Waterloo, London</li>" +
                    "<li><i class='fa fa-phone'></i>  (+1) 96 716 6879</li>" +
                    "<li><i class='fa fa-fax'></i>  (+1) 96 716 6879</li>" +
                    "</ul>"].join(""),
            icon: "images/icons/ic-location.png",
            animation: google.maps.Animation.DROP,
            zoom: 10
        }, {
            lat: 48.857661,
            lon:  2.353287,
            title: "PARIS",
            html:
                [   "<h3>Consulting Inc</h3>", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus arc</p>",
                    "<ul>" +
                    "<li><i class='fa fa-home'></i>  Le Cocher Fidele 125 Rue Saint-Antoine, 75004 Paris</li>" +
                    "<li><i class='fa fa-phone'></i>  (+1) 96 716 6879</li>" +
                    "<li><i class='fa fa-fax'></i>  (+1) 96 716 6879</li>" +
                    "</ul>"].join(""),
            icon: "images/icons/ic-location.png",
            animation: google.maps.Animation.DROP,
            zoom: 10
        }];

        new Maplace({
            locations: i,
            map_div: "#google_map",
            controls_div: '#controls-tabs',
            view_all: false,
            controls_type: "list",
            controls_on_map: !1,
            map_options: {scrollwheel: !1},
            start: 1,
            styles: {
                Night: [{featureType: "all", stylers: [{invert_lightness: "true"}]}],
                Greyscale: [{featureType: "all", stylers: [{saturation: -100}, {gamma: .5}]}],
                "Ultra Light": [{
                    featureType: "landscape",
                    stylers: [{saturation: -100}, {lightness: 65}, {visibility: "on"}]
                }, {
                    featureType: "poi",
                    stylers: [{saturation: -100}, {lightness: 51}, {visibility: "simplified"}]
                }, {
                    featureType: "road.highway",
                    stylers: [{saturation: -100}, {visibility: "simplified"}]
                }, {
                    featureType: "road.arterial",
                    stylers: [{saturation: -100}, {lightness: 30}, {visibility: "on"}]
                }, {
                    featureType: "road.local",
                    stylers: [{saturation: -100}, {lightness: 40}, {visibility: "on"}]
                }, {
                    featureType: "transit",
                    stylers: [{saturation: -100}, {visibility: "simplified"}]
                }, {featureType: "administrative.province", stylers: [{visibility: "off"}]}, {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]
                }, {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]
                }]
            }
        }).Load()
    })
}(jQuery);