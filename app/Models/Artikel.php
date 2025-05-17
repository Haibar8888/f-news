<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'body',
        'slug',
        'is_published',
        'published_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
