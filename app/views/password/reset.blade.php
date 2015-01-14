@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h1>Reset your password</h1>

            {{ Form::open() }}
                {{ Form::hidden('token', $token) }}

            <!-- Email Form Input -->
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text ('email', null, ['class'=> 'form-control', 'required']) }}
            </div>

            <!-- Password Form Input -->
            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password ('password', ['class'=> 'form-control', 'required']) }}
            </div>

            <!-- Password_confirmation Form Input -->
            <div class="form-group">
                {{ Form::label('password confirmation', 'Password_confirmation:') }}
                {{ Form::password ('password_confirmation', ['class'=> 'form-control', 'required']) }}
            </div>
            <!-- Submit Form Input-->
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop