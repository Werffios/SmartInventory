<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
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
    //Relation to Maintenance_History, one to many
    function maintenance_histories() : HasMany
    {
        return $this->hasMany(Maintenance_History::class);
    }
    //Relation to Mobility_History, one to many
    function mobility_histories() : HasMany
    {
        return $this->hasMany(Mobility_History::class);
    }
    //Relation to Notification_Loan_History, one to many
    function notification_loan() : HasMany
    {
        return $this->hasMany(Notification_Loan::class);
    }
}
