<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable=['content','title','slug','active'];

   public function comment(){

      return $this->hasMany('\App\Comment');
  }
}
