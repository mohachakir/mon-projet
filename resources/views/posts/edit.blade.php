@extends('header')

@section('content')

<form method="POST" action="{{ Route('posts.update',['post'=>$post->id]) }}">
 @csrf
 @method('PUT')
    <div class="form form-group">
        <layout>Title : </layout>
        <input  class="form form-control" type="text" name="title" value="{{ old('title',$post->title) }}">
        <layout> Content</layout>
        <input  class="form form-control" type="text" name="content"  value="{{ old('content',$post->content) }}">
    </div>
    <div>
        <input  class="btn btn-success" type="submit" value="Add post">
    </div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        
    </ul>
</form>  

@endsection