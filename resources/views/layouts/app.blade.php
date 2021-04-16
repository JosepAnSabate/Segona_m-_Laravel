
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    
</head>
<body>
@if(session('access.denied.revisor.only'))
    <div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
@endif
    <div id="app">
        @include('layouts._nav')
        
        <main class="my-2">
            @yield('content')
        </main>
        @include('layouts._footer')
 <script>
        const logout = document.getElementById('logoutBtn');
        if (logout) {
            logout.addEventListener('click', (e) => {
                e.preventDefault();
                const form = document.getElementById('logoutForm').submit();
            });
        }
    </script>
        <!-- Scripts -->
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>