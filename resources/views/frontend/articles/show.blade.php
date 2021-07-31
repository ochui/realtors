<x-frontend>

<!-- pageheader -->
<div style="background: url('/images/post-single-img.jpg') center center no-repeat; min-height: 600px;">
    </div>
    <div class="pt-lg-11 pb-lg-11 pt-7 pb-7">
        <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 mb-3">
            <div class="row">
                <div class="col-md-12 col-12">
                <!-- post single -->
                <div class="mb-3">
                    <div class="text-xs mb-2 ">
                    <span class="me-2 font-weight-semi-bold">Oct 17, 2021</span>
                    <span class="font-weight-semi-bold me-2"><a href="{{route('articles-by-category', $article->category->alias)}}">{{$article->category->name}}</a></span>
                    </div>
                    <!-- postmeta -->
                    <h1 class="mb-5">{{$article->heading}}</h1>
                    {!! $article->contentAsHtml !!}
                </div>
                <!-- post single -->
                </div>
                <!-- post author -->
                <!-- related-post-block -->
                <div class="col-md-12 col-12">
                <div class="border-top border-bottom pb-5 mb-6 pt-5">
                    <div class="row">
                    <div class="col-md-6 col-12">
                        <div>
                        <a href="#"><span class="mdi mdi-chevron-left"></span>Previous post</a>
                        <h5 class="mt-1 mb-0"><a href="#" class="text-inherit">Seven Various Ways To Do Rental.</a></h5>
                        </div>
                    </div>
                    <!-- related-post -->
                    <div class="col-md-6 col-12">
                        <div class="text-end">
                        <a href="#">Next post<span class="mdi mdi-chevron-right"></span></a>
                        <h5 class="mt-1 mb-0"><a href="#" class="text-inherit">Directory Website Template</a></h5>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <!-- related post -->
                <!-- related-post-block -->

                @if($article->is_comment_enabled)
                <livewire:frontend.article.comments :article="$article"/>
                @endif
                
            </div>
            </div>
            <!-- comment-form -->

            <div class="col-md-4 col-12">
            <div class="post-sidebar">
                <div class="mb-4">
                <!-- widget-search -->
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Search Article.." aria-label="Search Article..">
                </div>
                </div>
                
            </div>
            <!-- widget-categories -->
            <div class="card mb-4">
                <div class="card-body p-4">
                <h4 class="mb-3">Categories</h4>
                <ul class="list-unstyled mb-0">
                    @foreach($navCategories as $category)
                        <li class="lh-lg"><a href="{{route('articles-by-category', $category->alias)}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
                </div>
            </div>
            <!-- widget-categories -->
            <!-- widget-recent-post -->
            
            <div class="card mb-4">
                <div class="card-body p-4">
                @if(!$relatedArticles->isEmpty())
                    <div class="mb-3">
                        <h2 class="mb-4">
                            More articles on
                            <a href="{{route('articles-by-category', ['categoryAlias' => $article->category->alias])}}"
                            class="mb-4">
                                {{$article->category->name}}
                            </a>
                        </h2>
                        @foreach($relatedArticles as $relatedArticle)
                            {{-- <x-frontend.article :article="$relatedArticle"></x-frontend.article> --}}
                            <!-- recent-post-block -->
                            <div class="mb-3 border-bottom pb-3">
                                <div class="text-xs mb-2 ">
                                <span class="me-2 font-weight-semi-bold">{{$article->published_at->format('M d, Y')}}</span>
                                <span class="font-weight-semi-bold me-2"><a href="{{route('articles-by-category', ['categoryAlias' => $article->category->alias])}}">{{$article->category->name}}</a></span>
                                </div>
                                <h5 class="mb-0"><a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}" class="text-inherit">{{$article->heading}}</a></h5>
                            </div>
                        @endforeach
                    </div>
                @endif
                
                
                </div>
            </div>
            <!-- widget-archives -->
            {{-- <div class="card mb-4">
                <div class="card-body p-4">
                <h4 class="mb-3">Archives</h4>
                <ul class="list-unstyled mb-0">
                    <li class="lh-lg"><a href="#" class="text-inherit"><i
                        class="mdi mdi-chevron-right me-2 text-primary"></i>July 2021</a></li>
                    <li class="lh-lg"><a href="#" class="text-inherit"><i
                        class="mdi mdi-chevron-right me-2 text-primary"></i>June 2021</a></li>
                    <li class="lh-lg"><a href="#" class="text-inherit"><i
                        class="mdi mdi-chevron-right me-2 text-primary"></i>May 2021</a></li>
                    <li class="lh-lg"><a href="#" class="text-inherit"><i
                        class="mdi mdi-chevron-right me-2 text-primary"></i>April 2021</a></li>
                    <li class="lh-lg"><a href="#" class="text-inherit"><i
                        class="mdi mdi-chevron-right me-2 text-primary"></i>March 2021</a></li>
                    <li class="lh-lg"><a href="#" class="text-inherit"><i
                        class="mdi mdi-chevron-right me-2 text-primary"></i>February 2021</a></li>
                </ul>
                </div>
            </div> --}}
            <!-- widget-archives -->
            <!-- widget-tags -->
            <div class="card">
                <div class="card-body p-4">
                <h4 class="mb-3">Tags</h4>
                <x-frontend.article.tags :keywords="$article->keywords"></x-frontend.article.tags>

                </div>
            </div>
            <!-- widget-tags -->
            </div>
        </div>
        </div>
    </div>

    {{-- <div>
        <h1 class="font-semibold sm:text-xl md:text-2xl mb-1 leading-tight">
            {{$article->heading}}
        </h1>
        <div class="text-gray-600 text-xs md:text-sm mb-3">
            Published {{$article->createdAtHuman}} on
            <a href="{{route('articles-by-category', $article->category->alias)}}"
               class="text-blue-400 hover:text-blue-700 focus:outline-none focus:text-blue-700">
                {{$article->category->name}}
            </a>
            <span class="whitespace-no-wrap">by <span class="text-gray-800">{{$article->user->name}}</span></span>
        </div>
        <div class="text-sm md:text-lg leading-relaxed">
            {!! $article->contentAsHtml !!}
        </div>
        <div class="mb-3">
            <x-frontend.article.tags :keywords="$article->keywords"></x-frontend.article.tags>
        </div>
    </div>

    @if(!$relatedArticles->isEmpty())
        <div class="mb-3">
            <h2 class="border-b border-blue-300 text-xl md:text-2xl font-bold">
                More articles on
                <a href="{{route('articles-by-category', ['categoryAlias' => $article->category->alias])}}"
                   class="text-blue-400 hover:text-blue-700 focus:outline-none focus:text-blue-700">
                    {{$article->category->name}}
                </a>
            </h2>
            @foreach($relatedArticles as $relatedArticle)
                <x-frontend.article :article="$relatedArticle"></x-frontend.article>
            @endforeach
        </div>
    @endif

    @if($article->is_comment_enabled)
        <livewire:frontend.article.comments :article="$article"/>
    @endif --}}


</x-frontend>
