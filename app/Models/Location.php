<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to Asset, one to many
    function assets() : HasMany
    {
        return $this->hasMany(Asset::class);
    }
    //Relation to Assigment_History, one to many
    function assigment_histories() : HasMany
    {
        return $this->hasMany(Assigment_History::class);
    }
}
