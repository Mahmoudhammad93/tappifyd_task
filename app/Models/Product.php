<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends = [
        'name',
        'description',
        'in_wishlist',
    ];

    protected $guarded = [];

    public function getNameAttribute()
    {
        if (Lang() == "ar") {
            return $this->name_ar;
        }
        return $this->name_en;
    }

    public function getDescriptionAttribute()
    {
        if (Lang() == "ar") {
            return $this->description_ar;
        }
        return $this->description_en;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images()
    {
        return $this->morphMany(Media::class, 'mediaable');
    }

    public function image()
    {
        return $this->morphOne(Media::class, 'mediaable');
    }

}
