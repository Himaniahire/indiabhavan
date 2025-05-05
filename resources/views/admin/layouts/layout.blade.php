<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>India Bhavan</title>

    <link rel="shortcut icon" href="{{asset('images/bhavan/India-logo.png')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/materialize-custom.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{asset('admin_assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/css/feather.css')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <div class="main-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
                @include('flash_data')

        @yield('content')
        @include('admin.layouts.footer')
    </div>

    {{-- <script>
        $(function() {
            // Category Status
            $('.status_change_cate').click(function() {
                var cate_id = $(this).data('category_id');
                var status = $('#rating_'+ cate_id).prop('checked') == true ? 0 : 1;

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('catechangeStatus') }}',
                    data: {
                        'status': status,
                        'cate_id': cate_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })

            // Item dine in Status
            $('.status_change_item_dinein').click(function() {
                var item_id = $(this).data('item_id');
                var status_dinein  = $('#rating_'+ item_id).prop('checked') == true ? 0 : 1;

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('itemDineinChangeStatus') }}',
                    data: {
                        'status_dinein': status_dinein,
                        'item_id': item_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })

            // Item Takeaway Status
            $('.status_change_item_takeaway').click(function() {
                var item_id = $(this).data('item_id');
                var status_takeaway = $('#rating_'+ item_id).prop('checked') == true ? 0 : 1;

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('itemTakeawayChangeStatus') }}',
                    data: {
                        'status_takeaway': status_takeaway,
                        'item_id': item_id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script> --}}
</body>
</html>
