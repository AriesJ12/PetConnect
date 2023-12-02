<?php

namespace App\Models;

use App\Models\Pet;
use App\Models\PetType;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Breed extends Model
{
    use CrudTrait,RevisionableTrait;
    use HasFactory;

    protected $table = 'breeds';
    protected $fillable = [
        'name',
        'type_id',
    ];

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class, 'breed_id');
    }

    public function pet_type(): BelongsTo
    {
    return $this->belongsTo(PetType::class, 'type_id');
    }

    public function getTypeWithNameAttribute()
    {
        return $this->type . ' - ' . $this->name;
    }
}
