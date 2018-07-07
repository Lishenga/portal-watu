<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>@yield('title')</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css') }}">

        <!-- Switchery css -->
        <link href="{{ asset('admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{ asset('admin/assets/css/reset.css') }}" rel="stylesheet" type="text/css" />

        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        @yield('styles')

        <!-- Modernizr js -->
        <script src="{{ asset('admin/assets/js/modernizr.min.js') }}"></script>





    </head>


    <body>

    <script type='text/javascript' data-cfasync='false'>

    window.purechatApi = { l: [], t: [], on: 

    function () { this.l.push(arguments); } }; 

    (function () { var done = false; 

    var script = document.createElement('script'); 

    script.async = true; script.type = 'text/javascript'; 

    script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; 

    document.getElementsByTagName('HEAD').item(0).appendChild(script); 

    script.onreadystatechange = script.onload = 

    function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete'))

    { var w = new PCWidget({c: '8bc92850-4b38-452c-9460-12c25f8a3842', f: true }); done = true; } }; })();
    
    </script>
