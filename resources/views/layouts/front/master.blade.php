<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>NewsBit - News Magazine Newspaper HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-name" content="newsbit" />
    @include('layouts.front.css')
</head>
<body>
    @include('layouts.front.nav')
    <div class="py-30"></div>
    @yield('content')
    <div class="py-40"></div>
    @include('layouts.front.footer')
    @include('layouts.front.js')
</body>
</html>
