{{-- Posted Comments --}}
<div class="row user-comments">

    <div class="col-md-7">
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
        <hr>
    </div>

</div>

    {{-- Add a comment --}}
<div class="row add-comments">
    <div class="col-md-7">
        @if (Auth::check())
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Add Comment</button>
                </div>
            </form>
        @else
            <div class="form-group">
                <a href="/login" class="btn btn-secondary">Login To Comment</a>
            </div>
        @endif
    </div>
</div>
