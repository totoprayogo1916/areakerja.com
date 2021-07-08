<!DOCTYPE html>
<html lang="en">

<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=3.0, shrink-to-fit=no" name="viewport">
  <title>Admin - OXT Design</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{url('otika/assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('otika/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{url('otika/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{url('otika/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{url('otika/assets/img/logo.png')}}" />

  <link rel="stylesheet" href="{{url('otika/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{url('otika/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('otika/assets/bundles/fullcalendar/fullcalendar.min.css')}}">

  @section('css')
  @show
  @yield('css')
</head>

<body>
    <div class="loader"></div>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>

                    <!--header-->
                    @include('layouts.admin.header')
                    <!--sidebar-->
                    @include('layouts.admin.sidebar')
                    <!-- Main Content -->
                    @yield('content')
                    <!-- footer -->
                    @include('layouts.admin.footer')

                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

    @stack('before-script')
  <!-- General JS Scripts -->
  <script src="{{url('otika/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{url('otika/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{url('otika/assets/js/page/index.js')}}"></script>
  @stack('page-script')
  <!-- Template JS File -->
  <script src="{{url('otika/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{url('otika/assets/js/custom.js')}}"></script>

  <script src="{{url('otika/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{url('otika/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{url('otika/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{url('otika/assets/js/page/datatables.js')}}"></script>
  <script src="{{url('otika/assets/js/page/advance-table.js')}}"></script>

  <script src="{{url('otika/assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
  <script src="{{url('otika/assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
  <script src="{{url('otika/assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
  <script src="{{url('otika/assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
  <script src="{{url('otika/assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{url('otika/assets/bundles/izitoast/js/iziToast.min.js')}}""></script>
  <!-- Page Specific JS File -->
  <script src="{{url('otika/assets/js/page/toastr.js')}}"></script>
  <script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            "scrollX": false,
        });
    } );
</script>

    @section('js')
    @show
@stack('after-script')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
