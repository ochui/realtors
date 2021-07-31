@props(['showShadow'])
<div @if ($showShadow)
    class="nav-header nav-header-classic shadow"
@else
    class="nav-header nav-header-classic menu-space header-position header-white"
@endif>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/"> <img src="{{ asset('images/logo.svg') }}" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto ms-lg-3">
                            <li class="nav-item">
                                <a class="nav-link" href="/" id="homeDropdown" role="button">Home</a>
                            </li>
                            <li class="nav-item dropdown menu_list">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarExplore" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Explore</a>
                                <div class="dropdown-menu w-100 p-0" aria-labelledby="navbarExplore">
                                    <div class="row g-0">
                                        <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-xl-block d-lg-block d-md-none d-none">
                                            <div class="dropdown-img "
                                                style="background-image: url({{ asset('images/dropdown-img.jpg') }});">
                                                <div class="dropdown-img-caption">
                                                    <h2 class="text-white mb-1">Get listed </h2>
                                                    <p class="mb-4">Take the perceived professionalism of your business
                                                        to the next level and maximise your business's potential by
                                                        joining us.</p>
                                                    <a href="add-listing.html" class="btn btn-primary">Join Us </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6">
                                            <div class="row m-3 m-lg-6">
                                                <div class="col-md-3">
                                                    <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Inspector
                                                    </h5>
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item" href="listing-list-view.html">Top
                                                                Rated</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="listing-grid-view.html">Featured</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="list-with-map.html">Popular</a></li>


                                                    </ul>
                                                </div>

                                                <div class="col-md-3">
                                                    <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Appraisers
                                                    </h5>
                                                    <ul class="mega-menu-list list-unstyled">
                                                        <li><a class="dropdown-item" href="listing-list-view.html">Top
                                                                Rated</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="listing-grid-view.html">Featured</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="list-with-map.html">Popular</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Realtors
                                                    </h5>
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item" href="listing-list-view.html">Top
                                                                Rated</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="listing-grid-view.html">Featured</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="list-with-map.html">Popular</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5 class="mb-2 text-uppercase h6 text-primary fw-bold">Attornies
                                                    </h5>
                                                    <ul class="mega-menu-list list-unstyled">
                                                        <li><a class="dropdown-item" href="listing-list-view.html">Top
                                                                Rated</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="listing-grid-view.html">Featured</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="list-with-map.html">Popular</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articles') }}">Our Blog</a>
                            </li>

                        </ul>
                        <a href="#" class="btn btn-primary d-none d-lg-block">Join Us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
