<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'mediaable_type',
        'mediaable_id',
        'created_at',
        'updated_at',
        'type',
    ];

    public function mediaable()
    {
        return $this->morphTo();
    }
}
