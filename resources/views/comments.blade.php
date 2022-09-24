@foreach ($post->Children as $comment)
    @foreach ($comment->Children as $reply)
        <ul id="comments-list" class="comments-list">
            <ul>
                <ul class=" reply-list">
                    <li>
                        <div class="comment-box">
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
                        </div>
                    </li>

                    <li>
                        <!-- Avatar -->
                        <!-- Contenedor del Comentario -->
                        <div class="reply-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a
                                        href="http://creaticode.com/blog">{{ $reply->user->name }}</a></h6>
                                </h6>
                                <span>{{ $reply->created_at }}</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                {{ $reply->title }}
                                <br>
                                <br>
                                {{ $reply->body }}
                            </div>
                        </div>
                    </li>
                </ul>

            </ul>
        </ul>
    @endforeach
@endforeach
