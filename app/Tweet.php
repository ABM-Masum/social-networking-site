<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

	protected $guarded = [];

    // public function remove()
    // {
        
    // }

    public function user() 
    {
    	return $this->belongsTo(User::class);
    }

    public function getFileAttribute($value)
    {
    	return asset($value);
    }

    public function path($append = '')
    {
        $path = route('profile', $this->id);

        return $append ? "{$path}/{$append}" : $path;
    }
}