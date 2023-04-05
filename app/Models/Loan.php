<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loan extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    function asset() : BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    //Relation to Person, one to many
    function person() : BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    //Relation to Notification_Loan_History, one to many
    function notification_loan() : HasMany
    {
        return $this->hasMany(Notification_Loan::class);
    }
}
