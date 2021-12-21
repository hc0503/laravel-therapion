<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * Prices of service, has every currency
     */
    public function prices() {
        return $this->hasMany(Price::class);
    }
}
