<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tenant Dashboard| Farsak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Vendor css -->
    <link href="{{ asset('tenant/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />



    <!-- Datatables css -->
    <link href="{{ asset('tenant/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('tenant/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('tenant/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('tenant/assets/js/config.js') }}"></script>
    <style>
        .btn-primary {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }

        .btn-secondary {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }
        

        .btn-primary:hover {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }

        .btn-primary {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- Menu -->
        <!-- Sidenav Menu Start -->


        @include('tenant.includes.sidebar')
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        @include('tenant.includes.header')
        <!-- Topbar End -->


        <div class="page-content">

            @yield('content')
        </div>
    </div>

    @include('tenant.includes.foot')

    @yield('script')

</body>

</html>
