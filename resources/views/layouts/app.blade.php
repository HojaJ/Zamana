<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zamana') }}</title>

{{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">--}}

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('layouts.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Zamana 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Çykmaga taýynmy?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">"Çyk" knopkany saýla egerde çykmak isleseňiz</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Gal</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Çyk</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->

<script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/js/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.js') }}"></script>
@stack('scripts')
</body>

</html>