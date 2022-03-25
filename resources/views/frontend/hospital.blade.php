@extends('frontend.layouts.master')
@section('title','Hospital | MyBlood')
@section('body')
<section class="common-hero p-0">
    <div class="container-fluid p-0">
        <div class="hero-card">
            <figure class="hero-img"><img src="{{asset('frontend/images/hero-1.jpg')}}" alt=""></figure>
            <div class="container">
                <div class="hero-info">
                    <h1>All Hospitals Lists</h1>
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
                <div class="pricing-plan-area">

                    <div class="pricing-heading">
                        <div class="contact-heading contact-name-hdng">
                            <h4>Name</h4>
                        </div>
                        <div class="contact-heading contact-address-hdng">
                            <h4>Location</h4>
                        </div>
                        <div class="contact-heading contact-pin-hdng">
                            <h4>Pin</h4>
                        </div>
                        <div class="contact-heading contact-no-hdng">
                            <h4>Contact No</h4>
                        </div>
                        <div class="contact-heading contact-person-hdng">
                            <h4>Contact Person</h4>
                        </div>
                    </div>
                    @foreach($hospitals as $hospital)
                    <div class="pricing-card-row">

                        <div class="pricing-card">

                            <div class="pricing-card-item contact-name">
                                <a class="description-collapse-btn stretched-link" data-bs-toggle="collapse" href="#description1" aria-expanded="false"></a>
                                <h4>{{$hospital->name}}</h4>
                            </div>

                            <div class="pricing-card-item contact-address">
                                <p>{{$hospital->location}} </p>
                            </div>

                            <div class="pricing-card-item contact-pin">
                                <span>{{$hospital->pin}}</span>
                            </div>

                            <div class="pricing-card-item contact-no">
                                <span>{{$hospital->number}}</span>
                            </div>

                            <div class="pricing-card-item contact-person">
                                <span>{{$hospital->contact_person}}</span>
                            </div>
                        </div>

                        <div class="collapse" id="description1">
                            <div class="contact-address-mobile">
                                <div>
                                    <h4>Location</h4>
                                    <p>{{$hospital->location}}</p>
                                    <h4>Pin : <span>{{$hospital->pin}}</span></h4>
                                    <h4 class="contact-no-sm-device">Contact No : <span>{{$hospital->number}}</span></h4>
                                    <h4>Contact Person : <span>{{$hospital->contact_person}}</span></h4>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection