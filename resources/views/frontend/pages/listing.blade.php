<x-frontend>
    <!-- pageheader -->
    <div style=" 
    margin: auto;
    width: 100%;
    padding-bottom: 5%;">
    <img src="/images/states/{{$image}}" alt="" style="width: 100%;
    opacity: 1;">
    </div>
    <div class="py-6 py-lg-8 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8  col-12">
                    
                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb" class="mt-5">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Listing List View</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
    <div class="pb-lg-11 pb-7">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-8 col-12 mx-auto">
                    <div class="row mb-4">
                        <div class="col-md-3 col-8">
                            <div class="sorting">
                                <!-- select form -->
                                <select class="select2">
                                    <option selected>Default</option>
                                    <option value="1">Most Viewed</option>
                                    <option value="2">Newest Listing</option>
                                    <option value="3">Older Listing</option>
                                </select>
                            </div>
                            <!-- select form -->
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12 col-12">
                            <!-- listing block -->
                            <div class="row justify-content-end">
                                <div class="col-md-4 col-12">
                                    <div class="position-relative mb-3 mb-lg-0">
                                        <div id="listcarousel" class="carousel slide " data-bs-ride="carousel" data-bs-interval="false">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#listcarousel" data-bs-slide-to="0" class="active rounded-circle"></li>
                                                <li data-bs-target="#listcarousel" data-bs-slide-to="1" class="rounded-circle"></li>
                                                <li data-bs-target="#listcarousel" data-bs-slide-to="2" class="rounded-circle"></li>
                                            </ol>
                                            <div class="carousel-inner rounded-3">
                                                <div class="carousel-item active">
                                                    <img src="/images/listing-img-4.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/images/listing-img-5.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/images/listing-img-6.jpg" alt="Rentkit Directory & Listing Bootstrap 5 Theme" class="w-100 ">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#listcarousel" role="button" data-bs-slide="prev">
                                                <i class="mdi mdi-chevron-left icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#listcarousel" role="button" data-bs-slide="next">
                                                <i class="mdi mdi-chevron-right icon-shape icon-xs bg-white rounded-circle fs-4"></i>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </div>
                                        <div class="btn-wishlist"></div>
                                        <span class="badge bg-danger position-absolute start-0 ms-3 mt-3 top-0 z-1">Featured</span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-12">
                                    <div>
                                        <h4 class="mb-0"> <a href="list-single.html" class="text-inherit">Beautiful Cozy Home</a></h4>
                                        <p class="text-sm font-weight-semi-bold">Udaipur, Rajasthan, India</p>
                                    </div>

                                    
                                    <div class="product-box-description">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                            Fugiat recusandae, quam pariatur sed minima accusantium fugit, corrupti placeat, 
                                            voluptatem nesciunt maiores beatae iusto ipsum cum eaque eius incidunt dignissimos
                                             similique! 
                                              .</p>
                                    </div>
                                    
                                </div>
                                <div class="col-md-3 col-12">
                                    <h3>Rating (0 reviews)</h3>
                                    <div class="d-flex">
                                        <span>&#9733;</span>
                                        <span>&#9733;</span>
                                        <span>&#9733;</span>
                                        <span>&#9733;</span>
                                    </div>
                                    <div class="mt-4">
                                        <a class="btn  buy-product-button btn-primary"> View Profile</a>
                                    </div>
                                  
                                  
                                </div>
                            </div>
                            <hr class="my-3">
                            <!-- listing block -->
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend>
