<!doctype html>
<html lang="en">
@include('static.meta')
<body>
@include('static.header')
<main>
    @include('static.admin_side')
    <div style="margin-left: 280px;" class="p-3">
        @yield('content')
    </div>
</main>
@include('static.footer')
</body>
@include('static.scripts')
</html>
