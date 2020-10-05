<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'category_id', 'title', 'description', 'thumbnail_image', 'video',
        'duration', 'total_views', 'total_likes', 'total_downloads', 
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
