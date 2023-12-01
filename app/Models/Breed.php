<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    public function pets()
    {
        return $this->hasMany('App\Models\Pet', 'breed_id');
    }
}
