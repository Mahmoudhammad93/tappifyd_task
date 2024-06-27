<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'password',
        'remember_token',
        'deleted_at',
        'created_at',
        'updated_at',
        'user_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function details(){
        return $this->hasOne(UserDetail::class ,'user_id');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function cartItems(){
        return $this->hasMany(CartProduct::class);
    }

    public function getImageAttribute($image){
        return asset('storage/'.$image);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function items(){
        return $this->belongsTo(OrderProduct::class);
    }

    public function products(){
        return $this->belongsTo(OrderProduct::class);
    }
}
