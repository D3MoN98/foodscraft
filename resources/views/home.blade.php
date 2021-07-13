@extends('layout.home')

@section('content')

<!-- burger-promo-area -->
<section class="delivery-area burger-promo-area padding-top-240 padding-bottom-135">
    <div class="del-shapes">

        <span class="ds-2"><img src="{{asset('images/shapes/41.png')}}" alt=""></span>
        <span class="ds-33"><img src="{{asset('images/shapes/5.png')}}" alt=""></span>
        <span class="ds-4"><img src="{{asset('images/shapes/2.png')}}" alt=""></span>
    </div>
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-lg-6 col-md-12 margin-bottom-20">
                <div class="delivery-left">
                    <div class="burger-shapes">
                        <span class="bs1"><img src="{{asset('images/shapes/capsicam.png')}}" alt=""></span>
                        <span class="bs2"><img src="{{asset('images/shapes/sauce.png')}}" alt=""></span>
                        <span class="bs3"><img src="{{asset('images/shapes/sale.png')}}" alt=""></span>
                        <span class="bs4"><img src="{{asset('images/shapes/redtpmatto.png')}}" alt=""></span>
                        <span class="bs5"><img src="{{asset('images/shapes/t-slice.png')}}" alt=""></span>
                        <span class="bs6"><img src="{{asset('images/shapes/113.png')}}" alt=""></span>
                    </div>
                    <img class="mp" src="{{asset('images/menu-item/burger-promo.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="delivery-right">
                    <div class="common-title-area padding-bottom-40">
                        <h3>best in town</h3>
                        <h1>enjoy our chicken<span>
                                burger
                            </span> fast food</h1>
                        <h5 class="margin-bottom-40 margin-top-40">bacon-potatos-bbq sauce</h5>
                        <div class="order-box d-flex align-items-center">
                            <a href="shopping-cart.html" class="btn">order now</a>
                            <h5>price : <span>$10.50</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- banner-gallery -->
<section class="banner-gallery banner-gallery2 padding-top-120 padding-bottom-60">
    <div class="container position-relative">
        <div class="del-shapes">
            <span class="ds-1 item-bounce"><img src="{{asset('images/shapes/26.png')}}" alt=""></span>
            <span class="ds-2 item-bounce"><img src="{{asset('images/shapes/28.png')}}" alt=""></span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="gallery-img-1">
                    <h3>Buzzed Burger</h3>
                    <p>Sale off 50% only this week</p>
                    <a href="shopping-cart.html" class="btn">order now</a>
                    <img class="pos1" src="{{asset('images/shapes/bbr.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="gallery-img-3">
                    <h5>Super<br>
                        Delicious<br>
                        Burger</h5>
                    <a href="shopping-cart.html">order now</a>
                    <img class="img-pos" src="{{asset('images/gallery/grid1.png')}}" alt="">
                    <img src="{{asset('images/shapes/41.png')}}" alt="" class="s1">
                    <span class="gprice-2">$15</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="gallery-img-2 d-flex justify-content-end">
                    <img class="img-pos1" src="{{asset('images/gallery/grid2.png')}}" alt="">
                    <span class="gprice-1">$15</span>
                    <div class="gimg-content">
                        <h5 class="margin-bottom-20">Delicious<br>
                            Burger</h5>
                        <a href="shopping-cart.html">order now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row margin-top-30">
            <div class="col-lg-3 col-md-6">
                <div class="gallery-img-3 gallery-img-33">
                    <h5>Super <br>Combo<br>
                        Burger</h5>
                    <a href="shopping-cart.html">order now</a>
                    <img src="{{asset('images/gallery/grid4.png')}}" alt="" class="img-pos">
                    <img src="{{asset('images/shapes/41.png')}}" alt="" class="s1">
                    <span class="gprice-2">$15</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="gallery-img-22 d-flex justify-content-end">
                    <img class="img-pos" src="{{asset('images/gallery/grid5.png')}}" alt="">
                    <span class="gprice-1">$15</span>
                    <div class="gimg-content">
                        <h5 class="margin-bottom-20">Super <br>Delicious<br>
                            burger</h5>
                        <img src="{{asset('images/shapes/42.png')}}" alt="" class="s1">
                        <a href="shopping-cart.html">order now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="gallery-img-1 gallery-img-11 gallery-img-01">
                    <h5 class="margin-bottom-10">Chicken <br>Combo<br>
                        Burger</h5>
                    <p>Sale off 50% only this week</p>
                    <a href="shopping-cart.html" class="btn">order now</a>
                    <img class="gs1" src="{{asset('images/shapes/bbs.png')}}" alt="">
                    <img class="pbadge" src="{{asset('images/icons/pbadge.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- menu-area -->
<section class="menu-area home2-menu-area padding-bottom-10">
    <div class="menu-shapes">
        <span class="ds-1"><img src="{{asset('images/shapes/34.png')}}" alt=""></span>
        <span class="ds-2 item-bounce"><img src="{{asset('images/shapes/sm-tomatto.png')}}" alt=""></span>
        <span class="ds-3"><img src="{{asset('images/shapes/donar.png')}}" alt=""></span>
        <span class="ds-4 item-bounce"><img src="{{asset('images/shapes/triple.png')}}" alt=""></span>
        <span class="ds-5"><img src="{{asset('images/shapes/scatter.png')}}" alt=""></span>
    </div>
    <div class="container">
        <div class="common-title-area padding-50 wow fadeInLeft">
            <h3>food items</h3>
            <h2>Popular <span>menu</span> </h2>
        </div>
        <!-- menu-nav-wrapper -->
        <div class="menu-nav-wrapper">
            <div class="container">
                <div class="row">
                    <nav>
                        <div class="nav" id="nav-tab" role="tablist">
                            @foreach ($popular_menu->food_sub_categories as $sub_cat)
                            <!-- menu-nav-1 -->
                            <a class="nav-item nav-link active" id="nav-pop_sub{{$sub_cat->id}}" data-toggle="tab"
                                href="#pop_sub{{$sub_cat->id}}" role="tab" aria-controls="pop_sub{{$sub_cat->id}}"
                                aria-selected="true">
                                <div class="single-menu-nav text-center">
                                    <div class="menu-img margin-bottom-10">
                                        <img src="{{asset('images/menu-item/pizza.png')}}" alt="">
                                    </div>
                                    <h6>{{$sub_cat->name}}</h6>
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
            @foreach ($popular_menu->food_sub_categories as $sub_cat)
            <!-- menu-items-1 -->
            <div class="tab-pane fade show active" id="pop_sub{{$sub_cat->id}}" role="tabpanel"
                aria-labelledby="pop_sub{{$sub_cat->id}}">
                <div class="menu-items-wrapper padding-50">
                    <div class="menu-i-shapes">
                        <span class="mis-3"><img src="{{asset('images/shapes/7.png')}}" alt=""></span>
                        <span class="ds-1"><img src="{{asset('images/shapes/40.png')}}" alt=""></span>
                    </div>
                    <!-- first-row -->
                    <div class="row">
                        @foreach ($sub_cat->food_items as $food_item)
                        <div class="col-lg-4 col-md-4">
                            <div class="single-menu-item d-flex justify-content-between">
                                <div class="menu-img">
                                    <img src="{{asset('images/menu-item/piz1.png')}}" alt="">
                                </div>
                                <div class="menu-content">
                                    <h5><a href="single-dish.html">{{$food_item->name}}</a></h5>
                                    <p>{{$food_item->description}}</p>
                                    <span>price: <i class="fas fa-rupee-sign"></i>{{$food_item->price}}</span>

                                    <button type="button" class="btn btn-secondary">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



<!-- delivery-area -->
<section class="delivery-area delivery-area2 padding-top-115 padding-bottom-100">

    <div class="container">

        <div class="row flex-row-reverse">
            <div class="col-lg-6 align-self-lg-center col-md-12 margin-bottom-20 wow fadeInLeft">
                <div class="delivery-left2">
                    <img src="{{asset('images/gallery/bike.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInRight">
                <div class="delivery-right">
                    <div class="common-title-area padding-bottom-40">
                        <h3>delivery</h3>
                        <h2 class="margin-bottom-30">A Moments of
                            Delivered <span>
                                On Right
                                Time & Place
                            </span> </h2>
                        <p>Food Khan is a restaurant, bar and coffee roastery located on a busy corner site in
                            Farringdon's Exmouth Market. With glazed frontage on two sides of the building,
                            overlooking
                            the market and a bustling London inteon.</p>
                        <div class="order-box d-flex align-items-end">
                            <span class="order-img"><img src="{{asset('images/icons/1.png')}}" alt=""></span>
                            <div class="order-content">
                                <p>delivery order num.</p> <span>123-59794069</span>
                            </div>
                            <a href="shopping-cart.html" class="btn">order now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- menu-area -->
<section class="menu-area home2-menu-area padding-bottom-10">
    <div class="menu-shapes">
        <span class="ds-1"><img src="{{asset('images/shapes/34.png')}}" alt=""></span>
        <span class="ds-2 item-bounce"><img src="{{asset('images/shapes/sm-tomatto.png')}}" alt=""></span>
        <span class="ds-3"><img src="{{asset('images/shapes/donar.png')}}" alt=""></span>
        <span class="ds-4 item-bounce"><img src="{{asset('images/shapes/triple.png')}}" alt=""></span>
        <span class="ds-5"><img src="{{asset('images/shapes/scatter.png')}}" alt=""></span>
    </div>
    <div class="container">
        <div class="common-title-area padding-50 wow fadeInLeft">
            <h3>food items</h3>
            <h2>Popular <span>menu</span> </h2>
        </div>
        <!-- menu-nav-wrapper -->
        <div class="menu-nav-wrapper">
            <div class="container">
                <div class="row">
                    <nav>
                        <div class="nav" id="nav-tab" role="tablist">
                            @foreach ($popular_menu->food_sub_categories as $sub_cat)
                            <!-- menu-nav-1 -->
                            <a class="nav-item nav-link active" id="nav-pop_sub{{$sub_cat->id}}" data-toggle="tab"
                                href="#pop_sub{{$sub_cat->id}}" role="tab" aria-controls="pop_sub{{$sub_cat->id}}"
                                aria-selected="true">
                                <div class="single-menu-nav text-center">
                                    <div class="menu-img margin-bottom-10">
                                        <img src="{{asset('images/menu-item/pizza.png')}}" alt="">
                                    </div>
                                    <h6>{{$sub_cat->name}}</h6>
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
            @foreach ($popular_menu->food_sub_categories as $sub_cat)
            <!-- menu-items-1 -->
            <div class="tab-pane fade show active" id="pop_sub{{$sub_cat->id}}" role="tabpanel"
                aria-labelledby="pop_sub{{$sub_cat->id}}">
                <div class="menu-items-wrapper padding-50">
                    <div class="menu-i-shapes">
                        <span class="mis-3"><img src="{{asset('images/shapes/7.png')}}" alt=""></span>
                        <span class="ds-1"><img src="{{asset('images/shapes/40.png')}}" alt=""></span>
                    </div>
                    <!-- first-row -->
                    <div class="row">
                        @foreach ($sub_cat->food_items as $food_item)
                        <div class="col-lg-4 col-md-4">
                            <div class="single-menu-item d-flex justify-content-between">
                                <div class="menu-img">
                                    <img src="{{asset('images/menu-item/piz1.png')}}" alt="">
                                </div>
                                <div class="menu-content">
                                    <h5><a href="single-dish.html">{{$food_item->name}}</a></h5>
                                    <p>{{$food_item->description}}</p>
                                    <span>price : Rs{{$food_item->price}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- serve passion -->
<div class="serve-passion padding-top-100 padding-bottom-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 margin-bottom-60 wow fadeInLeft">
                <div class="serve-left">
                    <div class="ss-shapes">
                        <span class="ss1 item-bounce"><img src="{{asset('images/shapes/14.png')}}" alt=""></span>
                        <span class="ss2 item-animateTwo"><img src="{{asset('images/shapes/6.png')}}" alt=""></span>
                        <span class="ss3"><img src="{{asset('images/shapes/34.png')}}" alt=""></span>
                    </div>
                    <img class="margin-bottom-20" src="{{asset('images/gallery/chef.jpg')}}" alt="">
                    <h5>Jane Mila Jon</h5>
                    <p>Chef Officer</p>
                    <div class="inner-counter">
                        <div class="about-gallery-4 text-center">
                            <img class="img" src="{{asset('images/icons/3.png')}}" alt="">
                            <div class="items counter">2000</div>
                            <p>food item</p>
                            <span class="g-s-4"><img src="{{asset('images/shapes/10.png')}}" alt=""></span>
                            <span class="g-s-5"><img src="{{asset('images/shapes/14.png')}}" alt=""></span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="serve-right">
                    <div class="common-title-area  padding-bottom-60">
                        <h3>our chef</h3>
                        <h2>we serve <span>passion</span> </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-dishes">
                                <div class="dish-img">
                                    <img src="{{asset('images/menu-item/pd1.png')}}" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h5><a href="single-dish.html">Burger Patties
                                        </a></h5>
                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge">hot</span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-dishes">
                                <div class="dish-img">
                                    <img src="{{asset('images/menu-item/pd2.png')}}" style="width: inherit;" alt="">
                                </div>
                                <div class="dish-content">
                                    <h5> <a href="single-dish.html">Vegetable Pizza
                                        </a></h5>
                                    <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                    <span class="price">price :$15.00</span>

                                </div>
                                <span class="badge"></span>
                                <div class="cart-opt">
                                    <span>
                                        <a href="#"><i class="fas fa-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="shopping-cart.html"><i class="fas fa-shopping-basket"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- testimonial -->
<section class="testimonial testimonial2 padding-bottom-100 padding-top-100">
    <div class="container">
        <div class="testi-shapes">
            <span class="ts-1"><img src="{{asset('images/shapes/triple.png')}}" alt=""></span>
            <span class="ts-2 item-bounce"><img src="{{asset('images/shapes/35.png')}}" alt=""></span>
            <span class="ts-3 item-animateTwo"><img src="{{asset('images/shapes/26.png')}}" alt=""></span>
        </div>
        <div class="common-title-area text-center padding-bottom-50 wow fadeInUp">
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
        </div>

    </div>
</section>

@endsection
