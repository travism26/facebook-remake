@extends('layouts.default')

@section('content')
    <h1>Post a Status</h1>
    
    {{ Form::open() }}
        <!-- Status fields Form Input -->
        <div class="form-group">
            {{ Form::label('Status', 'Status:') }}
            {{ Form::textarea ('Status', '', ['class'=> 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Post Status', ['class' => 'btn btn-primary']) }}
        </div>
    {{ Form::close() }}
@stop

