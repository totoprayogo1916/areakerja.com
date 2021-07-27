<!DOCTYPE html>
<html lang="en">

<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=3.0, shrink-to-fit=no"
        name="viewport">
    <title>Admin - Area Kerja</title>
    <!-- General CSS Files -->

    <link rel="stylesheet" href="{{ url('otika/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('otika/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('otika/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ url('otika/assets/css/custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/img-01.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('otika/assets/bundles/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('otika/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('otika/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('otika/assets/bundles/fullcalendar/fullcalendar.min.css') }}">
    <style>
        .form-control3 {
            display: block;
            width: 100%;
            height: 100px;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            -webkit-transition: border-color .15s ease-in-out,
                -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
        }

        .form-control3:focus {
            color: #495057;
            background-color: #fff;
            border-color: #c2c8f8;
            outline: 0;
        }

        .form-control3::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: left
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 2.2rem;
            color: #FFD600;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }

    </style>
    @section('css')
    @show
    @yield('css')
</head>

<body>
    {{-- <div class="loader"></div> --}}
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!--header-->
            @include('layouts.mitra.header')
            <!--sidebar-->
            @include('mitra.partials.menu')
            <!-- Main Content -->
            @yield('content')

            <!-- footer -->
            @include('layouts.mitra.footer')

        </div>
    </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="formModal">Buka Kandidat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="">
                <div class="form-group">
                  <label>Skill / Keahlian</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-briefcase"></i>
                      </div>
                    </div>
                    <select id="gender" name="gender" class="form-control">
                        <option value="front">Front End Developer</option>
                        <option value="back">Back End Developer</option>
                        <option value="fullstack">Full Stack Developer</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Jumlah Kandidat</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-address-card"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" name="password">
                  </div>
                </div>

                <button type="button" class="btn btn-primary m-t-15 waves-effect">Buka Kandidat</button>
              </form>
            </div>
          </div>
    </div>
    </div>
    @include('sweetalert::alert')

    @stack('before-script')
    <!-- General JS Scripts -->
    <script src="{{ url('otika/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ url('otika/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ url('otika/assets/js/page/index.js') }}"></script>
    @stack('page-script')
    <!-- Template JS File -->
    <script src="{{ url('otika/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ url('otika/assets/js/custom.js') }}"></script>

    <script src="{{ url('otika/assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ url('otika/assets/js/page/datatables.js') }}"></script>
    <script src="{{ url('otika/assets/js/page/advance-table.js') }}"></script>

    <script src="{{ url('otika/assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ url('otika/assets/bundles/izitoast/js/iziToast.min.js') }}""></script>
    <!-- Page Specific JS File -->
    <script src="{{ url('otika/assets/js/page/toastr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "scrollX": false,
            });
        });
    </script>

    @section('js')
    @show
    @stack('after-script')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
