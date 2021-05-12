@extends('header')

@section('content')

<form method="POST" action="{{ Route('posts.store') }}">
 @csrf
    <div>
        <layout>Title : </layout>
        <input type="text" name="title">
        <layout> Content</layout >
        <input type="text" name="content">
    </div>
    <div>
        <input type="submit" value="Add post">
    </div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        
    </ul>
</form>  

@endsection