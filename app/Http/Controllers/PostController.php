<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePost;

use Illuminate\Http\Request;
use \App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('posts.index',['posts'=>Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
      
       $data= $request->only(['title','content']);
       $data['slug']="default-slug";
       $data['active']=false;
       $post=Post::create($data);

       $post->save();
       $request->session()->flash('statut','post is add with succes');
       return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show',['post'=>Post::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrfail($id);
        return view('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        $post=Post::findOrfail($id);
        $post->title=$request->input('title');
        $post->content=$request->input('content');
        $post->active=true;
        $request->session()->flash('statut','post was updated');
        $post->save();

        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       \App\Post::destroy($id);

       $request->session()->flash('statut','post was deleted');
       return redirect()->route('posts.index');
    }
}
