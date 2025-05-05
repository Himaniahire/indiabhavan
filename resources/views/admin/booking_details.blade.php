@extends('admin.layouts.layout')
@section('content')
<style>
    .page-link {
    padding: 0px 10px;
}
</style>

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="colEmpty">
                    <h3 class="page-title">Booking Details</h3>
                    <ul class="breadcrumb">
                        <li class=""><a href="{{route('admin_home')}}">Dashboard</a>
                        </li> /
                        <li class="active">Booking Details</li>
                    </ul>
                </div>
            </div>
        </div>
@php $i = 1; @endphp
@php $j = 1; @endphp
@php $p = 1; @endphp
            <div class="row">
                <div class="col s12">
                    <h2>Today's Bookings</h2>
                    <div class="card card-table">
                            <div class="card-body">
                                <div class="responsive-table" style="overflow: hidden;">
                                    <!-- Today's Bookings Table -->
                                    <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Persons</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($todayBookings) && $todayBookings->count() > 0)
                                               @foreach($todayBookings as $booking)
                                                        <tr class="other-item">
                                                            <td>{{$i++}}</td>
                                                            <td>{{$booking->name}}</td>
                                                            <td>{{$booking->email}}</td>
                                                            <td>{{$booking->phone}}</td>
                                                            <td>{{$booking->guests}}</td>
                                                            <td>{{\Carbon\Carbon::parse($booking->date)->format('d-m-Y')}}</td>
                                                            <td>{{\Carbon\Carbon::parse($booking->time)->format('h:i A')}}</td>
                                                            <td class="text-end">
                                                                <form action="{{ route('booking_detail_destroy', $booking->id) }}" method="POST">
                                                                    <a href="{{ route('booking_detail_view', $booking->id) }}" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-success-light" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                        <i class="feather-edit-3 me-1"></i> View
                                                                    </a>
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-danger-light">
                                                                        <i class="feather-trash-2 me-1"></i> Delete
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                @endforeach
                                                
                                            @else
                                                <tr><td></td><td></td><td></td><td class="text-center">No bookings for the today.</td><td></td><td></td><td></td><td></td></tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    {{ $todayBookings->links() }}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <h2>Next Day's Bookings</h2>
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="responsive-table" style="overflow: hidden;">
                                <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Persons</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($nextDayBookings) && $nextDayBookings->count() > 0)
                                                @foreach($nextDayBookings as $booking)
                                                    <tr>
                                                        
                                                        <td>{{$j++}}</td>
                                                        <td>{{$booking->name}}</td>
                                                        <td>{{$booking->email}}</td>
                                                        <td>{{$booking->phone}}</td>
                                                        <td>{{$booking->guests}}</td>
                                                        <td>{{\Carbon\Carbon::parse($booking->date)->format('d-m-Y')}}</td>
                                                        <td>{{\Carbon\Carbon::parse($booking->time)->format('h:i A')}}</td>
                                                        <td class="text-end">
                                                            <form action="{{ route('booking_detail_destroy', $booking->id) }}" method="POST">
                                                                <a href="{{ route('booking_detail_view', $booking->id) }}" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-success-light">
                                                                    <i class="feather-edit-3 me-1"></i> View</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-danger-light"  onclick="return confirm('Are you sure you want to delete this item?');">
                                                                    <i class="feather-trash-2 me-1"></i> Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                                @else
                                                    <tr><td></td><td></td><td></td><td class="text-center">No bookings for the next day.</td><td></td><td></td><td></td><td></td></tr>
                                                @endif
                                            
                                        </tbody>
                                    </table>
                                    {{ $nextDayBookings->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <h2>Later Day's Bookings</h2>
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="responsive-table" style="overflow: hidden;">
                                <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Persons</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($laterDayBookings) && $laterDayBookings->count() > 0)
                                                @foreach($laterDayBookings as $booking)
                                                    <tr>
                                                        
                                                        <td>{{$j++}}</td>
                                                        <td>{{$booking->name}}</td>
                                                        <td>{{$booking->email}}</td>
                                                        <td>{{$booking->phone}}</td>
                                                        <td>{{$booking->guests}}</td>
                                                        <td>{{\Carbon\Carbon::parse($booking->date)->format('d-m-Y')}}</td>
                                                        <td>{{\Carbon\Carbon::parse($booking->time)->format('h:i A')}}</td>
                                                        <td class="text-end">
                                                            <form action="{{ route('booking_detail_destroy', $booking->id) }}" method="POST">
                                                                <a href="{{ route('booking_detail_view', $booking->id) }}" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-success-light">
                                                                    <i class="feather-edit-3 me-1"></i> View</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-danger-light"  onclick="return confirm('Are you sure you want to delete this item?');">
                                                                    <i class="feather-trash-2 me-1"></i> Delete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                    <tr><td></td><td></td><td></td><td class="text-center">No bookings.</td><td></td><td></td><td></td><td></td></tr>
                                                @endif
                                            
                                        </tbody>
                                    </table>
                                    
                                        {{ $laterDayBookings->links() }}
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!--\Carbon\Carbon::parse($booking->date)->format('d-m-Y')-->
<!--Carbon\Carbon::parse($booking->time)->format('h:i A')-->
