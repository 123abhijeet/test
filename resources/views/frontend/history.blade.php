@extends('frontend.layouts.master')
@section('title','History | MyBlood')
@section('body')
<section class="common-hero p-0">
    <div class="container-fluid p-0">
        <div class="hero-card">
            <figure class="hero-img"><img src="{{asset('frontend/images/hero-1.jpg')}}" alt=""></figure>
            <div class="container">
                <div class="hero-info">
                    <h1>History</h1>
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
                            <h4>Blood Group</h4>
                        </div>
                        <div class="contact-heading contact-address-hdng">
                            <h4>Date</h4>
                        </div>
                        <div class="contact-heading contact-pin-hdng">
                            <h4>Place</h4>
                        </div>
                        <div class="contact-heading contact-no-hdng">
                            <h4>Picture</h4>
                        </div>
                    </div>
                    @foreach($histories as $history)
                    <div class="pricing-card-row">

                        <div class="pricing-card">

                            <div class="pricing-card-item contact-name">
                                <a class="description-collapse-btn stretched-link" data-bs-toggle="collapse" href="#description1" aria-expanded="false"></a>
                                <h4>{{$history->blood_group}}</h4>
                            </div>

                            <div class="pricing-card-item contact-address">
                                <p>{{$history->date}}</p>
                            </div>

                            <div class="pricing-card-item contact-pin">
                                <span>{{$history->place}}</span>
                            </div>

                            <div class="pricing-card-item contact-no">
                                <span>{{$history->image}}</span>
                            </div>
                        </div>

                        <div class="collapse" id="description1">
                            <div class="contact-address-mobile">
                                <div>
                                    <h4>Blood Group</h4>
                                    <p>{{$history->blood_group}}</p>
                                    <h4>Date : <span>{{$history->date}}</span></h4>
                                    <h4 class="contact-no-sm-device">Place : <span>{{$history->place}}</span></h4>
                                    <h4>Picture : <span>{{$history->image}}</span></h4>
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