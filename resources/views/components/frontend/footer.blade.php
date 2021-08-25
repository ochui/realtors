<div class="footer pt-14 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <!-- footer widget  -->
                <div class="mb-14">
                    <h4 class=" mb-3 text-dark">Explore Realtors</h4>
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-reset lh-lg">List your property</a></li>
                            <li><a href="#" class="text-reset lh-lg">Book with Confidence</a></li>
                            <li><a href="#" class="text-reset lh-lg">Trust & Safety</a></li>
                            <li><a href="#" class="text-reset lh-lg">Vacation rental guides</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <!-- footer widget  -->
                <div class="mb-14">
                    <h4 class=" mb-3  text-dark">For Owner</h4>
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-reset lh-lg">How it works</a></li>
                            <li><a href="#" class="text-reset lh-lg">Pricing</a></li>
                            <li><a href="#" class="text-reset lh-lg">Join as Owner</a></li>
                            <li><a href="#" class="text-reset lh-lg">Help centre</a> </li>
                            <li><a href="#" class="text-reset lh-lg">Mobile App</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <div class="mb-14">
                    <h4 class=" mb-3  text-dark">Company</h4>
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-reset lh-lg">About us</a></li>
                            <li><a href="#" class="text-reset lh-lg">Careers</a></li>
                            <li><a href="#" class="text-reset lh-lg">Clients</a></li>
                            <li><a href="#" class="text-reset lh-lg">Team</a> </li>
                            <li><a href="#" class="text-reset lh-lg">Help Center</a></li>
                            <li><a href="#" class="text-reset lh-lg">Press</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- footer widget  -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <div class="mb-14">
                    <h4 class=" mb-3  text-dark">Social</h4>
                    <div>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-reset lh-lg">Facebook</a></li>
                            <li><a href="#" class="text-reset lh-lg">Twitter</a></li>
                            <li><a href="#" class="text-reset lh-lg">Linkedin</a></li>
                            <li><a href="#" class="text-reset lh-lg">Google</a></li>
                            <li><a href="#" class="text-reset lh-lg">Instagram</a></li>
                        </ul>
                    </div>
                    <!-- footer widget  -->
                </div>
            </div>
            <!-- footer widget  -->
            <div class="col-xl-4 col-lg-4 col-md-8 col-12">
                <livewire:frontend.subscribe/>
            </div>
            <div class="col-md-12 col-12">
                <p class="fs-6 text-gray-500"><?php echo '&copy; ' . (new DateTime())->format('Y') . '' ?> All rights reserved.</p>
            </div>
        </div>
        <!-- tiny footer  -->
        <!-- footer section -->
    </div>
    <!-- footer section -->
</div>

@livewireScripts
<script src="{{ mix("build/js/app.js") }}"></script>
<script src="{{asset('js/prism.js')}}" defer></script>

    <!-- scripts  -->
    <!-- Libs JS -->
    <script src="{{asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{asset('libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{asset('libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{asset('libs/jquery-raty-js/lib/jquery.raty.js') }}"></script>
    <script src="{{asset('libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{asset('libs/uppy/dist/uppy.min.js') }}"></script>
    <script src="{{asset('libs/litepicker/dist/litepicker.js') }}"></script>
    <script src="{{asset('libs/prismjs/prism.js') }}"></script>
    <script src="{{asset('libs/leaflet/dist/leaflet.js') }}"></script>
    <script src="{{asset('libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset('libs/nouislider/distribute/nouislider.min.js') }}"></script>
    <script src="{{asset('libs/wnumb/wNumb.min.js') }}"></script>

    <script src="{{asset('js/map-config.js') }}" type="text/javascript"></script>
	<script src="{{asset('js/pin-config.js') }}" type="text/javascript"></script>
	<script src="{{asset('js/map-interact.js') }}" type="text/javascript"</script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

    <!-- Theme JS -->
    <script src="{{asset('js/theme.min.js') }}"></script>

    @yield('script')

</body>
</html>
