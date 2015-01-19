<!doctype html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>My Title</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        @include('layouts.partials.nav')
        <div class="container">
            @include('flash::message')
            @yield('content')
        </div>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <!-- ... additional lines truncated for brevity ... -->
        <script href="{{ URL::asset('js/libs/jquery-1.11.1.min.js') }}"></script>
        <script href="{{ URL::asset('js/libs/ember.js') }}"></script>
        <script href="{{ URL::asset('js/libs/handlebars-v1.3.0.js') }}"></script>

        <script>
            $('.comments__create-form').on('keydown', function(e)
            {
                if (e.keyCode == 13)
                {
                    e.preventDefault();
                    $(this).submit();
                }
            });
        </script>
        {{--<script>$('#flash-overlay-modal').modal();</script>--}}
    </body>
</html>