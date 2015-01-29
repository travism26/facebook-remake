@extends('layouts.default')
@section('content')
    <style>
        html, body, #map-canvas {
            height: 100%;
            margin: 10px;
            padding: 110px;
            background: yellow;
        }
    </style>
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js"
            >
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
                title:"SAY WHAAAA?"

            });
            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map-canvas">
    </div>
@stop