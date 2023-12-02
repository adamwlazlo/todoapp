<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>
{{--    <link rel="stylesheet" href="{{ asset(('css/style.css')) }}">--}}
{{--    <script src="{{ asset('js/script.js') }}"></script>--}}

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>

<nav>
    <a href="{{route("home.index")}}">HOME</a>
    <a href="{{route("todoapp.index")}}">TODO</a>
    <a href="{{route("todoapp.settings")}}">SETTINGS</a>
    <a href="{{route("blog.index")}}">BLOG</a>
    <a href="{{route("contact.index")}}">CONTACT</a>
</nav>

<main>
    @yield("content")
</main>

</body>
</html>
