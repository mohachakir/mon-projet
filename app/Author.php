<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
   public function profil(){

    return $this->hasOne('\app\Profil');
   }
}
