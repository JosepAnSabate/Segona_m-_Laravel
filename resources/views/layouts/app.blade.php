
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
<link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div id="app">
        @include('layouts._nav')
        <main class="container py-4">
            @yield('content')
        </main>
        </div>

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