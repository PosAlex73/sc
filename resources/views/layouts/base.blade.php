<!doctype html>
<html lang="en">
@include('static.meta')
<body>
@include('static.header')
<main>
    @include('static.admin_side')
    @yield('content')
</main>
@include('static.footer')
</body>
@include('static.scripts')
</html>
