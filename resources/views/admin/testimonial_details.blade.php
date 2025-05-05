@extends('admin.layouts.layout')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="colEmpty">
                    <h3 class="page-title">Review Details</h3>
                    <ul class="breadcrumb">
                        <li class=""><a href="{{route('admin_home')}}">Dashboard</a>
                        </li> /
                        <li class="active">Review Details</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                @include('flash_data')
                <div class="card card-table">
                    <div class="card-body">
                        <div class="responsive-table">
                            <table class="table table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer Name</th>
                                        <th>Review</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($testimonialtable as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->review}}</td>
                                        <td class="text-end">
                                            <form action="{{ route('testimonial_detail_destroy', $item->id) }}" method="POST">

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="table-action-btn waves-effect modal-trigger btn btn-sm bg-danger-light" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="feather-trash-2 me-1"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
