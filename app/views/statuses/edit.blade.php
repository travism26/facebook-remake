@extends('layouts.default')
@section('content')
    <h1>Edit your status</h1>
    {{ $status->id }}
    {{ $status->body }}
    {{ $status->user_id }}
    <br>
    <div class="col-md-6">
    {{ Form::open() }}
    <!-- Status Form Input -->
    <div class="form-group">
        {{ Form::label('status', 'Status:') }}
        {{ Form::text ('status', $status->body, ['class'=> 'form-control', 'placeholder' => 'Whats on your Mind']) }}
    </div>

    {{ Form::close() }}
    </div>
@stop