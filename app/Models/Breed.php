<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Breed extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'breeds';
    protected $fillable = [
        'name',
        'type_id',
    ];

    public function pets()
    {
        return $this->hasMany('App\Models\Pet', 'breed_id');
    }

    public function pet_type()
    {
        return $this->belongsTo('App\Models\PetType', 'type_id');
    }

    public function getTypeWithNameAttribute()
    {
        return $this->type . ' - ' . $this->name;
    }

    
}
