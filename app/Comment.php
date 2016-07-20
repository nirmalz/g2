<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = array(
        'comment',
        'article_id',
        'user_id'
    );
}
