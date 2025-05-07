@extends('admin.layouts.layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Add Holiday</h3>
                        </div>
                    </div>
                </div>

                <form action="{{route('holidays.store')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="bank-inner-details">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Holiday<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="holiday" placeholder="Holiday" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label>Holiday Date<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date" placeholder="Holiday Date" required>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-4 col-md-4">-->
                                    <!--    <div class="form-group">-->
                                    <!--        <label>Is Booking<span class="text-danger">*</span></label>-->
                                    <!--        <div class="checkbox">-->
                                    <!--            <label>-->
                                    <!--                <input type="checkbox" name="is_booking" value="1">-->
                                    <!--            </label>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                        <div class=" blog-categories-btn pt-0">
                            <div class="bank-details-btn ">
                                <button type="submit" class="btn btn-primary me-2">Add Holiday</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
