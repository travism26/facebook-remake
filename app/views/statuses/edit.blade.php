@extends('layouts.default')
@section('content')
    <h1>Edit your status</h1>

    <br>
    <div class="col-md-6">
    {{ Form::open(['method' => 'PATCH', 'route' => ['status.update', $status->id ]]) }}
        <!-- Status Form Input -->
        <div class="form-group">
            {{ Form::text ('status', $status->body, ['class'=> 'form-control', 'placeholder' => 'Whats on your Mind']) }}
        </div>
        {{ Form::hidden('status_id'. $status->id) }}
        <button type="submit" class="btn btn-primary">Update status</button>

    {{ Form::close() }}
    </div>
@stop