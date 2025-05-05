@extends('layouts.layout')
@section('content')

<!-- Bread Crumb Start -->
<section class="bredcrumb_section gallery_banner">
    <div class="container">
        <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
            <span class="sub_text">Our glimpsis</span>
            <h2>Restaurant Gallery</h2>
        </div>
    </div>
</section>
<!-- Bread Crumb End -->

<!-- Gallery Section Start -->
<section class="row_am gallery_section">
    <div class="container">
        <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/dark.png')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/new4.jpeg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/decore.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/new.jpeg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/view-two.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/new2.jpeg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/contact.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="img-fluid" src="{{asset('images/bhavan/new3.jpeg')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section End -->

@endsection
