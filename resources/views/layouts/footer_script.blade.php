<!-- Booking Table Model Start -->
    <!-- Modal -->
    <div class="modal fade booking_model show" id="bookingForm_model" tabindex="-1" role="dialog"
        aria-labelledby="bookingForm_modelTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center border-0 d-block p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icofont-close-line"></i></span>
                    </button>
                    <h2 class="mb-2">Online Reservation</h2>
                    <p>Booking request <span style="color: #9f7955;">01 538 4868 / 01 557 2604</span> or fill out the order form</p>
                </div>
                <div class="modal-body">
                    <div class="booking_form">
                        <div class="form_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="150">
                            <div class="formBlock">
                                <form id="bookTableModalForm" method="POST" action="{{route('booking.table')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="cust_name" placeholder="Your Name" >
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="cust_phone" placeholder="Phone Number" >
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="cust_email" placeholder="Your Email" >
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="icon"><i class="icofont-user-alt-7"></i></span>
                                                <input type="number" class="form-control has_icon @error('guests') is-invalid @enderror" name="guests" id="cust_guests" placeholder="1" >
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
                                                <select name="time" id="cust_time" class="form-control flex-row-reverse @error('time') is-invalid @enderror">
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
                                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Message" id="cust_message" ></textarea>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Table Model End -->

    <!-- bootstrap-js-Link -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- owl-js-Link -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- aos-js-Link -->
    <script src="{{asset('js/aos.js')}}"></script>
    <!-- Gsap Scroll Js -->
    <script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
    <!-- Skrollr -->
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
    <!-- main-js-Link -->
    <script src="{{asset('js/main.js')}}"></script>


    <!-- Home Page Animation Js -->
    <script>

        // Image Moving Animation
        function animateOnMouseMove(element) {
            const mouseMoveElems = document.querySelectorAll(element);
            mouseMoveElems.forEach(function (mouseMoveElem) {
                var speed = mouseMoveElem.getAttribute('data-speed');
                window.addEventListener('mousemove', (evt) => {
                    const x = -(window.innerWidth / 2 - evt.pageX) / parseInt(speed);
                    const y = -(window.innerHeight / 2 - evt.pageY) / parseInt(speed);
                    mouseMoveElem.style.transform = `translateY(${y}px) translateX(${x}px)`;
                });
            });
        }
        animateOnMouseMove(".banner_images .img");

        // Fixed Discount Dish JS
        $(document).ready(function () {
            if ($(window).width() > 767) {
                $(function () {
                    skrollr.init({
                        forceHeight: false,
                        skrollrBody: 'skrollr-body',
                        mobileDeceleration: 0.004,
                        easing: {
                            WTF: Math.random,
                            inverted: function (p) {
                                return 1 - p;
                            }
                        }
                    });
                });
                let cardBlock = document.querySelectorAll('.dishMain');
                let topStyle = 230;

                cardBlock.forEach((card) => {
                    card.style.top = `${topStyle}px`;
                    topStyle += 30;
                })

            }
        });
        $(document).ready(function () {
            if ($(window).width() < 767) {
                $('.discount_section div').removeAttr("data-30-top");
            }
        });

        $(document).ready(function () {
            $('#bookTableModalForm').on('submit', function (e) {
                let isValid = true;
                var dateValue = $('#cust_date').val();

                // Clear previous error messages
                $('.invalid-feedback').remove();

                // Validate name
                if ($('#cust_name').val() === '') {
                    isValid = false;
                    $('#cust_name').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Name.</div>');
                } else {
                    $('#cust_name').removeClass('is-invalid');
                }

                if ($('#cust_phone').val() === '') {
                    isValid = false;
                    $('#cust_phone').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Phone Number.</div>');
                } else if (!/^\d+$/.test($('#cust_phone').val())) {
                    isValid = false;
                    $('#cust_phone').addClass('is-invalid').after('<div class="invalid-feedback">Please enter only numbers for the phone number.</div>');
                } else {
                    $('#cust_phone').removeClass('is-invalid').next('.invalid-feedback').remove();
                }

                if ($('#cust_email').val() === '') {
                    isValid = false;
                    $('#cust_email').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Email.</div>');
                } else {
                    $('#cust_email').removeClass('is-invalid');
                }

                if ($('#cust_time').val() === '') {
                    isValid = false;
                    $('#cust_time').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Time.</div>');
                } else {
                    $('#cust_time').removeClass('is-invalid');
                }

               if (dateValue === '') {
                    isValid = false;
                    $('#cust_date').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Date.</div>');
                } 
                // else {
                //     $('#cust_date').removeClass('is-invalid').next('.invalid-feedback').remove();
                
                //     var selectedDate = new Date(dateValue);
                //     var dayOfWeek = selectedDate.getDay(); // getDay() returns 0 for Sunday, 1 for Monday, etc.
                
                //     if (dayOfWeek === 1) { // 1 represents Monday
                //         isValid = false;
                //         $('#cust_date').addClass('is-invalid').after('<div class="invalid-feedback">We are Closed On Monday.</div>');
                //     } else {
                //         $('#cust_date').removeClass('is-invalid').next('.invalid-feedback').remove();
                //     }
                // }


                if ($('#cust_guests').val() === '') {
                    isValid = false;
                    $('#cust_guests').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Guests.</div>');
                } else if ($('#cust_guests').val() > 20) {
                    isValid = false;
                    $('#cust_guests').addClass('is-invalid').after('<div class="invalid-feedback">You can enter only up to 20 guests.</div>');
                } else {
                    $('#cust_guests').removeClass('is-invalid').next('.invalid-feedback').remove();
                }

                // Validate Review
                if ($('#cust_message').val().trim() === '') {
                    isValid = false;
                    $('#cust_message').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Message.</div>');
                } else {
                    $('#cust_message').removeClass('is-invalid');
                }


                // Prevent form submission if not valid
                if (!isValid) {
                    e.preventDefault();
                }
            });
        });

    </script>
