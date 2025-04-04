<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'specialty',
        'clinic_address',
        'city',
        'price',
        'phone',
        'experience_years',
        'image',
        'rating',
    ];

    /**
     * Get the doctor that owns these details.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    // In Doctor model
public function doctorDetail()
{
    return $this->hasOne(DoctorDetail::class);
}

}