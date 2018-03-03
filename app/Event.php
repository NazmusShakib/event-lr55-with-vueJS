<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = ['id', 'title', 'updated_by', 'description', 'start', 'end'];

    public function getCreatedAtAttribute($value)
    {
        $carbonDate = new Carbon($value);
        return $carbonDate->diffForHumans();
    }

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

    public function user()
    {
        return $this->belongsTo('App\User', 'updated_by', 'id');
    }
}
