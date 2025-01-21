<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'user_name',
        'password',
        'dob',
        'address',
        'phone_number',
        'email',
        'role',
        'image',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function setPasswordAttribute($password)
    {
        if ($password) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'teacher_id');
    }

    protected function isAdmin(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->role === 'admin' && $this->status === 1
        );
    }

    protected function isUser(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->role === 'user' && $this->status === 1,
        );
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/images/' . $this->image) : 'https://via.placeholder.com/50';
    }
}
