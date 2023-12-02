<?php

namespace App\Models;

use App\Models\Breed;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PetType extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'pet_types';
    protected $fillable = [
        'name',
    ];

    public function breed(): HasMany
    {
        return $this->hasMany(Breed::class, 'type_id');
    }
}
