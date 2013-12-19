<div class="comment" id="comment-{{ $comment->id }}">
        {{ $comment->body }}

        <div class="user">
            {{ $comment->author->thumbnail }}
            <div class="info">
                <h6><a href="{{ $comment->forumThreadUrl }}">{{ $comment->author->name }}</a></h6>
                <ul class="meta">
                    <li>{{ $comment->created_ago }}</li>
                </ul>
            </div>
        </div>
        @if(Auth::user() && $comment->author_id == Auth::user()->id)
            <div class="admin-bar">
                <li><a class="button" href="{{ action('ArticlesController@getEditComment', [$article->slug->slug, $comment->id]) }}">Edit</a></li>
                <li><a class="button" href="{{ action('ArticlesController@getDeleteComment', [$article->slug->slug, $comment->id]) }}">Delete</a></li>
            </div>
        @endif
</div>