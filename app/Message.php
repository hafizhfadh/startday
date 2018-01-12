<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['email', 'message', 'created_at'];
    protected $table = 'messages';
}
