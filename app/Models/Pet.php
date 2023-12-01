<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use CrudTrait;
    use HasFactory;

    public function breed()
    {
        return $this->belongsTo('App\Models\Breed', 'breed_id');
    }
    
}
