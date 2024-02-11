<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_number',
        'full_name',
        'gender',
        'age',
        'address',
        'marital_status',
        'date_of_birth',
        'contact_number',
        'email',
        'date',
        'time',
        'concern',
        'user_id',
        'doctor_id'
    ];

    public function getCreatedAtAttribute($date)
    {
        return $this->attributes['date'] = Carbon::parse($date)->format('d/m/Y');
        return $this->attributes['time'] = Carbon::parse($date)->format('h:i:s');
        // return Carbon::parse($date)->format('d/m/Y h:i:s');
    }
}
