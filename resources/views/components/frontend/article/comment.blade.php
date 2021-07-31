@props(['comment'])

<!-- comment-list -->
<div class="d-lg-flex mb-5">
    <div><img src="/images/avatar-1.jpg" alt=" " class="avatar-md rounded-circle"> </div>
    <div class="ms-4">
      <div class="d-flex align-items-center mb-1">
        <h5 class="mb-0 me-3">{{$comment->user->name}}</h5> <small>{{$comment->createdAtHuman}}</small>
      </div>
      <p class="mb-2">{{$comment->content}}
      </p>
      {{-- <a href="#" class="btn-link me-2 text-sm">Reply</a> --}}
    </div>
  </div>
  <!-- comment-list -->