<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = array(
        'title',
        'content',
        'user_id'
    );


    public function user(){

        return $this->belongsTo('App\User');

    }

}
