@extends('layouts.layout')
@section('content')

<!-- Contact Us Sectino Start -->
<section class="contact_us_section">
    <!-- Right Shape -->
    <div class="right_shape position-absolute">
        <img src="{{asset('images/abtbanshape.png')}}" alt="img">
    </div>
    <!-- Left Shape -->
    <div class="left_shape position-absolute">
        <img src="{{asset('images/contactShape.png')}}" alt="img">
    </div>
    <div class="container">
        <!-- Section Title -->
        <div class="section_title text-center">
            <span class="icon" data-aos="fade-down" data-aos-duration="1500"><img src="{{asset('images/contact_icon.png')}}"
                    alt="img"></span>
            <span class="sub_text mb-1" data-aos="fade-up" data-aos-duration="1500">Contact us</span>
            <h2 data-aos="fade-up" data-aos-duration="1500">Get in touch with us
            </h2>
        </div>
        <!-- Contact Block -->
        <div class="row">
            <div class="col-md-6">
                <div class="img" data-aos="fade-up" data-aos-duration="1500">
                    <img class="radius_img" src="{{asset('images/bhavan/dark.png')}}" alt="img">
                </div>
            </div>
            <div class="col-md-6">
                <section class="resarvation_form rform_bg_two resarvation_form rform_bg">
                    <div class="container">
                        <div class="form_inner" data-aos="fade-in" data-aos-duration="1500"
                            data-aos-delay="150">
                            <div class="formBlock_two formBlock">
                                <div class="text-center">
                                    <h2 class="mb-2">Get In Touch Now</h2>
                                    <p>Booking request <span style="color: #9f7955;">01 538 4868 / 01 557 2604</span> 
                                    </p>
                                    @if(session('success'))
                                        <div class="text-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                                <form method="POST" action="{{route('sendcontactmail')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn_primary w-100" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Contact Map -->
        <div class="map" data-aos="fade-up" data-aos-duration="1500">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2385.1844825720837!2d-6.377700822934774!3d53.28623027921947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486775b3ae9a0c85%3A0xc64d0d17c281dd64!2s16%20Belgard%20Square%20W%2C%20Tallaght%2C%20Dublin%2C%20D24%20F9XV%2C%20Ireland!5e0!3m2!1sen!2sin!4v1716365423904!5m2!1sen!2sin"
                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- Contact Us Sectino End -->

@endsection
