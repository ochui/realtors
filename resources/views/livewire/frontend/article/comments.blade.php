<div x-data="{show_form: false}">
    
    <!-- comment-section -->
    <div class="col-md-12 col-12">
        <!-- comment-block -->
        <div class="card mb-5">
            <div class="card-body p-4">
                <h4 class="card-title mb-5">{{$comments->count()}} Comments</h4>

                @foreach($comments as $comment)
                    <x-frontend.article.comment :comment="$comment"></x-frontend.article.comment>
                    @foreach($comment->replies as $reply)
                        <x-frontend.article.reply :reply="$reply"/>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>

    <div @click="show_form= !show_form" class="ml-3 text-xl cursor-pointer text-blue-500">Leave a comment</div>

    <div x-show="show_form" x-transition>
        <x-frontend.article.comment.form :article="$article"/>
        @if($isSubmitted)
            <div class="text-lg text-green-600">Comment submitted successfully!</div>
        @endif
    </div>

 
</div>
