<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', setting('title'))</title>
    <!-- Styles -->
    <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet">
    <meta name="keywords" content="@yield('keywords',setting('keywords'))"/>
    <meta name="description" content="@yield('description',setting('description'))"/>
    @stack('styles')
</head>
<body>
<div id="app" class="{{route_class()}}-page">
    @include('layouts._header')
    @yield('content')
    @include('layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ mix('assets/js/app.js') }}"></script>
<script>
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>

@stack('scripts')

</body>
</html>
