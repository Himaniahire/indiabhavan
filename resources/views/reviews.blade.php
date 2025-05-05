@extends('layouts.layout')
@section('content')

<!-- Bread Crumb Start -->
<section class="bredcrumb_section review_banner">
    <div class="container">
        <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
            <span class="sub_text">Customer reviews</span>
            <h2>Words of Delight</h2>
        </div>
    </div>
</section>
<!-- Bread Crumb End -->

<!-- Review Section Start -->
<section class="row_am coustomer_review_section">
    <div class="container">
        <div class="coustomer_inner">

            <!-- Review box -->
            @foreach ($testimonials as $testimonial)
                <div class="review_box with_text" data-aos="fade-up" data-aos-duration="1500">
                    <span class="quotes left_quote"><i class="icofont-quote-left"></i></span>
                    <div class="user_img">
                        <img src="{{asset('images/bhavan/new.jpeg')}}" alt="img">
                    </div>
                    <div class="review">
                        <div class="star">
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                            <span><i class="icofont-star"></i></span>
                        </div>
                        <p>{{$testimonial->review}}</p>
                        <h3 class="name">- {{$testimonial->name}}</h3>
                    </div>
                    <span class="quotes right_quote"><i class="icofont-quote-right"></i></span>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Review Section End -->

<!-- Online ReserVation Form Start -->
<section class="resarvation_form rform_bg">
    <div class="container">
        <div class="form_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="150">
            <div class="formBlock">
                <div class="text-center">
                    <h2 class="mb-2">Add Your Review</h2>
                    {{-- <p></p> --}}
                </div>
                <form id="testimonialForm" action="{{route('reviews.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control name @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control review @error('review') is-invalid @enderror" name="review" id="review" placeholder="Your Review"></textarea>
                                @error('review')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn_primary w-100 ">Submit</button>
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
        $('#testimonialForm').on('submit', function (e) {
            let isValid = true;

            // Clear previous error messages
            $('.invalid-feedback').remove();

            // Validate name
            if ($('#name').val() === '') {
                isValid = false;
                $('#name').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Name.</div>');
            } else {
                $('#name').removeClass('is-invalid');
            }

            // Validate Review
            if ($('#review').val().trim() === '') {
                isValid = false;
                $('#review').addClass('is-invalid').after('<div class="invalid-feedback">Please Enter Your Review.</div>');
            } else {
                $('#review').removeClass('is-invalid');
            }


            // Prevent form submission if not valid
            if (!isValid) {
                e.preventDefault();
            }
        });
    });
</script>

@endsection
