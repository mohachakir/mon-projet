<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ Route('posts.index') }}" >Home</a></li>
        <li><a href="{{ Route('posts.create') }}" >Add Post</a></li>
        <li><a href="" >Posts</a></li>
    </ul>
    @yield('content')
</body>
</html>