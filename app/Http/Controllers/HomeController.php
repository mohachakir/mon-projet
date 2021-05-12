<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($id,$nom){

        $posts=[
            1=>[ "title"=>"learn laravel 7"],
            2=>[ "title"=>"learn angular"]
           ];
           return view('posts.show',['data'=>$posts[$id],'nom'=>$nom]);
    }
}
