<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'year',
        'comments'
    ];

    public function scopeModern($query)
    {
        return $query->where('year', '>=', 1900);
    }
}
