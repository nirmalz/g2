<!doctype html>

<html>

<head>
    <title>Sample site</title>
    <style>
        header {
            margin-bottom : 30px;
        }
        
        footer{
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <header>
            <a href="{{ url('home') }}">Home</a>
            <a href="{{ url('contact') }}">Contact</a>
            <a href="{{ url('faq') }}">FAQ</a>
    </header>


    @yield('content')

    <footer>
        Footer text
    </footer>

</body>

</html>