<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Model_Asset extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to Asset, one to many
    function assets() : HasMany
    {
        return $this->hasMany(Asset::class);
    }
    //Relation to Brand, one to many
    function brand() : BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
