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
                    <h3 class="page-title">Holidays</h3>
                    <ul class="breadcrumb">
                        <li class=""><a href="{{route('admin_home')}}">Dashboard</a>
                        </li> /
                        <li class="active">Holidays</li>
                    </ul>
                </div>
            </div>
        </div>
        @php $i = 1; @endphp
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Holidays</h3>
                  </div>
                  <div class="col-auto text-end">
                    <a href="{{route('holidays.create')}}" class="btn btn-primary btn-blog mb-3"><i class="feather-plus-circle me-1"></i> Add New Holidays</a>
                  </div>

                    <div class="card card-table">
                            <div class="card-body">
                                <div class="responsive-table" style="overflow: hidden;">
                                    <!-- Today's Bookings Table -->
                                    <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Holiday</th>
                                                <th>Date</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($holidays) && $holidays->count() > 0)
                                               @foreach($holidays as $holiday)
                                                        <tr class="other-item">
                                                            <td>{{$i++}}</td>
                                                            <td>{{$holiday->holiday}}</td>
                                                            <td>{{ \Carbon\Carbon::parse($holiday->date)->format('d-m-Y') }}</td>

                                                            <td class="text-end">
                                                                <form action="{{ route('holidays.destroy', $holiday->id) }}" method="POST">
                                                                    <a href="{{ route('holidays.edit', $holiday->id) }}" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-success-light" >
                                                                        <i class="feather-edit-3 me-1"></i> Edit
                                                                    </a>
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-danger-light" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                        <i class="feather-trash-2 me-1"></i> Delete
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                @endforeach

                                            @else
                                                <tr><td></td><td class="text-center">No holidays for the today.</td><td></td><td></td></tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    {{ $holidays->links() }}
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
