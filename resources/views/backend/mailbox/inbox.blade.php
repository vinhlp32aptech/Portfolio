<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('title')
<!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }} ">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
@include('partials.header')
<!-- /.navbar -->


    <!-- Main Sidebar Container -->
@include('partials.siderbar')
<!-- Content Wrapper. Contains page content -->


    <div class="container">
        <h2>Email is sent to</h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Id email</th>
                <th>Email</th>
                <th>Date and Time</th>
                <th>Message</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                <td>july@example.com</td>
            </tr>
            </tbody>
        </table>
    </div>


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>





