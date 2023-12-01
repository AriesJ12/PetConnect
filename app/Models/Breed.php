<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Breed extends Model
{
    use CrudTrait;
    use HasFactory;

    public function pets()
    {
        return $this->hasMany('App\Models\Pet', 'breed_id');
    }

    public function getTypeWithNameAttribute()
    {
        return $this->type . ' - ' . $this->name;
    }
}
