@extends('frontend.layouts.master')
@section('title','About Us | MyBlood')
@section('body')
<section class="common-hero p-0">
    <div class="container-fluid p-0">
        <div class="hero-card">
            <figure class="hero-img"><img src="{{asset('frontend/images/hero-1.jpg')}}" alt=""></figure>
            <div class="container">
                <div class="hero-info">
                    <h1>About Us</h1>
                    <p>Augue fringilla aliquam arcu dui. Morbi nunc libero lectus scelerisque neque. Et diam massa sed arcu est risus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clearfix">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="about-heading">
                    <h2>Vulputate lectus tincidunt suspendisse lorem aliquam risus ac. Vulputate quis diam eros lobortis arcu vel.</h2>
                    <p>Vulputate lectus tincidunt suspendisse lorem aliquam risus ac. Vulputate quis diam eros lobortis arcu vel. In orci risus dolor faucibus pellentesque ac tortor maecenas feugiat. Aenean lacus dictum sed donec venenatis, egestas semper ultrices sagittis. Nisl pellentesque orci, interdum donec viverra. Diam imperdiet iaculis dignissim nulla. Dolor, ultrices vel orci ultrices turpis.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-para">
                    <p>Vulputate lectus tincidunt suspendisse lorem aliquam risus ac. Vulputate quis diam eros lobortis arcu vel. In orci risus dolor faucibus pellentesque ac tortor maecenas feugiat. Aenean lacus dictum sed donec venenatis, egestas semper ultrices sagittis. Nisl pellentesque orci, interdum donec viverra. Diam imperdiet iaculis dignissim nulla. Dolor, ultrices vel orci ultrices turpis.</p>
                    <p>Vulputate lectus tincidunt suspendisse lorem aliquam risus ac. Vulputate quis diam eros lobortis arcu vel. In orci risus dolor faucibus pellentesque ac tortor maecenas feugiat. Aenean lacus dictum sed donec venenatis, egestas semper ultrices sagittis. Nisl pellentesque orci, interdum donec viverra. Diam imperdiet iaculis dignissim nulla. Dolor, ultrices vel orci ultrices turpis.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ratio ratio-21x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative p-0">
    <figure class="count-img">
        <img src="{{asset('frontend/images/hero-1.jpg')}}" alt="" />
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-count">
                    <ul>
                        <li>
                            <div class="count-block">
                                <h2 class="counter-div">
                                <span class="counter-value" data-count="215">1</span> +
                                </h2>
                                <p>Lorem ipsum is simply </p>
                            </div>
                        </li>
                        <li>
                            <div class="count-block">
                                <h2 class="counter-div">
                                <span class="counter-value" data-count="520">1</span> +
                                </h2>
                                <p>Lorem ipsum is simply </p>
                            </div>
                        </li>
                        <li>
                            <div class="count-block">
                                <h2 class="counter-div">
                                <span class="counter-value" data-count="8000">1,000</span>
                                </h2>
                                <p>Lorem ipsum is simply </p>
                            </div>
                        </li>
                        <li>
                            <div class="count-block">
                                <h2 class="counter-div">
                                <span class="counter-value" data-count="70">1</span> +
                                </h2>
                                <p>Lorem ipsum is simply </p>
                            </div>
                        </li>
                    </ul>
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
                    <h2>Meet Our Team</h2>
                    <p>Nothing makes us happier than hearing how happy we make you!</p>
                </div>
            </div>
        </div>

        <div class="row team-card-row">
            <div class="col-lg-6">
                <div class="team-card">
                    <figure class="team-member-img"><img src="https://via.placeholder.com/160x160/e4dad9/922b1f?text=160x160" alt=""></figure>
                    <div class="team-member-info">
                        <h3>Bhaskar Das</h3>
                        <h5>Html Developer at Linkedin</h5>
                        <p>Amet nunc in imperdiet purus odio arcu. Velit in sit consectetur libero lectus at. Lacinia metus enim a vestibulum sed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-card">
                    <figure class="team-member-img"><img src="https://via.placeholder.com/160x160/e4dad9/922b1f?text=160x160" alt=""></figure>
                    <div class="team-member-info">
                        <h3>Bhaskar Das</h3>
                        <h5>Html Developer at Linkedin</h5>
                        <p>Amet nunc in imperdiet purus odio arcu. Velit in sit consectetur libero lectus at. Lacinia metus enim a vestibulum sed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-card">
                    <figure class="team-member-img"><img src="https://via.placeholder.com/160x160/e4dad9/922b1f?text=160x160" alt=""></figure>
                    <div class="team-member-info">
                        <h3>Bhaskar Das</h3>
                        <h5>Html Developer at Linkedin</h5>
                        <p>Amet nunc in imperdiet purus odio arcu. Velit in sit consectetur libero lectus at. Lacinia metus enim a vestibulum sed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-card">
                    <figure class="team-member-img"><img src="https://via.placeholder.com/160x160/e4dad9/922b1f?text=160x160" alt=""></figure>
                    <div class="team-member-info">
                        <h3>Bhaskar Das</h3>
                        <h5>Html Developer at Linkedin</h5>
                        <p>Amet nunc in imperdiet purus odio arcu. Velit in sit consectetur libero lectus at. Lacinia metus enim a vestibulum sed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-card">
                    <figure class="team-member-img"><img src="https://via.placeholder.com/160x160/e4dad9/922b1f?text=160x160" alt=""></figure>
                    <div class="team-member-info">
                        <h3>Bhaskar Das</h3>
                        <h5>Html Developer at Linkedin</h5>
                        <p>Amet nunc in imperdiet purus odio arcu. Velit in sit consectetur libero lectus at. Lacinia metus enim a vestibulum sed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-card">
                    <figure class="team-member-img"><img src="https://via.placeholder.com/160x160/e4dad9/922b1f?text=160x160" alt=""></figure>
                    <div class="team-member-info">
                        <h3>Bhaskar Das</h3>
                        <h5>Html Developer at Linkedin</h5>
                        <p>Amet nunc in imperdiet purus odio arcu. Velit in sit consectetur libero lectus at. Lacinia metus enim a vestibulum sed.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Our Doner List</h2>
                    <p>Nothing makes us happier than hearing how happy we make you!</p>
                </div>
            </div>
        </div>

        <!-- =======Swiper Pagination Start====== -->

        <div class="swiper swiper-container testimonial-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                            <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user1.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Saivenkatesh Ashokkumar</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                            <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user2.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Sachin Grover</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                        <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user3.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Lalit Mathur</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                        <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user1.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Saivenkatesh Ashokkumar</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                        <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user2.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Sachin Grover</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                        <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user3.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Lalit Mathur</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                        <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user1.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Saivenkatesh Ashokkumar</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                        <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user2.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Sachin Grover</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card-body">
                        <p>Id vitae enim cursus orci nunc volutpat, fusce. Eros dictum integer vitae in dapibus mus quam. Enim scelerisque a, tincidunt quis. A sit sit suspendisse nisl. At tincidunt semper lectus quisque semper. Lorem tempus, eget proin pulvinar tristique amet condimentum quis vitae.</p>
                        </div>
                        <div class="testimonial-card-footer">
                            <figure>
                                <img src="{{asset('frontend/images/testimonial-user3.png')}}" alt="" />
                            </figure>
                            <div class="user-name">
                                <h4>Lalit Mathur</h4>
                                <p>enim cursus orci nunc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination testimonial-pagination"></div>
        </div>

        <!-- =======Swiper Pagination End====== -->
    </div>
</section>

<section class="clearfix">
    <div class="container">
        <div class="cta-center-content">
            <figure class="cta-center-bg"><img src="{{asset('frontend/images/cta-center-img-full.png')}}" alt=""></figure>
            <div class="cta-center-info">
                <h2>Download Our Mobile App</h2>
                <p>Amet nunc in imperdiet purus odio arcu. Velit in sit consectetur libero lectus at. Lacinia metus enim a vestibulum sed.</p>
                <div class="cta-center-btns">
                    <a href="#" class="app-store-btn"><img src="{{asset('frontend/images/app-store-1.svg')}}" alt=""></a>
                    <a href="#" class="app-store-btn"><img src="{{asset('frontend/images/app-store-2.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection