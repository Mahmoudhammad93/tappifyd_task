<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['name','address','keywords','description','about','terms','privacy'];

    public function getNameAttribute()
    {
        if (Lang() == "ar") {
            return $this->name_ar;
        }
        return $this->name_en;
    }

    public function getAddressAttribute()
    {
        if (Lang() == "ar") {
            return $this->address_ar;
        }
        return $this->address_en;
    }

    public function getKeywordsAttribute()
    {
        if (Lang() == "ar") {
            return $this->keywords_ar;
        }
        return $this->keywords_en;
    }

    public function getDescriptionAttribute()
    {
        if (Lang() == "ar") {
            return $this->description_ar;
        }
        return $this->description_en;
    }

    public function getAboutAttribute()
    {
        if (Lang() == "ar") {
            return $this->about_ar;
        }
        return $this->about_en;
    }

    public function getTermsAttribute()
    {
        if (Lang() == "ar") {
            return $this->terms_ar;
        }
        return $this->terms_en;
    }

    public function getPrivacyAttribute()
    {
        if (Lang() == "ar") {
            return $this->privacy_ar;
        }
        return $this->privacy_en;
    }
}
