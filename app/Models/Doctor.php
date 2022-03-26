<?php

namespace App\Models;

use App\Models\MedicalCenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
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
        // creating, updating and deleting a doctor.
        'name',
        'email',
        'specialist',
        'mobile_number',
    ];

    /**
     * Setup the relationship to the medical center.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicalCenter()
    {
        return $this->belongsTo(MedicalCenter::class);
    }
}
