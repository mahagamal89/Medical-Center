<?php

namespace App\Models;

use App\Models\MedicalCenter;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'mobile_number',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
