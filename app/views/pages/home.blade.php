@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to larabook</h1>
        <p>I am remaking facebook using the laravel framework, well a light version of facebook.</p>
        <p>Note: I added a git api wrapper the route is /github/{USERNAME}</p>
        <p>example: /github/travism26</p>
        @if( ! $currentUser)
        <p>
            {{ link_to_route('register_path', 'Sign Up!', null, ['class'=> 'btn btn-lg btn-primary']) }}
        </p>
        @endif
</div>
@stop