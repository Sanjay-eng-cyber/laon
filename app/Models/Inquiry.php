<?php

namespace App\Models;

use App\Models\City;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
