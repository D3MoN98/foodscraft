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
                <h2 class="page-title">Menu item</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">menu item</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- food-items countdown -->
<div class="foods-counter menus-area">
    <div class="container">
        <div class="row foods-wrapper menus-wrapper">
            <div class="col-lg-3 col-md-6">
                <div class="single-food single-menus">
                    <img src="{{asset('images/menu-item/menu2.png')}}" alt="">
                    <h6>Super Fast Delivery</h6>
                    <p>Free Delivery in you Location</p>
                    <a href="shopping-cart.html">Order Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-food single-menus">
                    <img src="{{asset('images/menu-item/menu1.png')}}" alt="">
                    <h6>100% Best Quality</h6>
                    <p>We Provide Best Quality Food</p>
                    <a href="shopping-cart.html">Order Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-food single-menus">
                    <img src="{{asset('images/menu-item/menu3.png')}}" alt="">
                    <h6>Money Back Guarantee</h6>
                    <p>100% Money Back Guarantee</p>
                    <a href="shopping-cart.html">Order Now</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-food single-menus">
                    <img src="{{asset('images/menu-item/menu4.png')}}" alt="">
                    <h6>Delicious Food Menu</h6>
                    <p>Food Khan Provide Best Food</p>
                    <a href="shopping-cart.html">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- chicken tab-area -->
@foreach ($food_categories as $food_category)
@if (count($food_category->food_sub_categories) > 0)
<section class="menu-area  pizza-area burger-area chicken-area padding-top-40">
    <div class="menu-i-shapes">
        <span class="bleft"><img src="{{asset('images/menu-item/bleft.png')}}" alt=""></span>
    </div>
    <div class="container">
        <div class="common-title-area text-center padding-40">
            <h3>food items</h3>
            <h2>{{$food_category->name}}</h2>
        </div>
        <!-- menu-nav-wrapper -->
        <div class="menu-nav-wrapper">
            <div class="container">
                <div class="row">
                    <nav>
                        <div class="nav" id="nav-tab" role="tablist">
                            @foreach ($food_category->food_sub_categories as $food_sub_category)
                            <!-- menu-nav-1 -->
                            <a class="nav-item nav-link active" id="nav-{food_sub_category{$food_sub_category->id}}"
                                data-toggle="tab" href="food_sub_category#{{$food_sub_category->id}}" role="tab"
                                aria-controls="food_sub_category{{$food_sub_category->id}}" aria-selected="true">
                                <div class="single-menu-nav text-center">
                                    <div class="menu-img margin-bottom-10">
                                        <img src="{{asset('images/menu-item/tc1.png')}}" alt="">
                                    </div>
                                    <h6>{{$food_sub_category->name}}</h6>
                                    <span class="g-s-4"><img src="{{asset('images/shapes/10.png')}}" alt=""></span>
                                    <span class="g-s-5"><img src="{{asset('images/shapes/14.png')}}" alt=""></span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- menu-items-wrapper -->
        <div class="tab-content" id="nav-tabContent">

            @foreach ($food_category->food_sub_categories as $food_sub_category)
            <!-- menu-items-1 -->

            <div class="tab-pane fade show active" id="food_sub_category{{$food_sub_category->id}}" role="tabpanel"
                aria-labelledby="food_sub_category{{$food_sub_category->id}}">
                <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                @foreach ($food_sub_category->food_items as $food_item)
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-menu-item d-flex justify-content-between">
                                        <div class="menu-img">
                                            @if ($food_item->image != null)
                                            <img src="{{url('storage/'.$food_item->image)}}" alt="">
                                            @else
                                            <img src="https://via.placeholder.com/150" alt="">
                                            @endif
                                        </div>
                                        <div class="menu-content">
                                            <h6><a href="single-dish.html">{{$food_item->name}}</a></h6>
                                            <p>{{$food_item->description}}</p>
                                            <span>price : Rs {{$food_item->price}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endif
@endforeach

<!-- pizza banner -->
{{-- <section class="banner-gallery pizza-banner padding-top-90 padding-bottom-30">
    <div class="pizza-shapes">
        <span class="ps1"><img src="{{asset('images/shapes/35.png')}}" alt=""></span>
<span class="ps2"><img src="{{asset('images/shapes/26.png')}}" alt=""></span>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-lg-6 col-md-12 margin-bottom-30 wow fadeInLeft">
                    <div class="gallery-img-1">
                        <h3 class="margin-bottom-10">Buzzed Burger</h3>
                        <p>Sale off 50% only this week</p>
                        <a href="shopping-cart.html" class="btn">order now</a>
                        <img src="{{asset('images/gallery/24.png')}}" alt="">
                        <span class="gs"><img src="{{asset('images/shapes/bbr.png')}}" alt=""></span>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInRight">
                    <div class="gallery-img-1 gallery-img-01">
                        <h5 class="margin-bottom-10">Chicken Combo<br>
                            Burger</h5>
                        <p>Sale off 50% only this week</p>
                        <a href="shopping-cart.html" class="btn">order now</a>
                        <img src="{{asset('images/menu-item/mg2.png')}}" alt="">
                        <span class="yellow"><img src="{{asset('images/shapes/37.png')}}" alt=""></span>
                        <span class="gs1"><img src="{{asset('images/shapes/bbs.png')}}" alt=""></span>
                        <span class="pbadge"><img src="{{asset('images/icons/pbadge.png')}}" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}

<!-- testimonial -->
<section class="testimonial padding-bottom-120 padding-top-80">
    <div class="container">
        <div class="testi-shapes">
            <span class="ts-1"><img src="{{asset('images/img/31.png')}}" alt=""></span>
            <span class="ts-2"><img src="{{asset('images/img/32.png')}}" alt=""></span>
            <span class="ts-3"><img src="{{asset('images/shapes/7.png')}}" alt=""></span>
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
