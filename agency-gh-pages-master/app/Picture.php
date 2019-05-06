<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['path','gallery_id'];

    protected $table ='Picture';
}
