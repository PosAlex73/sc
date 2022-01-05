<!doctype html>
<html lang="en">
@include('static.meta')
<body>
@include('static.header')
<main style="margin-left: 280px;">
    @include('static.admin_side')
    <div class="p-3">
        @yield('content')
    </div>
</main>
@include('static.footer')
</body>
@include('static.scripts')
</html>
