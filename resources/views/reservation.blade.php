@extends('layouts.layout')
@section('content')

<!-- Bread Crumb Start -->
<section class="bredcrumb_section resarvation_form reservationpage_1_bg">
    <div class="side_shape position-absolute">
        <img src="{{asset('images/reservation_side_elements.png')}}" alt="img">
    </div>
    <div class="container">
        <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
            <span class="icon"><img src="{{asset('images/calendar.png')}}" alt="img"></span>
            <!-- <span class="sub_text">Book A Table</span> -->
            <h2>Book A Table</h2>
        </div>
        @include('flash_data')
        <!-- Online ReserVation Form Start -->
        <div class="form_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="150">
            <div class="formBlock">
                <div class="text-center">
                    <h2 class="mb-2">Book your table now</h2>
                    <p>Booking request <span style="color: #9f7955;">01 538 4868 / 01 557 2604</span><br> or fill out the order form
                    </p>
                    @if(session('success'))
                        <div class="text-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('danger'))
                        <div class="text-danger">
                            {{ session('danger') }}
                        </div>
                    @endif
                </div>
                <form id="bookTableForm" method="POST" action="{{route('booking.table')}}">
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
                        <!--        <p> <input type="checkbox" name="order" id="" value="1"> <p>Do You Wish to Place an Order...?</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-md-12">
                            <button class="btn btn_primary w-100" type="submit">Book a Table</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact_block">
                <h2>Contact Us</h2>
                <div class="booking">
                    <h3>Booking request</h3>
                    <p>01 538 4868</p>
                </div>
                <ul>
                    <li>
                        <h3>Location</h3>
                        <p>Unit 16 Belgard Square W, Tallaght, Dublin, D24 F9XV</p>
                    </li>
                    <li>
                        <h3>Opening Hours</h3>
                        <p>Open lunch buffet Tuesday to Sunday 10:30 to 15:00 and all bank holidays Mondays.</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Online ReserVation Form End -->
    </div>
</section>
<!-- Bread Crumb End -->

@endsection

@section('footer-script')

<script>
   $(document).ready(function () {
    $('#bookTableForm').on('submit', function (e) {
        let isValid = true;

        // Clear all previous errors
        $('.invalid-feedback').remove();
        $('.is-invalid').removeClass('is-invalid');

        let name = $('#name');
        let phone = $('#phone');
        let email = $('#email');
        let date = $('#date');
        let time = $('#time');
        let guests = $('#guests');
        let message = $('#message');

        // Name Validation
        if (name.val().trim() === '') {
            isValid = false;
            name.addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Name.</div>');
        }

        // Phone Validation
        if (phone.val().trim() === '') {
            isValid = false;
            phone.addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Phone Number.</div>');
        } else if (!/^\d+$/.test(phone.val())) {
            isValid = false;
            phone.addClass('is-invalid').after('<div class="invalid-feedback">Please enter only numbers for the phone number.</div>');
        }

        // Email Validation
        if (email.val().trim() === '') {
            isValid = false;
            email.addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Email.</div>');
        } else if (!/^\S+@\S+\.\S+$/.test(email.val())) {
            isValid = false;
            email.addClass('is-invalid').after('<div class="invalid-feedback">Please enter a valid email address.</div>');
        }

        // Time Validation
        if (time.val().trim() === '') {
            isValid = false;
            time.addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Time.</div>');
        }

        // Date Validation
        if (date.val().trim() === '') {
            isValid = false;
            date.addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Date.</div>');
        }
        // else {
        //     var selectedDate = new Date(date.val());
        //     var dayOfWeek = selectedDate.getDay();
        //     if (dayOfWeek === 1) {
        //         isValid = false;
        //         date.addClass('is-invalid').after('<div class="invalid-feedback">We are Closed On Monday.</div>');
        //     }
        }

        // Guests Validation
        if (guests.val().trim() === '') {
            isValid = false;
            guests.addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Guests.</div>');
        } else if (parseInt(guests.val()) > 20) {
            isValid = false;
            guests.addClass('is-invalid').after('<div class="invalid-feedback">You can enter only up to 20 guests.</div>');
        }

        // Message Validation
        if (message.val().trim() === '') {
            isValid = false;
            message.addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Message.</div>');
        }

        // Prevent Submit
        if (!isValid) e.preventDefault();
    });
});

</script>

@endsection

