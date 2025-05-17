<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Artikel;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * Get the user associated with the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(Artikel::class);
    }
}
