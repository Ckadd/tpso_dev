<!DOCTYPE html>
<html>
<head>
    @include('layouts.inc-header')
    @stack('css')
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>TPSO|สำนักงานนโยบายและยุทธศาสตร์การค้า</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container-fluid">
        @if(!empty($pages['slug']))
            @if($pages['slug'] == "intro-pages")
                @yield('content')
            @else
                @include('layouts.inc-menu')
                @yield('content')
                @include('layouts.inc-footer')
            @endif
        @else
            @include('layouts.inc-menu')
            @yield('content')
            @include('layouts.inc-footer')
        @endif

    </div>
    @stack('scripts')

</body>
</html>
