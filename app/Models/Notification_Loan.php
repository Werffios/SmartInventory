<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Notification_Loan extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to Loan, one to many
    function loan() : BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }
    //Relation to Status, one to many
    function status() : BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
