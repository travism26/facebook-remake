@extends('layouts.default')
@section('content')
    <h2>Edit Comment</h2>
    <div class="col-md-6">
        {{ Form::open(['method' => 'PATCH', 'route' => ['comment.update', $comment->id ]]) }}
            <!-- Status Form Input -->
            <div class="form-group">
                {{ Form::text ('comment', $comment->body, ['class'=> 'form-control', 'placeholder' => 'hehe comment']) }}
            </div>
            {{ Form::hidden('status_id'. $comment->id) }}
            <button type="submit" class="btn btn-primary">Update status</button>
        {{ Form::close() }}
    </div>
@stop