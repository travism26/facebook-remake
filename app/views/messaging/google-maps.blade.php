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

        function initialize() {
            var mapOptions = {
                center: newBrunswick,
                zoom: 7
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
            marker = new google.maps.Marker({
                map:        map,
                draggable:  true,
                animation:  google.maps.Animation.DROP,
                position:   newBrunswick
            });
            google.maps.event.addListener(marker, 'click', toggleBounce);
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