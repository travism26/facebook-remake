@extends('layouts.default')
@section('content')

    <style type="text/css">
        html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?sensor=SET_TO_TRUE_OR_FALSE">
    </script>
    <script type="text/javascript">
        var map;
        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: new google.maps.LatLng(-34.397, 150.644)
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map-canvas"></div>
@stop