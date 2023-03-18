<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.partials._header')

<body>
    <div id="app">
        @include('layouts.partials._navigation')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>