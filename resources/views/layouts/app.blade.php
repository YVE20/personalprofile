<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$title}} </title>
    @include('includes.head')
    @stack('head-script')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    @include('includes.header')
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')

    
    <script src="<?= asset('vendors/jquery/jquery-3.4.1.js') ?>"></script>
    <script src="<?= asset('vendors/bootstrap/bootstrap.bundle.js') ?>"></script>
    <script src="<?= asset('vendors/bootstrap/bootstrap.affix.js') ?>"></script>
    <script src="<?= asset('vendors/isotope/isotope.pkgd.js') ?>"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>
    <script src="<?= asset('js/johndoe.js') ?>"></script>
    @stack('js')
</body>
</html>