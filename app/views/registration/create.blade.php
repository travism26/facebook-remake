@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Register</h1>

            @include('layouts.partials.errors')
            {{ Form::open(['route' => 'register_path', 'method' => 'post']) }}
                <!-- Username Form Input -->
                <div class="form-group">
                    {{ Form::label('username', 'Username:') }}
                    {{ Form::text ('username', '', ['class'=> 'form-control']) }}
                </div>

                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text ('email', '', ['class'=> 'form-control']) }}
                </div>

                <!-- Password Form Input -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password ('password', ['class'=> 'form-control']) }}
                </div>
                <!-- Password_confirmation Form Input -->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password_confirmation:') }}
                    {{ Form::password ('password_confirmation', ['class'=> 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Sign up', ['class' => 'btn btn-primary']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop