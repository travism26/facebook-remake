<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
    <meta charset="UTF-8" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <script src="http://fb.me/react-0.12.2.js"></script>
        <script src="http://fb.me/JSXTransformer-0.12.2.js"></script>
        <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/react/0.12.1/react.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/react/0.12.1/JSXTransformer.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/showdown/0.3.1/showdown.min.js"></script>

        <title>Laravel 4 Chat</title>

        <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true">
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
    </head>
    <body>
        <div id="content"></div>
        <script type="text/jsx;harmony=true">

            {{--@include('messaging.partials.todo_list')--}}
            {{--@include('messaging.partials.markdown_editor')--}}
        </script>
        <div class="clear"></div>
        <br>
            {{--{{ $authKey = "AIzaSyBq0-11FD2K0CJtw4QEw5EKhzKpivs9Lpw" }}--}}
            {{--<iframe width="600" height="450" frameborder="0" style="border:0"--}}
                    {{--src="https://www.google.com/maps/embed/v1/place?q=Redbank,+NB,+Canada&key={{ $authKey }}"></iframe>--}}
            {{--<div id="markdown"></div>--}}
        <div id="map-canvas"></div>
    </body>

</html>
