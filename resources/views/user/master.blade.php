<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Trường Mầm Non Cô Tiên Xanh</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('/public/favicon.ico')}}" type="image/x-icon" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('user.layout.css')
   </head>

   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div class="boxed">
        <div id="preloader">
            <div class="preloader">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div>
        </div>
        @include('user.layout.header')
        <main>
            @yield('content')
        </main>
        @include('user.layout.footer')
    </div>
    </body>
    @include('user.layout.script')
</html>
