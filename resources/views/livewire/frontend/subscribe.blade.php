<div class="mb-14">
    @if($isSubscribed)
        <div class="text-green-700">
            Thanks! You have subscribed successfully.
        </div>
    @else
    <h4 class=" mb-3  text-dark">Realtors deals in your inbox ?</h4>
    <p class="text-reset  ">Get special offers and more from Realtors </p>
    <form wire:submit.prevent="subscribe">
        <div class="input-group mb-3">
            <input wire:model.defer="email" type="email" class="form-control" aria-label="Email" required placeholder="Enter your email" aria-label="Enter your email" aria-describedby="subscriber">
            <button type="submit" class="btn btn-primary">
                Subscribe
            </button>
        </div>

    </form>
    <!-- footer widget  -->
    @endif
</div>
