<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_news extends Model
{
     public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
}
