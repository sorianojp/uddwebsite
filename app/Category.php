<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
