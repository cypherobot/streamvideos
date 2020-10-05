<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category', 'is_active',
    ];


    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
