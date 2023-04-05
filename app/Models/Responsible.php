<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Responsible extends Model
{
    protected $guarded = ['id', 'start_date', 'end_date', 'id_asset', 'id_person'];

    use HasFactory;

    // Relation to Asset, one-to-one
    public function asset() : BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }
    // Relation to Person, one-to-Many
    public function person() : BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
