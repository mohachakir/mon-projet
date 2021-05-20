@extends('header')

@section('content')

<form method="POST" action="{{ Route('posts.store') }}">
 @csrf
    <div class="form-group">
        <layout>Title : </layout>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        <layout> Content</layout >
        <input   class="form-control" type="text" name="content"  value="{{ old('content') }}">
    </div>
    <div>
        <input class="btn btn-success" type="submit" value="Add post">
    </div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        
    </ul>
</form>  

@endsection