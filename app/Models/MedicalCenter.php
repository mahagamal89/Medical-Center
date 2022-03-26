<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
