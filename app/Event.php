<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = ['title', 'user_id', 'description', 'start', 'end'];
}
