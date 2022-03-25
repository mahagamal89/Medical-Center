<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicalCenter extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        // Added the below attributes because we don't have a form now for
        // creating, updating and deleting a medical center.
        'name',
        'address',
    ];

    /**
     * Setup the relationship to the doctors.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
