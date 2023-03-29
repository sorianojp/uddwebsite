<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'title', 'content', 'image', 'user_id', 'featured'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
