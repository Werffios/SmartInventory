<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Assigment_History extends Model
{
    protected $guarded = ['id', 'asset_id', 'user_id', 'department_id', 'location_id', 'date'];

    use HasFactory;

    //Relation to Asset, one to many
    function asset() : BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }
    //Relation to Status, one to many
    function status() : BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
    //Relation to Location, one to many
    function location() : BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    //Relation to User, one to many
    function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
