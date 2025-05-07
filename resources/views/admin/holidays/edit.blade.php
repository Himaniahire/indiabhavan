@extends('admin.layouts.layout')
@section('content')


</style>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Update Holiday</h3>
                        </div>
                    </div>
                </div>

                <form action="{{route('holidays.update',$holiday->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <div class="bank-inner-details">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Holiday<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="holiday" placeholder="Holiday" value="{{$holiday->holiday}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Holiday Date<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date" placeholder="Holiday Date" value="{{$holiday->date}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Is Booking <span class="text-danger">*</span></label>
                                            <div class="checkbox">
                                                <label>
                                                    <!-- Hidden input to send a value of 0 when unchecked -->
                                                    <input type="hidden" name="is_booking" value="0">
                                                    <!-- Checkbox input -->
                                                    <input type="checkbox" name="is_booking" value="1" {{ $holiday->is_booking ? 'checked' : '' }}>
                                                    <!-- Label for the checkbox -->
                                                    <span>Booking</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class=" blog-categories-btn pt-0">
                            <div class="bank-details-btn ">
                                <button type="submit" class="btn btn-primary me-2">Update Holiday</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
