
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js">
    </script>
    <script type="text/javascript">
        //locations
        var newBrunswick = new google.maps.LatLng(46.500, -66.000);
        var fredericton = new google.maps.LatLng(45.9500, -66.6667);
        var gesgapegiag = new google.maps.LatLng(48.199, -65.923);
        var marker;
        var map;

        /**
         * Data for the markers consisting of a name, a LatLng and a zIndex for
         * the order in which these markers should display on top of each
         * other.
         */
        var events = [
            ['Fredericton', 45.9500, -66.6667, 3],
            ['Gesgapegiag', 48.199, -65.923, 4],
            ['Saint John', 45.2796, -66.0628, 2],
            ['Miramichi', 47.0225, -65.5089, 1]
        ];
        function initialize() {
            var mapOptions = {
                center: newBrunswick,
                zoom: 7
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
            setMarkers(map, events);
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function setMarkers(map, locations){

            for( var i =0; i < locations.length; i++){
                var event = locations[i];
                var eventLatLng = new google.maps.LatLng(event[1], event[2]);
                marker = new google.maps.Marker({
                    map:        map,
                    draggable:  true,
                    animation:  google.maps.Animation.DROP,
                    position:   eventLatLng,
                    title:      event[0],
                    zIndex:     event[3]
                });
            }
        }
        function toggleBounce()
        {
            if(marker.getAnimation() != null)
            {
                marker.setAnimation(null);
            } else
            {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
<div id="map-canvas"></div>
"https://maps.googleapis.com/maps/api/js?key={{ $API_KEY }}"
</body>
</html>