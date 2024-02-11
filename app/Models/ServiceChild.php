<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceChild extends Model
{
    use HasFactory;

    protected $fillable = [
        'id' , 'service_id' , 'name'
    ];
}
