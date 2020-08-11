
@inject('markdown', 'Parsedown')
@php($markdown->setSafeMode(true))
@if(isset($reply) && $reply === true)
  <div id="comment-{{ $comment->getKey() }}" class="media">
@else
  <li id="comment-{{ $comment->getKey() }}" class="media">
@endif

    <article class="comment-body media">
        <div class="media-left">
            <img class="media-object" alt="" src="{{ asset('public/upload/avatar') }}/{{ $comment->commenter->user->avatar }}" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
        </div>
        <div class="media-body">
            <span class="reply greylinks">
                <a href="#respond">
                    <i class="fa fa-reply"></i>
                </a>
            </span>
            <div class="comment-meta darklinks">
                <a class="author_url" rel="external nofollow" href="#">{{ $comment->commenter->user->ho_ten ?? $comment->guest_name }}</a>
                <span class="comment-date">
                    <i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
                    <time class="entry-date small-text grey" datetime="2017-03-13T08:50:40+00:00">
                        {{ $comment->created_at->diffForHumans() }}
                    </time>
                </span>
            </div>
            <p>{!! $markdown->line($comment->comment) !!}</p>
        </div>
    </article>

    

        <div>
            @can('reply-to-comment', $comment)
                <button data-toggle="modal" data-target="#reply-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link text-uppercase">Đáp lại</button>
            @endcan
            @can('edit-comment', $comment)
                <button data-toggle="modal" data-target="#comment-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link text-uppercase">Chỉnh sữa</button>
            @endcan
            @can('delete-comment', $comment)
                <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="btn btn-sm btn-link text-danger text-uppercase">Delete</a>
                <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            @endcan
        </div>

        @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Chỉnh sữa bình luận</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        @can('reply-to-comment', $comment)
            <div class="modal fade" id="reply-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Trả lời bình luận</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <textarea required class="form-control" name="message" rows="3"></textarea>
                                    <small class="form-text text-muted"><a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a> cheatsheet.</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Trả lời</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        <br />{{-- Margin bottom --}}

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()))
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'reply' => true,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
@if(isset($reply) && $reply === true)
  </div>
@else
  </li>
@endif