<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>e-Procurement PT. PAL Indonesia Persero</title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- Core Stylesheet -->
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('assets/css/responsive/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- Search Form Area -->
    <div class="fancy-search-form d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Close Btn -->
                    <div class="search-close-btn" id="closeBtn">
                        <i class="ti-close" aria-hidden="true"></i>
                    </div>
                    <!-- Form -->
                    <form action="#" method="get">
                        <input type="search" name="fancySearch" id="search" placeholder="| Enter Your Search...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <img src="{{('assets/img/logo.png')}}" style="height: 30px;" alt="">
                        <a class="navbar-brand" href="index.html">e-Procurement</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                            </ul>
                            <!-- Search & Shop Btn Area -->
                            <div class="fancy-search-and-shop-area">
                                <a id="nav-link" href="{{ route('login') }}">Login</a>
                                <a id="nav-link" href="{{ route('register') }}">Register</a>
                                <!-- @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <a href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a href="{{ route('login') }}">Login</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url({{asset('assets/img/bg-img/about-1.jpg')}})">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <!-- Video Overview -->
                        <div class="video-overview">
                        </div>
                        <h2>e-Procurement</h2>
                        <h3 class="text-white">Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</h3><br/>
                        <a href="#" class="btn fancy-btn fancy-active">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h5>
                                    <p>Dikembangkan dengan teknologi web terbaru yang reliable dan mudah diintegrasikan</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h5>
                                    <p>Dukungan Pelanggan yang siap memberikan solusi tentang masalah procurement perusahaan</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h5>
                                    <p>Mengutamakan kualitas produk dan jasa perusahaan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-us-text">
                        <h2>Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</h2>
                        <p>e-Procurement PT. PAL Indonesia Persero adalah gerbang untuk masuk ke aplikasi e-Procurement dan di dalamnya terdapat informasi mengenai pengadaan jasa, update pengadaan, hasil pengadaan dan Daftar Penyedia (vendor), serta media komunikasi antar Pengguna website e-Procurement PT. PAL Indonesia Persero</p>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('assets/img/bg-img/hero-3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Skills Area Start ***** -->
    <!-- ***** Skills Area End ***** -->

    <!-- ***** Service Area Start ***** -->
    <section class="fancy-services-area bg-img bg-overlay section-padding-100-70" style="background-image: url({{asset('assets/img/bg-img/hero-2.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-white text-center">
                        <h2>Our Services</h2>
                        <p>Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                        <i class="ti-ruler-pencil"></i>
                        <h5>Fitur 1</h5>
                        <p>Deskripsi</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1s">
                        <i class="ti-desktop"></i>
                        <h5>Fitur 2</h5>
                        <p>Deskripsi</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <i class="ti-announcement"></i>
                        <h5>Fitur 3</h5>
                        <p>Deskripsi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="fancy-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="{{asset('assets/img/clients-img/1.jpg')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="{{asset('assets/img/clients-img/1.jpg')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="{{asset('assets/img/clients-img/1.jpg')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url({{asset('assets/img/bg-img/hero-3.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2>Ready To Start Your Procurement?</h2>
                        <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                        <a href="#" class="btn fancy-btn">Join us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="fancy-blog-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Latest News</h2>
                        <p>Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('assets/img/blog-img/blog-1.jpg')}}" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">We Create Experiences</a></h5>
                            <p>e-Procurement meningkatkan efektifitas dan efisiensi kerja</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img src="{{asset('assets/img/blog-img/blog-2.jpg')}}" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">Simple, Fast And Fun</a></h5>
                            <p>Mudah diakses baik melalui PC maupun ponsel, kapan saja dimana saja</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <img src="{{asset('assets/img/blog-img/blog-3.jpg')}}" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">Device Friendly</a></h5>
                            <p>Mudah digunakan dan mempercepat proses pengadaan jasa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <img src="{{asset('assets/img/logo.png')}}" style="height: 50px;" alt="">
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Website Perusahaan</h6>
                            <div class="single-tweet">
                                <a href="wwww.pal.co.id" style="color: white;">www.pal.co.id</a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Kontak Kami</h6>
                            <p>031 3292275 <br>headoffice@pal.co.id
                            </p>
                            <p>Ujung Surabaya <br>Surabaya, East Java 60155</p>
                            <p>Jam Kerja: 07.30 - 16.30 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made for <i class="fa fa-heart-o" aria-hidden="true"></i> Sheilla Isnaini
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <!-- Footer Nav -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('assets/js/others/plugins.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('assets/js/active.js')}}"></script>
</body>
</html>
