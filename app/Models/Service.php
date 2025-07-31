<?php

namespace App\Models;

use App\Models\City;
use App\Models\Post;
use App\Models\Inquiry;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function cities()
    {
        return $this->belongsToMany(City::class, 'service_city');
    }

    public function inquiries()
    {
        return $this->hasMany(Inquiry::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
