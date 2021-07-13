@extends('layout.inner')

@section('content')
<!-- breadcrumb-area -->
<div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{asset('images/img/5.png')}}" alt=""></span>
        <span class="b-shape-2"><img src="{{asset('images/img/6.png')}}" alt=""></span>
        <span class="b-shape-3"><img src="{{asset('images/img/7.png')}}" alt=""></span>
        <span class="b-shape-4"><img src="{{asset('images/img/9.png')}}" alt=""></span>
        <span class="b-shape-5"><img src="{{asset('images/shapes/18.png')}}" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{asset('images/img/7.png')}}" alt=""></span>
    </div>
    <div class="container padding-top-120">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">
                <h2 class="page-title">about us</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- food-items countdown -->

<!-- about us -->
<section class="about-area about-area2 padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12  wow fadeInLeft">
                <div class="about-left">
                    <div class="about-l-shapes">
                        <span class="als-1"><img src="{{asset('images/shapes/2.png')}}" alt=""></span>
                    </div>
                    <div class="row">


                        <div class="col-lg-12 d-flex align-items-stretch ">
                            <div class="about-gallery-5 text-center">
                                <img src="{{asset('images/gallery/4.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12  wow fadeInRight">
                <div class="about-right">
                    <div class="about-r-shapes">
                        <span class="as-1"><img src="{{asset('images/shapes/1.png')}}" alt=""></span>
                    </div>
                    <h2>The Story about
                        Foods Craft
                        <span>Food ka Funda</span>
                    </h2>

                    <div class="history-tab">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="history-tab" data-toggle="tab" href="#history" role="tab"
                                    aria-controls="history" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="journey-tab" data-toggle="tab" href="#journey" role="tab"
                                    aria-controls="journey" aria-selected="false">Our Journey</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab"
                                    aria-controls="experience" aria-selected="false">Mission & Vision</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="history" role="tabpanel"
                                aria-labelledby="history">
                                <div class="his-content">
                                    <p>FoodKhan is Bangladeshi’s own fast food restaurants chain offering Burgers,
                                        French fries, Milkshakes, Smoothies and so much more.
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="journey" role="tabpanel" aria-labelledby="journey">
                                <div class="his-content">
                                    <p>FoodKhan is Bangladeshi’s own fast food restaurants chain offering Burgers,
                                        French fries, Milkshakes, Smoothies and so much more. We are known for our
                                        delicious taste, superior quality
                                    </p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience">
                                <div class="his-content">
                                    <p>Food Khan is a restaurant, bar and coffee roasters located on a busy corner
                                        site in
                                        Farrington's Exmouth Market.

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- delicious food -->
<section class="delicious-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="deli-shapes">
            <span class="ds-1"><img src="{{asset('images/shapes/transparent1.png')}}" alt=""></span>
            <span class="ds-2 item-animateOne"><img src="{{asset('images/shapes/27.png')}}" alt=""></span>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6  wow fadeInLeft">
                <div class="delicious-left">
                    <h2>Fresh taste at a
                        great price, only for
                        <span>Delicious Food lover.</span>
                    </h2>

                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block  wow fadeInRight">
                <div class="delicious-right">
                    <img src="{{asset('images/gallery/1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--team area -->
<section class="team-area padding-bottom-110 padding-top-110 wow fadeInUp">
    <div class="team-area-shapes">
        <span class="ts-1"><img src="{{asset('images/shapes/pizza-s1.png')}}" alt=""></span>
        <span class="ts-2"><img src="{{asset('images/shapes/brr.png')}}" alt=""></span>
    </div>
    <div class="container">
        <div class="common-title-area text-center padding-bottom-50">
            <h3>team membar</h3>
            <h2>professional <span>chef</span></h2>
        </div>
        <div class="team-slider-active">
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{asset('images/team/t1.png')}}" alt="">
                </div>
                <div class="t-content">
                    <h5>Mathij Sen Deo</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{asset('images/team/t2.png')}}" alt="">
                </div>
                <div class="t-content">
                    <h5>Malina Weissa</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{asset('images/team/t3.png')}}" alt="">
                </div>
                <div class="t-content">
                    <h5>Tonmoy Khan</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{asset('images/team/t4.png')}}" alt="">
                </div>
                <div class="t-content">
                    <h5>Mathja Semo</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="single-team text-center">
                <div class="s-t-img">
                    <img src="{{asset('images/team/t1.png')}}" alt="">
                </div>
                <div class="t-content">
                    <h5>Mathij Sen Deo</h5>
                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                </div>
                <div class="t-social-b">
                    <span class="follow">follow :</span>
                    <span class="t-social"><a href="#"><i class="fab fa-facebook"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-twitter"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-instagram"></i></a></span>
                    <span class="t-social"><a href="#"><i class="fab fa-linkedin"></i></a></span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- testimonial -->
<section class="testimonial padding-bottom-120 padding-top-110 wow fadeInUp">
    <div class="container">
        <div class="testi-shapes">
            <span class="ts-1"><img src="{{asset('images/img/31.png')}}" alt=""></span>
            <span class="ts-2"><img src="{{asset('images/img/32.png')}}" alt=""></span>
            <span class="ts-3 item-animateTwo"><img src="{{asset('images/shapes/7.png')}}" alt=""></span>
        </div>
        <div class="common-title-area text-center padding-bottom-50">
            <h3>testimonial</h3>
            <h2>client <span>feedback</span></h2>
        </div>
        <div class="testimonial-active">
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>
                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-1.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-2.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-1.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-2.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-1.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-2.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-1.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
            <div class="single-testimonial">
                <div class="testi-top">
                    <div class="tin-shapes">
                        <span class="tsin-1"><img src="{{asset('images/shapes/33.png')}}" alt=""></span>

                    </div>
                    <div class="testi-img">
                        <img src="{{asset('images/testimonial/testi-2.png')}}" alt="">
                    </div>
                    <div class="testi-meta">
                        <h6>Christ Deo</h6>
                        <p>CEO A4Tech Ltd.</p>
                        <div class="testi-rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                    researching
                    the benefits of frequent testing and the feedback
                    leads to. He explains that in the history of the study.</p>
            </div>
        </div>

    </div>
</section>
@endsection
