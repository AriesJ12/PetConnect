<?php

namespace App\Models;

use App\Models\Breed;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use CrudTrait,RevisionableTrait;
    use HasFactory;

    protected $dontKeepRevisionOf = ['photo'];
    protected $table = 'pets';
    protected $guarded = [
        'id'
    ];

    protected $revisionCreationsEnabled = true;
    protected $revisionForceDeleteEnabled = true;

    public function breed(): BelongsTo
    {
        return $this->belongsTo(Breed::class, 'breed_id');
    }
}
