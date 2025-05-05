@extends('layouts.layout')
@section('content')

 <!-- Bread Crumb Start -->
 <section class="bredcrumb_section gallery_banner">
    <div class="container">
      <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
        <!-- <span class="sub_text">Our glimpsis</span> -->
        <span class="icon" data-aos="fade-down" data-aos-duration="1500"><img src="{{asset('images/bhavan/title-shape.png')}}"
            alt="img"></span>
        <h2>About India Bhavan</h2>
      </div>
    </div>
</section>
<!-- Bread Crumb End -->

<!-- About Banner Start -->
<section class="abt_banner">
    <!-- Side Shape -->
    <div class="right_shape position-absolute">
        <img src="{{asset('images/abtbanshape.png')}}" alt="img">
    </div>
    <!-- Side Shape -->
    <!-- Section Title Start -->
    <div class="section_title text-center">

        <!-- <span class="sub_text mb-1" data-aos="fade-down" data-aos-duration="1500">About India Bhavan </span> -->
        <h2 data-aos="zoom-in" data-aos-duration="1500" style="color: #ffe6ce;">Welcome to our Indian cuisine restaurant!</h2>
        <p class="lead" data-aos="fade-up" data-aos-duration="1500">At our restaurant, we aim to create a unique dining experience that blends the flavours and traditions of both Indian cuisines.</p>
        <p class="lead" data-aos="fade-up" data-aos-duration="1500">Our menu is carefully curated to showcase the best of both worlds, offering a wide variety of dishes that will delight your taste buds and transport you to a culinary journey filled with exotic spices and vibrant flavours.</p>
        
    </div>
    <!-- Section Title End -->
    <!-- About Banner images Start -->
    <div class="abt_img">
        <div class="img" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">
            <img src="{{asset('images/bhavan/hotel.jpg')}}" alt="img">
        </div>
        <div class="img" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
            <img src="{{asset('images/bhavan/new2.jpg')}}" alt="img">
        </div>
        <div class="img" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{asset('images/bhavan/dark.png')}}" alt="img">
        </div>
        <div class="img" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">
            <img src="{{asset('images/bhavan/view-two.jpg')}}" alt="img">
        </div>
        <div class="img" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">
            <img src="{{asset('images/bhavan/decore.jpg')}}" alt="img">
        </div>
    </div>
    <!-- About Banner images End -->
</section>
<!-- About Banner End -->


<div class="menu_list_section rotet_down">
    <div class="owl-carousel owl-theme" id="menu_list_flow">
        <div class="item">
            <div class="text_block">
                <span>Dine In</span>
                <span class="mark_star">*</span>
            </div>
        </div>
        <div class="item">
            <div class="text_block">
                <span>Take Away</span>
                <span class="mark_star">*</span>
            </div>
        </div>
        <div class="item">
            <div class="text_block">
                <span>Event</span>
                <span class="mark_star">*</span>
            </div>
        </div>
        <div class="item">
            <div class="text_block">
                <span>Party</span>
                <span class="mark_star">*</span>
            </div>
        </div>
    </div>
</div>
<!-- Text Flow Section End -->


<!-- Our Chef Section Start -->
<div class="home_video_section row_inner_am pb-12">
    <!-- Side Shape -->
    <div class="side_shape">
        <img class="right_shape" src="{{asset('images/banner_undershape.png')}}" alt="img">
        <img class="left_shape" src="{{asset('images/chiken_icon.png')}}" alt="img">
    </div>
    <!-- Counter Slider -->
    <section class="chef_section chef_page row_am">
        <div class="container c-1450">
          <div class="row my-2 my-sm-4 align-items-center">
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
              <div class="chef_img">
               <img class="img-fluid" src="{{asset('images/bhavan/Copy1.jpg')}}" alt="img">
              </div>
            </div>
            <div class="col-md-6">
              <div class="new-p abt_chef aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                <div class="banner_badge">
                  <img class="img-fluid blossom" src="{{asset('images/bhavan/blossom.svg')}}" alt="img">
                </div>
                <div class="section_title">
                    <!-- <h1 class="sub_text">Our chef</h1> -->
                    <p class="p-size">From fragrant biryanis and tandoori dishes to tasty Butter chicken, tangy chutneys, tender kebabs, grilled shishas and fresh salad. We source our ingredients locally whenever possible to highest quality and authenticity in every dish we serve and you will find an array of dishes that cater to every palate. Our chefs are highly skilled in the art of Indian cooking, using only the freshest ingredients and authentic spices to create dishes that are both delicious and nutritious.</p>
                    <p class="p-size">Whether you are looking for a quick lunch, a romantic dinner, or a special celebration, our restaurant is the perfect destination for any occasion. We invite you to come and experience the rich tapestry of flavours that our Indian cuisine has to offer.</p>
                    <p class="p-size">Come join us and indulge in a culinary feast that will leave you craving for more.</p>
                    <p class="p-size pt-20" ><a href="https://kingofspice.ie/" target="_blank" style="color: #fff">We are glad to open our new restaurant in Dublin along with King of Spice in Dunshaughlin, County Meath.</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
<!-- Our Chef Section End -->


<!-- Video Section Start -->
<div class="video_section">
    <div class="chef_img">
        <img src="{{asset('images/bhavan/dark.png')}}" id="chef_img_id" alt="img">
    </div>
    <video id="videoBlock" class="img-fluid videob" src="{{asset('images/bhavan/vid.mp4')}}" autoplay muted loop></video>
</div>
<!-- Video Section End -->

<!-- Our Journey Section Start -->
<section class="row_am our_journey bg_white_textcher">
    <div class="side_shape position-absolute" data-aos="fade-in" data-aos-duration="1500">
        <img src="{{asset('images/bhavan/dish.png')}}" alt="img">
    </div>
    <div class="container">
        <div class="row_am">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
                <h2 style="text-shadow: 11px 10px 10px #56391f5e;">Dinner, Event or Party?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="joueney_box" data-aos="fade-up" data-aos-duration="1500">
                        <p>When it comes to hosting a party or event, finding the perfect venue is essential. We are offering a separate party room for our customers.This party room is typically secluded from the main dining area, allowing for greater privacy and exclusivity.</p>
                        <p>This makes it an ideal choice for birthday parties, bridal showers, rehearsal dinners, business meetings, and other events where guests want to have a more intimate and personalized experience, and guests can enjoy a customized menu tailored to their preferences and dietary restrictions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Journey Section End -->

@endsection
