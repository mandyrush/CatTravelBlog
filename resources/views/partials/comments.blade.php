{{-- Posted Comments --}}
<div class="col-sm-5 comments">

    <div class="user-comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->user->name }}: &nbsp;
                    </strong>
                    <strong>
                        {{ $comment->created_at->DiffForHumans() }} &nbsp;
                    </strong>
                    <p>
                        {{ $comment->body }}
                    </p>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- Add a comment --}}
    <hr>
    @if (Auth::check())
        <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}

            <div class="form-group">
                <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-lg">Add Comment</button>
            </div>
        </form>
    @else
        <div class="form-group">
            <a href="/login">
                <button class="btn btn-secondary btn-lg">Login To Comment</button>
            </a>
        </div>
    @endif

</div>
