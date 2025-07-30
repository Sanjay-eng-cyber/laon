<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
