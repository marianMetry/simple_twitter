    @foreach ($Children as $comment)
        <ul id="comments-list" class="comments-list">
            <ul>
                <ul class=" reply-list">
                    <li>
                        <div class=" @if ($reply) reply @endif comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name"><a href="http://creaticode.com/blog">
                                        {{ $comment->user->name }}
                                    </a></h6>
                                <span>{{ $comment->created_at }}</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                {{ $comment->title }}
                                <br>
                                <br>
                                {{ $comment->body }}
                            </div>
                            <div>
                                <form method="post" action="{{ route('posts.store') }}">
                                    @csrf
                                    <input type="text" class="text" name="body" placeholder="Add reply">
                                    <input hidden type="text" class="text" name="parent_id"
                                        value="{{ $comment->id }}" placeholder="Add reply">
                                    <button type="submit">Add reply</button>
                                </form>
                            </div>
                            @if (count($comment->Children))
                                @include('comments', ['Children' => $comment->Children, 'reply' => true])
                            @endif
                        </div>
                    </li>
                </ul>
            </ul>
        </ul>
    @endforeach
