@extends('header')
@section('content')
   
   @if(Session()->has('statut'))
     <h3 style="color-text:green">{{ Session()->get('statut') }}</h3>
     @endif
    @forelse($posts as $post)
       <ul>
           <li><a href="{{ Route('posts.show',['post'=>$post->id]) }}"><h1>{{ $post->title }}</h1></a></li>
           <li> <p>{{ $post->content }}</p></li>
       </ul>
    @empty    
       No one post in table

    @endforelse
@endsection