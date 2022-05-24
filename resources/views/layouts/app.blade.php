<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include ('partials/header')
    </header>

          
        @include ('partials/jumbo')
        @yield('content')
        @yield('detail')
    
    
    <footer>
        @include('partials/footer')
    </footer>
</body>
</html>