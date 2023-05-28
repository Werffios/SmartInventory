<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Asset extends Model
{
    // protected $guarded = ['id', 'placa', 'department_id', 'location_id'];
    protected $fillable = ['placa', 'maintenance', 'maintenance_frequency', 'category_id', 'department_id', 'location_id', 'model_id', 'status_id'];
    use HasFactory;

    // Function to filter by department
    public function scopeDepartment($query, $department_id)
    {
        if ($department_id) {
            return $query->where('department_id', $department_id);
        }
    }
    //Relation to Category, one to many
    function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    //Relation to Department, one to many
    function department() : BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    //Relation to Location, one to many
    function location() : BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    //Relation to Model, one to many
    function model() : BelongsTo
    {
        return $this->belongsTo(Model_Asset::class);
    }
    //Relation to Status, one to many
    function status() : BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
    //Relation to Assigment_History, one to many
    function assigment_history() : HasMany
    {
        return $this->hasMany(Assigment_History::class);
    }
    //Relation to Loan, one to many
    function loan() : HasMany
    {
        return $this->hasMany(Loan::class);
    }
    //Relation to Maintenance_History, one to many
    function maintenance_history() : HasMany
    {
        return $this->hasMany(Maintenance_History::class);
    }
    //Relation to Mobility_History, one to many
    function mobility_history() : HasMany
    {
        return $this->hasMany(Mobility_History::class);
    }
    //Relation to Responsible, one to one
    public function responsible() : HasOne
    {
        return $this->hasOne(Responsible::class);
    }
}
