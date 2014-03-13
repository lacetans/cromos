// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);
        
        function init() {
        
            var myLatlng = new google.maps.LatLng(41.72888,1.83024);
            
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                                
                scrollwheel: false,
                navigationControl: false,

                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    position: google.maps.ControlPosition.TOP_CENTER
                },

                panControl: true,
                panControlOptions: {
                    position: google.maps.ControlPosition.TOP_RIGHT
                },

                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.LARGE,
                    position: google.maps.ControlPosition.TOP_RIGHT
                },

                draggable: true,
                
                // How zoomed in you want the map to start at (always required)
                zoom: 16,
        
                // The latitude and longitude to center the map (always required)
                center: myLatlng,
        
                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType": "water","stylers": [{"color": "#19a0d8"}]},{"featureType": "administrative","elementType": "labels.text.stroke","stylers": [{"color": "#ffffff"},{"weight": 6}]},{"featureType": "administrative","elementType": "labels.text.fill","stylers": [{"color": "#e85113"}]},{"featureType": "road.highway","elementType": "geometry.stroke","stylers": [{"color": "#efe9e4"},{"lightness": -40}]},{"featureType": "road.arterial","elementType": "geometry.stroke","stylers": [{"color": "#efe9e4"},{"lightness": -20}]},{"featureType": "road","elementType": "labels.text.stroke","stylers": [{"lightness": 100}]},{"featureType": "road","elementType": "labels.text.fill","stylers": [{"lightness": -100}]},{"featureType": "road.highway","elementType": "labels.icon"},{"featureType": "landscape","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "landscape","stylers": [{"lightness": 20},{"color": "#efe9e4"}]},{"featureType": "landscape.man_made","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "labels.text.stroke","stylers": [{"lightness": 100}]},{"featureType": "water","elementType": "labels.text.fill","stylers": [{"lightness": -100}]},{"featureType": "poi","elementType": "labels.text.fill","stylers": [{"hue": "#11ff00"}]},{"featureType": "poi","elementType": "labels.text.stroke","stylers": [{"lightness": 100}]},{"featureType": "poi","elementType": "labels.icon","stylers": [{"hue": "#4cff00"},{"saturation": 58}]},{"featureType": "poi","elementType": "geometry","stylers": [{"visibility": "on"},{"color": "#f0e4d3"}]},{"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"color": "#efe9e4"},{"lightness": -25}]},{"featureType": "road.arterial","elementType": "geometry.fill","stylers": [{"color": "#efe9e4"},{"lightness": -10}]},{"featureType": "poi","elementType": "labels","stylers": [{"visibility": "simplified"}]}]
            };
            
            
            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('mapa');
        
            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
            
            var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Terra'
            });
            
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
             });infowindow.open(map,marker);
            
        
        }
