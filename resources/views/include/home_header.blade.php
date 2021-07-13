<header>
    <!-- header-bottom -->
    <div class="header-bottom home2-header-bottom margin-top-20">
        <div class="container position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 margin-bottom-20">
                    <div class="logo">
                        <a href="{{route('home')}}"> <img src="{{asset('images/logo/logo2.png')}}" alt=" logo"></a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <nav id="mobile-menu">
                        <ul class="main-menu main-menu2">
                            <li><a href="{{route('home')}}">Home</a> </li>
                            <li><a href="{{route('about')}}">about</a></li>

                            <li><a href="{{route('menu')}}">Menu <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">
                                    @foreach ($food_categories as $item)
                                    <li><a href="{{route('menu')}}">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-5 col-md-9 col-12">
                    <div class="customer-area2 d-flex align-items-center justify-content-between">

                        <span class="order-img d-none d-md-block"><img src="{{asset('images/icons/1.png')}}"
                                alt=""></span>
                        <div class=" order-content">
                            <span class="span-1">delivery order</span> <span class="span-2">123-59794069</span>
                        </div>
                        <a href="login.html" class="btn">Order Now</a>

                    </div>
                </div>
            </div>
            <!-- mobile-menu -->
            <div class="mobile-menu home2"></div>
        </div>
    </div>
</header>
