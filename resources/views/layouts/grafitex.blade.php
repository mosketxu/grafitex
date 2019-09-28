<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Aplicación desarrollada por Grafitex">
        <link rel="icon" href="{{ asset('favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        <!-- Bootstrap core CSS v4.3.1 and local-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css"> <!-- FontAwesome -->
        <!-- Custom styles for this template-->
        <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">    <!-- Menu lateral-->

          <!-- select2 -->
          <link href="{{asset('css/select2.css')}}" rel="stylesheet" /> 

        

        {{-- Custom Styles for this app --}}
        <link href="{{ asset('css/grafitex.css') }}" rel="stylesheet">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

    </head>

    <body id="page-top">
        <header id="header">
            @include('partials._topmenu')
        </header>
        <div id="app">
            @include('partials._sidebar')
            @yield('content')
        </div>

        {{-- Scripts --}}
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- scripts for sidebar-->
        <script  type="text/javascript" src="{{asset('/js/sb-admin.js')}}"></script>

        <!-- scripts for selector-->
        <script  type="text/javascript" src="{{asset('/js/select2.js')}}"></script>
        

        @yield('scriptsextra')
        @stack('scriptchosen')

    </body>
</html>
