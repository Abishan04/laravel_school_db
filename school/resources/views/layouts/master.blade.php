<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    @include('partials.header')
    
      
    @yield('content')
    @include('partials.footer')

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <script type="text/javascript" src="{{ asset('js/index.bundle.js') }}"></script>
    @yield('scripts')
</body>

</html>