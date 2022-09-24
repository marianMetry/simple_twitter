<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>


<body>

    <div class="comments-container">
        <form method="post" action="{{ route('store') }}">
            @csrf
            <h3>
                Add New Post
            </h3>
            <input type="text" class="text" name="title" placeholder="Add Post Title">
            <br><br>
            <textarea id="" name="body">

            </textarea>
            <br>
            <button type="submit">Add new post</button>
        </form>

        @foreach ($posts as $post)
            <li>
                <div class="comment-main-level">
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author">{{ $post->user->name }}</h6>
                            <span>{{ $post->created_at->diffForHumans() }}</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                            <i class="h-5 like-btn text-red-600" data-id="{{ $post->id }}">&nbsp; ♥ &nbsp; <span>{{ $post->likes_count }}</span></i>
                        </div>
                        <h2>
                        </h2>
                        <div class="comment-content">
                            {{ $post->title }}
                            <br>
                            <br>
                            {{ $post->body }}
                        </div>
                    </div>
                </div>
            </li>
            @include('comments')
            <br><br><br>
        @endforeach
    </div>

<script>
    var baseUrl = '{{ url('/') }}';
</script>
<script src="{{ asset('main.js') }}"></script>
</body>

</html>
