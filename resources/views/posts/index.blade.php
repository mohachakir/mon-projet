@extends('header')
@section('content')
   
   @if(Session()->has('statut'))
     <h3 style="color-text:green">{{ Session()->get('statut') }}</h3>
     @endif
     <ul class="list-group">
    @forelse($posts as $post)
      
           <li class="list-group-item"><a href="{{ Route('posts.show',['post'=>$post->id]) }}"><h1>{{ $post->title }}</h1></a></li>
           <li  class="list-group-item"> <p>{{ $post->content }}</p>
         </li class="list-group-item"><a class="btn btn-success" href="{{ route('posts.edit',['post'=>$post->id]) }}">Edit </a>

       
       <form style="display: inline" method="POST" action="{{ Route('posts.destroy',['post'=>$post->id]) }}">
         @csrf
         @method('DELETE')
            <div>
                <input class="btn btn-danger" type="submit" value="Delete">
            </div>

        </form> 
    @empty    
      <span class="padge padge-danger"> No one post in table</span>

    @endforelse
   </ul>
@endsection