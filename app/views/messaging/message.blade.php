<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
    <meta charset="UTF-8" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        {{--<script type="text/javascript" src="{{ asset("build/react.js") }}"></script>--}}
        {{--<script type="text/javascript" src="{{ asset("build/JSXTransformer.js") }}"></script>--}}
        <script src="http://fb.me/react-0.12.2.js"></script>
        <script src="http://fb.me/JSXTransformer-0.12.2.js"></script>
        <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>

        <title>Laravel 4 Chat</title>
    </head>
    <body>
        <script type="text/x-handlebars">
            @{{outlet}}
        </script>
        {{--@include('messaging.partials.data_view')--}}
        <div id="example"></div>
        <script type="text/jsx">
            var HelloWorld = React.createClass({
              render: function() {
                return (
                  <p>
                    Hello, <input type="text" placeholder="Your name here" />!
                    It is {this.props.date.toTimeString()}
                  </p>
                );
              }
            });

            setInterval(function() {
              React.render(
                <HelloWorld date={new Date()} />,
                document.getElementById('example')
              );
            }, 500);
        </script>
        <script type="text/x-handlebars" data-template-name="index">

        </script>
        @include('messaging.partials.jsDependencies')
    </body>
</html>