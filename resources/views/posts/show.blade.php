@extends('header')
@section('content')

<ul>
    <li><h1>{{ $post->title }}</h1></li>
    <li> <p>{{ $post->content }}</p></li>
</ul>

@endsection