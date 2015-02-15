<article class="media status-media" xmlns="http://www.w3.org/1999/html">
    <div class="pull-left">
        @include('users.partials.avatar', ['user' => $status->user])
    </div>
    @if($signedIn)
        <div class="pull-right">
            {{ link_to_route('status.edit', 'Edit', array($status->id)) }}
        </div>
    @endif
    <div class="media-body">
        <h4 class="media-heading status-media-heading">{{ $status->user->username }}</h4>
        <p><small class="status-media-time">{{ $status->present()->timeSincePublished() }}</small></p>
        {{ $status->body }}
    </div>
</article>

@if($signedIn)
    {{ Form::open(['route' => ['comment_path', $status->id],'class' => 'comments__create-form']) }}
        {{ Form::hidden('status_id', $status->id) }}
    <!-- Body Form Input -->
    <div class="form-group">
        {{ Form::textarea ('body', null, ['class'=> 'form-control', 'rows' => 1, 'placeholder' => 'Comment']) }}
    </div>
    {{ Form::close() }}
@endif
@unless($status->comments->isEmpty())
    <div class="comments">
        @foreach($status->comments as $comment)
            @include('statuses.partials.comment')
        @endforeach
    </div>
@endunless