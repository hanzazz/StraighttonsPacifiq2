<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $fillable = ['title','content','path_pic'];

    protected $table ='article';
}
