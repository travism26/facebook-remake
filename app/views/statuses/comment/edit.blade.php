@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('layouts.partials.errors')
            <h2>Edit Comment</h2>
            {{ Form::open(['method' => 'PATCH', 'route' => ['comment.update', $comment->id ]]) }}
                <!-- Status Form Input -->
                <div class="form-group">
                    {{ Form::text ('body', $comment->body, ['class'=> 'form-control', 'placeholder' => 'hehe comment']) }}
                </div>
                {{ Form::hidden('status_id', $comment->id) }}
                <button type="submit" class="btn btn-primary">Update status</button>
            {{ Form::close() }}
        </div>
    </div>
@stop