@props(['article'])



    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
        <div class="mb-6">
            <!-- post classic block -->

            <a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}"><img src="/images/listing-img-1.jpg" alt="Realtor Directory & Listing Bootstrap 5 Theme" class="w-100 rounded-3 img-hover"></a>

            <div class="mt-4">
                <div class="text-sm mb-1 ">
                    <span class="me-2 font-weight-semi-bold">{{$article->published_at->format('M d, Y')}}</span>
                    <span class="font-weight-semi-bold"><a href="{{route('articles-by-category', $article->category->alias)}}">{{$article->category->name}}</a> </span>
                </div>
                {{-- <x-frontend.article.tags :keywords="$article->keywords"/> --}}
                <h4 class="mb-0"><a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}" class="text-inherit">{{$article->heading}}</a>
                </h4>
                <!-- postmeta start -->
            </div>
        </div>
    </div>
