<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'title', 'updated_by', 'description', 'start', 'end'];


    public static function boot() {
        parent::boot();
        // Before creating
        static::creating(function ($post) {
            //$post->id = Uuid::uuid4()->toString();
            $post->updated_by = Auth::check() ? Auth::user()->id : null;
        });
        // Before updating
        static::updating(function ($post) {
            $post->updated_by = Auth::check() ? Auth::user()->id : null;;
        });
    }
}
