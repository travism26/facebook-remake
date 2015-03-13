@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>Update Information</h1>
            @include('layouts.partials.errors')
            {{ Form::model($user, ['route' => ['profile_update', $user->id], 'method' => 'post']) }}
                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text ('email', null, ['class'=> 'form-control']) }}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Info</button>
                    &nbsp;{{ link_to_route('user_profile', 'Cancel') }}
                </div>
            {{ Form::close() }}
            
        </div>
    </div>
@stop