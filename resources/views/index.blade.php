@extends('layouts.layout')
@section('content')

<!-- Banner Start -->
<section class="banner_section second_banner">
    <!-- Side Sticky Social Media Start -->
    <div class="social_media_side side_fixer">
        <ul>
            <li><a href="https://www.facebook.com/people/India-Bhavan/61561173890500/" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com/indiabhavantallaght/?igsh=MWZpemQ5dGJreHJhaQ%3D%3D" target="_blank">Instagram</a></li>
        </ul>
    </div>
    <!-- Side Sticky Social Media End -->
    <!-- Side Sticky Timing Start -->
    <div class="timing_side side_fixer">
        <ul>
            <li><span>Tue - Thu : 12PM - 3PM, 4PM - 11PM </span></li>
            <li><span>Fri - Sat : 12PM - 3PM, 4PM - 12AM</span></li>
            <li><span>Sun : 12PM - 11PM</span></li>
        </ul>
    </div>
    <!-- Side Sticky Timing End -->
    <!-- Main Banner Slider Start -->
    <div class="banner_slider" data-aos="fade-up" data-aos-duration="5000" data-aos-offset="0">
        <div class="owl-carousel owl-theme" id="banner_slider">
            <div class="item">
                <div class="slider_block">
                    <video autoplay muted loop id="background-video">
                        <source src="{{asset('images/bhavan/vid.mp4')}}" type="video/mp4">
                    </video>
                    <div class="ban_text">
                        <div class="inner_text">

                            <!-- <span class="sub_text">Welcome to <span class="brown">India Bhavan</span></span> -->
                            <h1 style="text-transform: capitalize;">Welcome to <br><span class="brown">India Bhavan</span></h1>
                            <!-- <p class="lead">~ Authentic Indian and Mediterrainanin Cuisine ~</p> -->
                            <a href="{{route('reservation')}}" class="btn btn_primary">Reserve Your Table</a>
                            <a href="https://order.toasttab.com/online/india-bhavan-belgard-square-west" target="_blank" class="btn btn_primary">Place Your Order</a>
                            <div class="h-logo">
                                <img src="{{asset('images/bhavan/halal-logo.png')}}" alt="" class="halal-logo">
                                <h4 class="f-h">Halal Friendly</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider_block" style="background-image: url({{asset('images/bhavan/hotelCopy.jpg')}});">
                    <div class="ban_text ">
                        <div class="inner_text">
                            <!-- <span class="sub_text">Welcome to <span class="brown">India Bhavan</span></span> -->
                            <h1 style="text-transform: capitalize;">Welcome to <br><span class="brown">India Bhavan</span></h1>
                            <!-- <p class="lead">~ Authentic Indian and Mediterrainanin Cuisine ~</p> -->
                            <a href="{{route('reservation')}}" class="btn btn_primary">Reserve Your Table</a>
                            <a href="https://order.toasttab.com/online/india-bhavan-belgard-square-west" target="_blank" class="btn btn_primary">Place Your Order</a>
                            <div class="h-logo">
                                <img src="{{asset('images/bhavan/halal-logo.png')}}" alt="" class="halal-logo">
                                <h4 class="f-h">Halal Friendly</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider_block" style="background-image: url({{asset('images/bhavan/four.jpeg')}});">
                    <div class="ban_text">
                        <div class="inner_text">
                            <!-- <span class="sub_text">Welcome to <span class="brown">India Bhavan</span></span> -->
                            <h1 style="text-transform: capitalize;">Welcome to <br><span class="brown">India Bhavan</span></h1>
                            <!-- <p class="lead">~ Authentic Indian and Mediterrainanin Cuisine ~</p> -->
                            <a href="{{route('reservation')}}" class="btn btn_primary">Reserve Your Table</a>
                            <a href="https://order.toasttab.com/online/india-bhavan-belgard-square-west" target="_blank" class="btn btn_primary">Place Your Order</a>
                            <div class="h-logo">
                                <img src="{{asset('images/bhavan/halal-logo.png')}}" alt="" class="halal-logo">
                                <h4 class="f-h">Halal Friendly</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main Banner Slider End -->
</section>
<!-- Banner End -->


<!-- Menu List flow Section Start -->
<div class="menu_list_section">
    <div class="owl-carousel owl-theme" id="menu_list_flow">
        <div class="item">
            <div class="text_block">
                <span>Chilly Chicken</span>
                <span class="mark_star">*</span>
            </div>
        </div>
        <div class="item">
            <div class="text_block">
                <span>Tandoori Prawns</span>
                <span class="mark_star">*</span>
            </div>
        </div>
        <div class="item">
            <div class="text_block">
                <span>Dal Makhani</span>
                <span class="mark_star">*</span>
            </div>
        </div>
        <div class="item">
            <div class="text_block">
                <span>Biryani</span>
                <span class="mark_star">*</span>
            </div>
        </div>
        <div class="item">
            <div class="text_block">
                <span>Butter Naan</span>
                <span class="mark_star">*</span>
            </div>
        </div>
    </div>
</div>
<!-- Menu List flow Section End -->

<!-- Video Section Start -->
<div class="home_video_section row_inner_am">
    <!-- Side Shape -->
    <div class="side_shape">
        <img class="right_shape" src="{{asset('images/banner_undershape.png')}}" alt="img">
        <img class="left_shape" src="{{asset('images/chiken_icon.png')}}" alt="img">
    </div>
    <!-- Counter Slider -->
    <section class="chef_section chef_page row_am">
        <div class="container">
          <div class="row my-2 my-sm-4">
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
              <div class="chef_img">
                <img class="img-fluid" src="{{asset('images/bhavan/dark.jpeg')}}" alt="img">
              </div>
            </div>
            <div class="col-md-6">
              <div class="abt_chef aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                <div class="banner_badge">
                  <img class="img-fluid blossom" src="{{asset('images/bhavan/blossom.svg')}}" alt="img">
                </div>
                <div class="section_title">
                    <!-- <h1 class="sub_text">Our chef</h1> -->
                    <h2 class="mb-3">OUR STORY</h2>
                    <p class="p-size">Welcome to a culinary haven that brings you a rich dining experience – "A Perfect Blend of Indian Cuisines!" Our menu is carefully   curated to highlight the finest flavors of both worlds, offering a variety of dishes that will delight your taste buds and take you on a culinary journey filled with exotic spices and vibrant flavors.</p>
                    <p class="p-size">We take pride in using only the freshest and highest quality ingredients to create our renowned dishes. Whether it's authentic traditional cuisine or a fusion of flavors, our restaurant has a dish for every palate and food connoisseur.</p>
                    <p class="p-size">We invite you to join us for an unforgettable dining experience !</p>
                    <p class="p-size" ><a href="https://kingofspice.ie/" target="_blank" style="color: #fff">We are glad to open our new restaurant in Dublin along with King of Spice in Dunshaughlin, County Meath.</a></p>
                </div>
                <a href="{{route('about')}}" class="btn btn_text type-btn">Know More <i class="icofont-long-arrow-down"></i></a>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
<!-- Video Section End -->


<!-- Who We Are Section Start -->
<div class="row_inner_am who_we_section who_version_two light_texchur">
    <!-- Who we Content -->
    <div class="container">
        <!-- Section Title -->
        <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="icon"><img src="{{asset('images/title_icon.png')}}" alt="img"></div>
            <h2>The Chef</h2>
            <h2 class="h2-new">Our chefs are passionate about creating dishes that are not only delicious but also healthy and nutritious. We use traditional cooking techniques and authentic recipes to bring out the true flavours of each dish, while also offering options for those with dietary restrictions or preferences. </h2>
            <h2 class="h2-new">When it comes to hosting a party or event, finding the perfect venue is essential. We are offering a separate party room for our customers. This party room is typically secluded from the main dining area, allowing for greater privacy and exclusivity.</h2>
        </div>
    </div>
    <!-- Image Gallery Start-->
    <div class="gallery_slider">
        <!-- Right To left -->
        <div class="owl-carousel owl-theme" id="gallery_flow_right" data-aos="fade-in" data-aos-duration="1500">
            <div class="item">
                <div class="img">
                    <img src="{{asset('images/bhavan/one.jpeg')}}" alt="img">
                </div>
            </div>
            <!--<div class="item">-->
            <!--    <div class="img">-->
            <!--        <img src="{{asset('images/bhavan/wing.jpeg')}}" alt="img">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="item">
                <div class="img">
                    <img src="{{asset('images/bhavan/burgur.jpeg')}}" alt="img">
                </div>
            </div>
            <!--<div class="item">-->
            <!--    <div class="img">-->
            <!--        <img src="{{asset('images/bhavan/kebab.jpeg')}}" alt="img">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="item">
                <div class="img">
                    <img src="{{asset('images/bhavan/curry.jpeg')}}" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="{{asset('images/bhavan/two.jpeg')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery End-->
    <div class="text-center" data-aos="fade-in" data-aos-duration="1500">
        <a href="{{route('about')}}" class="btn btn_primary">read our story</a>
    </div>
</div>
<!-- Who We Are Section End -->

 <!-- Testimonial Section Start -->
<section class="row_inner_am testimonial_section bg_white_textcher">
    <div class="container-fluid">
        <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
            <span class="sub_text" style="color: #9f7955;">Testimonial</span>
            <h2>customer reviews</h2>
        </div>
        <div class="testimonial_wraper" data-aos="fade-in" data-aos-duration="1500">
            <div class="owl-carousel owl-theme" id="testimonial_slider">

                <div class="item">
                    <div class="testimonial_inner">
                        <div class="img">
                            <img src="{{asset('images/bhavan/new.jpeg')}}" alt="img">
                        </div>
                        <div class="text">
                            <span class="quote">“</span>
                            <div class="star">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                            <h2>Can't wait for India Bhavan to open! The menu looks fantastic, and I'm excited to try both the Indian dishes.</h2>
                            <h3>Anita M.</h3>
                            <span class="quote text-right d-block">”</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial_inner">
                        <div class="img">
                            <img src="{{asset('images/bhavan/curry.jpeg')}}" alt="img">
                        </div>
                        <div class="text">
                            <span class="quote">“</span>
                            <div class="star">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                            <h2>I've heard great things about India Bhavan. Looking forward to experiencing the unique flavors of Indian cuisine!</h2>
                            <h3>David R.</h3>
                            <span class="quote text-right d-block">”</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial_inner">
                        <div class="img">
                            <img src="{{asset('images/bhavan/new4.jpeg')}}" alt="img">
                        </div>
                        <div class="text">
                            <span class="quote">“</span>
                            <div class="star">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                            <h2>Counting down the days until India Bhavan opens. The menu promises authentic flavors and great variety!</h2>
                            <h3>Sophia L.</h3>
                            <span class="quote text-right d-block">”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center" data-aos="fade-in" data-aos-duration="1500">
            <a href="{{route('reviews')}}" class="btn btn_primary">more testimonials</a>
        </div>
    </div>


</section>
<!-- Testimonial Section End -->

<!-- Online ReserVation Form Start -->
<section class="resarvation_form rform_bg">
    <div class="container">
        <div class="form_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="150">
            <div class="formBlock">
                <div class="text-center">
                    <h2 class="mb-2">Online Reservation</h2>
                    <p>Booking request <span style="color: #9f7955;">01 538 4868 / 01 557 2604</span><br> or fill out the order form
                    </p>
                    @if(session('success'))
                        <div class="text-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <form id="bookTableHomeForm" method="POST" action="{{route('booking.table')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your Name" >
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone Number" >
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="icon"><i class="icofont-user-alt-7"></i></span>
                                <input type="number" class="form-control has_icon @error('guests') is-invalid @enderror" name="guests" id="guests" placeholder="1" >
                                @error('guests')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control has_icon flex-row-reverse @error('date') is-invalid @enderror" name="date" id="date" >
                                @error('date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="time" id="time" class="form-control flex-row-reverse @error('time') is-invalid @enderror">
                                    @foreach($hours as $hour)
                                        <option value="{{$hour}}">{{ Carbon\Carbon::parse($hour)->format('H:i a')}}</option>
                                    @endforeach
                                </select>
                                @error('time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Message" id="message" ></textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!--<div class="col-md-12">-->
                        <!--    <div class="form-group">-->
                        <!--        <p><input type="checkbox" name="order" id="" value="1"> Do You Wish to Place an Order...?</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-md-12">
                            <button class="btn btn_primary w-100" type="submit">Book a Table</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Online ReserVation Form End -->

@endsection


@section('footer-script')

<script>
    $(document).ready(function () {
        $('#bookTableHomeForm').on('submit', function (e) {
            let isValid = true;
            var dateValue = $('#date').val();

            // Clear previous error messages
            $('.invalid-feedback').remove();

            // Validate name
            if ($('#name').val() === '') {
                isValid = false;
                $('#name').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Name.</div>');
            } else {
                $('#name').removeClass('is-invalid');
            }

            if ($('#phone').val() === '') {
                isValid = false;
                $('#phone').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Phone Number.</div>');
            } else if (!/^\d+$/.test($('#phone').val())) {
                isValid = false;
                $('#phone').addClass('is-invalid').after('<div class="invalid-feedback">Please enter only numbers for the phone number.</div>');
            } else {
                $('#phone').removeClass('is-invalid').next('.invalid-feedback').remove();
            }

            if ($('#email').val() === '') {
                isValid = false;
                $('#email').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Email.</div>');
            } else {
                $('#email').removeClass('is-invalid');
            }

            if ($('#time').val() === '') {
                isValid = false;
                $('#time').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Time.</div>');
            } else {
                $('#time').removeClass('is-invalid');
            }

            if (dateValue === '') {
                isValid = false;
                $('#date').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Date.</div>');
            } else {
                $('#date').removeClass('is-invalid').next('.invalid-feedback').remove();

                // var selectedDate = new Date(dateValue);
                // var dayOfWeek = selectedDate.getDay(); // getDay() returns 0 for Sunday, 1 for Monday, etc.

                // if (dayOfWeek === 1) { // 1 represents Monday
                //     isValid = false;
                //     $('#date').addClass('is-invalid').after('<div class="invalid-feedback">We are Closed On Monday.</div>');
                // } else {
                //     $('#date').removeClass('is-invalid').next('.invalid-feedback').remove();
                // }
            }

            if ($('#guests').val() === '') {
                isValid = false;
                $('#guests').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Guests.</div>');
            } else if ($('#guests').val() > 20) {
                isValid = false;
                $('#guests').addClass('is-invalid').after('<div class="invalid-feedback">You can enter only up to 20 guests.</div>');
            } else {
                $('#guests').removeClass('is-invalid').next('.invalid-feedback').remove();
            }

            // Validate Review
            if ($('#message').val().trim() === '') {
                isValid = false;
                $('#message').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Message.</div>');
            } else {
                $('#message').removeClass('is-invalid');
            }


            // Prevent form submission if not valid
            if (!isValid) {
                e.preventDefault();
            }
        });
    });
</script>

@endsection
