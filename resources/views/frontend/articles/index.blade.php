<x-frontend>

            <!-- pageheader -->
            <div class="py-6 py-lg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-8  col-12">
                            <h1 class="display-5 fw-bold mb-2">Blog</h1>
                            <p class="lead">Lorem ipsum dolor sit sed lectus nquet facilisiorbi ligula lorem nece placerat placeramod.
                            </p>
                            <!-- breadcrumb -->
                            <nav aria-label="breadcrumb" class="mt-5">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
<!-- post classic block -->
<div class="pb-lg-11 pb-7">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 mb-6">
                <h1>Latest News</h1>
            </div>
        </div>
            <div class="row">
                @forelse($articles as $article)
                    <x-frontend.article :article="$article"/>
                @empty
                    <div class="text-gray-500 text-center my-2 text-2xl">Not available</div>
                @endforelse
            </div>
    </div>
</div>

        {{method_exists($articles, 'links') ? $articles->links() : ''}}

</x-frontend>
