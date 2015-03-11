@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>Update Information</h1>
            {{ Form::model($user, ['route' => ['profile_update', $user->id], 'method' => 'post']) }}
                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text ('email', null, ['class'=> 'form-control']) }}
                </div>
                <button type="submit" class="btn btn-primary">Update Info</button>
            {{ Form::close() }}
        </div>
    </div>
@stop