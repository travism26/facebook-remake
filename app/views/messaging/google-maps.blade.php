<!DOCTYPE html>
<html>
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        html, body, #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
        var map;
        var marker;
        var myCenter = new google.maps.LatLng(51.508742,-0.120850);
        function initialize() {
            var mapOptions = {
                zoom: 5,
                center: new google.maps.LatLng(51.397, -0.12085)
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);

            marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE,

            });
            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>
<body>
<div id="map-canvas"></div>
</body>
</html>