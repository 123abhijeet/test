@extends('frontend.layouts.master')
@section('title','Contact | MyBlood')
@section('body')
<section class="common-hero p-0">
    <div class="container-fluid p-0">
        <div class="hero-card">
            <figure class="hero-img"><img src="{{asset('frontend/images/hero-1.jpg')}}" alt=""></figure>
            <div class="container">
                <div class="hero-info">
                    <h1>Contact Us</h1>
                    <p>Augue fringilla aliquam arcu dui. Morbi nunc libero lectus scelerisque neque. Et diam massa sed arcu est risus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clearfix">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Lorem ipsum dolor sit amet cons</h2>
                    <p>Lorem ipsum dolor sit amet consLorem ipsumm ipsum dolor sit amet consLorem ipsum do do</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <img src="{{asset('frontend/images/location-dot-solid.svg')}}" alt="">
                    </div>
                    <h3>Office Address</h3>
                    <div class="contact-information">
                        <address>Lorem ipsum dolor sit amet consectetur dolor sit amet</address>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <img src="{{asset('frontend/images/mobile-screen-button-solid.svg')}}" alt="">
                    </div>
                    <h3>Phone Number</h3>
                    <div class="contact-information">
                        <a href="tel:+1234567890">+1234567890</a>
                        <a href="tel:+1234567890">+1234567890</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <img src="{{asset('frontend/images/envelope-solid.svg')}}" alt="">
                    </div>
                    <h3>Email Address</h3>
                    <div class="contact-information">
                        <a href="mailto:loremipsum@gmail.com">loremipsum@gmail.com</a>
                        <a href="mailto:loremipsum@yahoo.co.uk">loremipsum@yahoo.co.uk</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <img src="{{asset('frontend/images/circle-info-solid.svg')}}" alt="">
                    </div>
                    <h3>Legal information</h3>
                    <div class="contact-information">
                        <address>Lorem ipsum dolor sit amet consectetur dolor sit amet </address>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="clearfix pt-0">
    <div class="container">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.902656674765!2d88.28218711535116!3d22.768993531470446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f885a770d61b53%3A0xad2de721e42a8f0c!2sKamalapur%20Purbapara%20Primary%20School!5e0!3m2!1sen!2sin!4v1647237271848!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection