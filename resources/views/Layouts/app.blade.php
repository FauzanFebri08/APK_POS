<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('tittle')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container">
        @if(session('succes'))
        <div class="alert alert-succes">
            {{ session('succses') }}
        </div>
        @endif
        
        @yield('content')
</body>
</html>