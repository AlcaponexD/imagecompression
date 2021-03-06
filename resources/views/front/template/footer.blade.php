<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{env('APP_NAME')}}</h2>
                    <p>Simple and free image converter to use whenever you want.</p>
                    <ul class="ftco-footer-social list-unstyled mb-0">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Unseful Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="https://github.com/AlcaponexD" class="py-2 d-block">Github</a></li>
                        <li><a href="https://www.linkedin.com/in/jeison-pedroso" class="py-2 d-block">LinkedIN</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Navigational</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Home</a></li>
                        {{--<li><a href="#" class="py-2 d-block">Domain</a></li>--}}
                        {{--<li><a href="#" class="py-2 d-block">Hosting</a></li>--}}
                        {{--<li><a href="#" class="py-2 d-block">About</a></li>--}}
                        {{--<li><a href="#" class="py-2 d-block">Blog</a></li>--}}
                        {{--<li><a href="#" class="py-2 d-block">Contact</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Contact</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            {{--<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>--}}
                            {{--<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>--}}
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contact@imagecompression.tk</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="{{ mix('/js/vendor.js') }}"></script>
<script src="{{ mix('/js/main.js') }}"></script>
</body>
</html>