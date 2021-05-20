<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/theme.css') }}" />
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ Route('posts.index') }}">home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('posts.create') }}">add Post</a>
            </li  class="nav-item">
            <li><a class="nav-link" href="" >Posts</a></li>
        </ul>
    </nav>
 
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ mix('/js/app.js') }}" />
</body>
</html>