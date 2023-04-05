<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    function model_assets() : HasMany
    {
        return $this->hasMany(Model_Asset::class);
    }
}
