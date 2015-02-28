@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-md-6">
            @include('layouts.partials.errors')
            <h1>Edit your status</h1>
            <br>
            {{ Form::open(['method' => 'PATCH', 'route' => ['status.update', $status->id ]]) }}
                <!-- Status Form Input -->
                <div class="form-group">
                    {{ Form::text ('body', $status->body, ['class'=> 'form-control', 'placeholder' => 'Whats on your Mind']) }}
                </div>
                {{ Form::hidden('status_id', $status->id) }}
                <button type="submit" class="btn btn-primary">Update status</button>
            {{ Form::close() }}
        </div>
    </div>
@stop