@extends('admin.layouts.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="text-md-end">
                        <div class="btn-group btn-group-sm d-print-none mb-4">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="invoice-logo">
                                            <img src="{{ asset('images/bhavan/India-logo.png') }}" alt="logo">
                                        </div>
                                    </div>
                                    <div class="col s12 m6  ">

                                    </div>
                                </div>
                            </div>

                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Customer Detail</strong>
                                            <p class="invoice-details invoice-details-two">
                                                Name : {{$booking_detail_view->name}} <br>
                                                Phone Number : {{$booking_detail_view->phone}}<br>
                                                Email : {{$booking_detail_view->email}}<br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="invoice-details">
                                            <strong class="customer-text">Time Details</strong>
                                            <p class="invoice-details">
                                                Date : {{$booking_detail_view->date}}<br>
                                                Time : {{$booking_detail_view->time}}<br>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="invoice-terms mb-0">
                                <h6>Customer Message:</h6><br>
                                <p class="mb-0" style="color: #514922">{{$booking_detail_view->message}}</p>
                            </div>

                            <hr class="mt-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
