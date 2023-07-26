<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    // protected $casts = [
    //     'created_at' => 'datetime:d/m/Y H:i:s',
    //     'updated_at' => 'datetime:d/m/Y H:i:s',
    // ];

    protected $fillable = [
        'title',
        'description',
        'link',
        'image',
    ];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y h:i:s');
    }
}