@extends('layouts.app')

@section('title', 'About')

@section('content')
     
     <!--Page Header Start -->
     <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-1"
                style="background-image: url(assets/images/shapes/page-header-shape-1.png);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h3>About Us</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span class="icon-arrow-left"></span></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End -->

        <!-- About One Start -->
        <section class="about-one about-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__shape-2 float-bob-y">
                                    <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                                </div>
                                <div class="about-one__shape-1">
                                    <img src="assets/images/shapes/about-one-shape-1.png" alt="">
                                </div>
                                <div class="about-one__shape-4 float-bob-x">
                                    <img src="assets/images/shapes/about-one-shape-4.png" alt="">
                                </div>
                                <div class="about-one__shape-3 float-bob-x">
                                    <img src="assets/images/shapes/about-one-shape-3.png" alt="">
                                </div>
                                <div class="about-one__img-2">
                                    <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <div class="about-one__experience-count">
                                        <h3 class="odometer" data-count="50">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p class="about-one__experience-text">Years of <br>Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left sec-title-animation animation-style1">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape">
                                        <img src="assets/images/shapes/section-title-tagline-shape-1.png" alt="">
                                    </div>
                                    <span class="section-title__tagline">About Gorent</span>
                                </div>
                                <h2 class="section-title__title title-animation">Welcome to Gorent
                                    car booking company</h2>
                            </div>
                            <p class="about-one__text-1">Committed to providing our customers with<br> ultimate service.
                            </p>
                            <p class="about-one__text-2">Lorem ipsum is simply ipun txns mane so dummy text of free
                                available in market the printing and typesetting industry has been the industry's
                                standard dummy text ever.</p>
                            <ul class="about-one__progress-box list-unstyled">
                                <li>
                                    <div class="about-one__progress">
                                        <h4 class="about-one__progress-title">Time Awareness</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%">
                                                <div class="count-text">90%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-one__progress">
                                        <h4 class="about-one__progress-title">Driver Experience</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="70%">
                                                <div class="count-text">70%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-one__btn-box-and-call-box">
                                <div class="about-one__btn-box">
                                    <a href="about.html" class="about-one__btn thm-btn">Read More<span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                                <div class="about-one__call-box">
                                    <div class="about-one__call-box-icon">
                                        <span class="icon-call-2"></span>
                                    </div>
                                    <div class="about-one__call-box-content">
                                        <p>Call to Anytime</p>
                                        <h4><a href="tel:15502505260">+1 (550) 250 5260</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About One End -->

        @endsection