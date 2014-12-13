@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to larabook</h1>
        <p>I am remaking facebook using the laravel framework, well a light version of facebook.</p>
        @if( ! $currentUser)
        <p>
            {{ link_to_route('register_path', 'Sign Up!', null, ['class'=> 'btn btn-lg btn-primary']) }}
        </p>
        @endif
</div>
@stop