<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'banner';
    public $timestamps = false;

    protected $fillable = [
        'title' , 'infor' , 'description' , 'link' , 'link_image'
    ];
}
