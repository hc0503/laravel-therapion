<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'psychologist_id',
        'service_id',
        'ip',
        'name',
        'email',
        'town',
        'service_provider',
        'username',
        'phone',
        'suggest_time',
        'message'
    ];
}
