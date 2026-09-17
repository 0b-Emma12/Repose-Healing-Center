<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'preferred_date',
        'contact_method',
        'message',
    ];
}
