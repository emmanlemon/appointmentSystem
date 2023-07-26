<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
    
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y h:i:s');
    }
}
