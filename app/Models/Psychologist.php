<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychologist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'email',
        'title',
        'info',
        'education',
        'topic',
        'about',
        'country_code'
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
