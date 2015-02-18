<article class="comments__comment media status-media">
    <div class="pull-left">
        @include('users.partials.avatar', ['user' => $comment->owner, 'class' => 'media-object'])
    </div>

    @if($signedIn && ($currentUser->id == $comment->owner->id))
        <div class="pull-right">
            {{ link_to_route('comment.edit', 'Edit', array($comment->id)) }}
        </div>
    @endif

    <div class="media-body">
        <h4 class="media-heading">{{ $comment->owner->username }}</h4>
        {{ $comment->body }}
    </div>
</article>