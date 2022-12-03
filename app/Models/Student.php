<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'student_name_aadhaar',
        'student_name_school',
        'father_name',
        'mother_name',
        'school_name',
        'class',
        'student_type',
        'academic_year',
        'grn_number',
        'saral_id',
        'aadhaar_number',
        'contact_number',
        'gender',
        'birthdate',
        'caste',
        'sub_caste',
        'co',
        'building_number',
        'building_name',
        'street_number',
        'street_name',
        'landmark',
        'village_towncity',
        'state',
        'district',
        'taluka',
        'pincode',
        'locality',
        'beneficiary_number',
        'account_holder_name',
        'ifsc_code',
        'micr_number',
        'bank_name',
        'branch_name',
        'account_number',
        'is_mobile_verified',
        'is_aadhaar_verified',
        'is_active',
        'is_deleted',
        'cleark_status',
        'principal_status',
        'po_status',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
