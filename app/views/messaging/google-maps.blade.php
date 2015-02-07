@extends('layouts.default')
    <style type="text/css">
        html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js">
    </script>
    <script
            src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script type="text/javascript">
        //locations
        var newBrunswick = new google.maps.LatLng(46.500, -66.000);
        var marker;
        var map;

        var test = <?php echo json_encode($events, JSON_PRETTY_PRINT) ?>;

//        for(var i =0; i<test.length; i++){
//            document.write("latitude: "+test[i].latitude + "<br>");
//            document.write("longitude: "+test[i].longitude + "<br>");
//            document.write("zIndex: "+test[i].zIndex + "<br>");
//            document.write("title: "+test[i].title + "<br>");
//        }
        function initialize() {
            var mapOptions = {
                center: newBrunswick,
                zoom: 7
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
            
            setMarkers(map, test);
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function setMarkers(map, locations){

            for( var i =0; i < locations.length; i++){
                var latitude = locations[i].latitude;
                var longitude= locations[i].longitude;
                var title = locations[i].title;
                var zIndex = locations[i].zIndex;
                var eventLatLng = new google.maps.LatLng(latitude, longitude);
                marker = new google.maps.Marker({
                    map:        map,
                    draggable:  true,
                    animation:  google.maps.Animation.DROP,
                    position:   eventLatLng,
                    title:      title,
                    zIndex:     zIndex
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
<div class="row">
    {{ Form::open() }}

    {{ Form::close() }}
</div>
<div id="map-canvas"></div>