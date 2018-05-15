@extends ('layouts.master')
@section('title', 'Travel Posts')
@section ('content')

    {{-- Posts --}}
    <section>
        <div class="post-layout">
            <a href="javascript:history.back()" class="btn btn-sm btn-secondary mb30 mt20">
                <i class="fas fa-long-arrow-alt-left"></i> Back
            </a>

            @foreach ($posts as $key => $post)
                @if ($key % 2 == 1)
                    @include ('posts.post_odd')
                @elseif ($key % 2 == 0)
                    @include ('posts.post_even')
                @endif
            @endforeach

        </div>
    </section>

    <div class="container">
        {{ $posts->render("pagination::bootstrap-4") }}
    </div>

@endsection