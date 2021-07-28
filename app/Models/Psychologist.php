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
}
