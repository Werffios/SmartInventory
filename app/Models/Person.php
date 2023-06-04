<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Person extends Model
{
    protected $fillable = ['name', 'last_name', 'document', 'user_id'];

    use HasFactory;

    // Relation to User, one-to-one inverse
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // Relation to Loan, one-to-Many
    public function loan() : HasMany
    {
        return $this->hasMany(Loan::class);
    }
    // Relation to Responsible, one-to-Many
    public function responsible() : HasMany
    {
        return $this->hasMany(Responsible::class);
    }
}
