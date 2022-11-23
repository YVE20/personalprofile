<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$title}} </title>
    @include('includes.head')
</head>
<body>
    @include('includes.navbarAdmin')
    @yield('content')
 
    <script type="text/javascript" src="{{asset('/js/font-awesome.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery-3.6.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.tiny.cloud/1/drzndcs7x99r8cewem7nspuqoj8oakvdc6b38dmtrikywtub/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @stack('js')
    
</body>
</html>