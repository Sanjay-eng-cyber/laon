<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function cities()
    {
        return $this->belongsToMany(City::class, 'service_city');
    }
}
