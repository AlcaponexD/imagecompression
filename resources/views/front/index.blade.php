@include('front.template.header')
<section class="ftco-domain">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-10 p-5 ftco-wrap ftco-animate">
                <div class="row d-flex justify-content-center mt-100">
                    <div class="col-md-12">
                        <div class="card">
                            <form method="post" action="" id="form_upload" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group files color">
                                    <label>Upload Your File </label>
                                    <input type="file" class="form-control" multiple="" name="images[]" id="upload_img">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <p class="domain-price mt-2 text-center">
                    <span>JPEG</span>
                    <span>PNG</span>
                    <span>GIF</span>
                    <span>JPG</span>
                    <span>BMP</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section services-section bg-light ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Why You Should Choose Us</h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-start">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-cloud"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Super Fast Server</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-start">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-server"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Daily Backups</h3>
                        <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex align-items-start">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Technical Services</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter bg-light img" id="section-counter">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <h2 class="mb-4">More than 12,000 websites trusted hosted</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="12000">0</strong>
                        <span>CMS Installation</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="100">0</strong>
                        <span>Awards Won</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="10000">0</strong>
                        <span>Registered Domains</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                    <div class="text">
                        <strong class="number" data-number="9000">0</strong>
                        <span>Satisfied Customers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6 order-lg-last d-flex">
                <div class="bg-primary py-md-5 d-flex align-self-stretch">
                    <div class="main">
                        <img src="images/undraw_data_report_bi6l.svg" class="img-fluid svg" alt="">
                        <div class="heading-section heading-section-white ftco-animate mt-5 px-3 px-md-5">
                            <h2 class="mb-4">Our Main Services</h2>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <div class="row pt-md-5">
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-cloud-computing"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Cloud VPS</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-cloud"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Share</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-server"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">VPS</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="media block-6 services text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-database"></span>
                            </div>
                            <div class="mt-3 media-body media-body-2">
                                <h3 class="heading">Dedicated</h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-primary">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Our Best Pricing</h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
        </div>
        <div class="row no-gutters d-flex">
            <div class="col-lg-3 col-md-6 ftco-animate d-flex">
                <div class="block-7 bg-light d-flex align-self-stretch">
                    <div class="text-center">
                        <h2 class="heading">Free</h2>
                        <span class="price"><sup>$</sup> <span class="number">0<small class="per">/mo</small></span>
		            <span class="excerpt d-block">100% free. Forever</span>
		            <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

		            <ul class="pricing-text mb-4">
		              <li><strong>150 GB</strong> Bandwidth</li>
		              <li><strong>100 GB</strong> Storage</li>
		              <li><strong>$1.00 / GB</strong> Overages</li>
		              <li>All features</li>
		            </ul>
		            <a href="#" class="btn btn-secondary d-block px-3 py-3 mb-4">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ftco-animate d-flex">
                <div class="block-7 d-flex align-self-stretch">
                    <div class="text-center">
                        <h2 class="heading">Startup</h2>
                        <span class="price"><sup>$</sup> <span class="number">19<small class="per">/mo</small></span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-4">
                            <li><strong>450 GB</strong> Bandwidth</li>
                            <li><strong>400 GB</strong> Storage</li>
                            <li><strong>$2.00 / GB</strong> Overages</li>
                            <li>All features</li>
                        </ul>
                        <a href="#" class="btn btn-secondary d-block px-3 py-3 mb-4">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ftco-animate d-flex">
                <div class="block-7 active d-flex align-self-stretch">
                    <div class="text-center">
                        <h2 class="heading">Premium</h2>
                        <span class="price"><sup>$</sup> <span class="number">49<small class="per">/mo</small></span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-4">
                            <li><strong>250 GB</strong> Bandwidth</li>
                            <li><strong>200 GB</strong> Storage</li>
                            <li><strong>$5.00 / GB</strong> Overages</li>
                            <li>All features</li>
                        </ul>
                        <a href="#" class="btn btn-primary d-block px-3 py-3 mb-4">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ftco-animate d-flex">
                <div class="block-7 d-flex align-self-stretch">
                    <div class="text-center">
                        <h2 class="heading">Pro</h2>
                        <span class="price"><sup>$</sup> <span class="number">99<small class="per">/mo</small></span></span>
                        <span class="excerpt d-block">All features are included</span>
                        <h3 class="heading-2 mb-3">Enjoy All The Features</h3>

                        <ul class="pricing-text mb-4">
                            <li><strong>450 GB</strong> Bandwidth</li>
                            <li><strong>400 GB</strong> Storage</li>
                            <li><strong>$20.00 / GB</strong> Overages</li>
                            <li>All features</li>
                        </ul>
                        <a href="#" class="btn btn-secondary d-block px-3 py-3 mb-4">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4">Our satisfied customer says</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 text-center">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Web</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2>Recent Blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text text-center py-3">
                        <div class="meta mb-2">
                            <div><a href="#">Aug 5, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry" data-aos-delay="100">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text text-center py-3">
                        <div class="meta mb-2">
                            <div><a href="#">Aug 5, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry" data-aos-delay="200">
                    <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text text-center py-3">
                        <div class="meta mb-2">
                            <div><a href="#">Aug 5, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <div class="desc">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.template.footer')