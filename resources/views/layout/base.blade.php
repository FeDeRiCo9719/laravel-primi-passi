<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title') | Official Website</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}">About Us</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Contact Us</a>
            </li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>