<!-- Header Start -->
<header class="fixed">
    <!-- container start -->
    <div class="container-fluid">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('images/bhavan/India-logo.png')}}" alt="image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="toggle-wrap">
                        <span class="toggle-bar"></span>
                    </span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>

                    <li class="nav-item has_dropdown display">
                        <a class="nav-link" href="#">MENU </a>
                        <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="{{route('menu')}}">Indian Dine In Menu</a></li>
                                <li><a href="{{route('itake')}}">Indian Take away Menu</a></li>
                                <li><a href="{{route('lunch')}}">Indian Lunch Menu</a></li>
                                <!--<li><a href="{{route('mmenu')}}">Mediterranean Dine In Menu</a></li>-->
                                <!--<li><a href="{{route('take')}}">Mediterranean Take Away Menu</a></li>-->
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item has_dropdown">
                        <a class="nav-link" href="{{route('about')}}">ABOUT US</a>
                        <span class="drp_btn"><i class="icofont-rounded-down"></i></span>
                        <div class="sub_menu">
                          <ul>
                            <li><a href="https://kingofspice.ie/" target="_blank">Our Branch</a></li>
                          </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="d-lg-none">
                        <a href="{{route('reservation')}}" class="btn btn_primary">FIND A TABLE</a>
                    </li>
                    <li class="d-lg-none">
                        <a href="https://order.toasttab.com/online/india-bhavan-belgard-square-west" target="_blank" class="btn btn_primary">Place Order</a>
                    </li>
                </ul>
            </div>

            <div class="action_bar">
                <a href="{{route('reservation')}}" class="btn btn_primary">FIND A TABLE</a>
                <div class="menu">
                    <p class="bar">Menu</p>
                    <div class="bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navigation end -->
    </div>
    <!-- container end -->
</header>
<!-- Header End -->


<!-- Right Side Fix Menu Start-->
<div class="right_sidemenu">
    <span class="close_rightmenu"><i class="icofont-close-circled"></i></span>
    <div class="menu_inner_content">
        <a href="#" class="side_logo">
            <img src="{{asset('images/bhavan/India-logo.png')}}" alt="image" class="side-logo">
        </a>
        <ul class="contact_listing">
            <li>
                <p class="sub_title">Indian Menu</p>
                <div class="cnt_block">
                    <a class="a-tag btn-11" href="{{route('menu')}}">Dine In</a>
                    <a class="a-tag btn-11" href="{{route('itake')}}">Take away</a>
                </div>
                <div class="cnt_block">
                    <a class="a-tag btn-11" href="{{route('lunch')}}">Lunch Menu</a>
                </div>
            </li>
            <!--<li>-->
            <!--    <p class="sub_title">Mediterranean Menu</p>-->
            <!--    <div class="cnt_block">-->
            <!--        <a class="a-tag btn-11" href="{{route('mmenu')}}">Dine In</a>-->
            <!--        <a class="a-tag btn-11" href="{{route('take')}}">Take Away</a>-->
            <!--    </div>-->
            <!--    <P class="text-med">Mediterranean Menu Served All Day</P>-->
            <!--    <div class="cnt_block">-->

            <!--    </div>-->
            <!--</li>-->
        </ul>
        <a href="https://order.toasttab.com/online/india-bhavan-belgard-square-west" target="_blank" class="btn btn_primary" style="display: flex;justify-content: center;border-radius: 0px;">Place Order</a>

        <figure class="tab_img">
            <img src="{{asset('images/bhavan/hotel.jpg')}}" alt="img">
        </figure>
        <a href="{{route('reservation')}}" class="btn btn_primary" style="display: flex;justify-content: center;border-radius: 0px;">book a table</a>
    </div>
</div>
<!-- Right Side Fix Menu End-->
