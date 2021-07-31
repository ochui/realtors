@props(['article'])

<!-- comment-form -->
<div class="col-md-12 col-12">
    <!-- comment-reply-form -->
    <!-- Textarea -->
    <div class="card">
        <div class="card-body p-4">

            <form wire:submit.prevent="add" class="row">
                @csrf
                <h4 class="mb-3">Leave a Comment</h4>
                <div class="col-md-12 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="textarea">Comments</label>
                        <textarea class="form-control" placeholder="Comment" wire:model.defer="comment.content"
                            aria-label="Comment"></textarea>
                    </div>
                </div>


                <div class="col-md-6 col-12">
                    <!-- Text input-->
                    <div class="mb-3">
                        <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
                        <input placeholder="Name" aria-label="Name" wire:model.defer="comment.name"
                            class="form-control " required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="email">E-mail<span class="text-danger">*</span></label>
                        <input placeholder="Email" wire:model.defer="comment.email" aria-label="Email"  class="form-control "
                            required="">
                    </div>
                </div>
                <!-- Text input-->


                <div class="col-md-12 col-12">
                    <input type="checkbox" wire:model.defer="comment.notify" name="comment.notify"
                            id="comment.notify" aria-label="Notify me about new article"> <label
                            for="comment.notify">Notify me about new
                            article</label>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Button -->
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Leave comment</button>
                        <span class="small"><span class="text-danger">*</span> Required Filed</span>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
