<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user',
        'comment',
    ];

    public function getComments(){
        return $this->orderBy('created_at')->paginate(5);
    }
}
