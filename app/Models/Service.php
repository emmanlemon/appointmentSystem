<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['id','name' , 'description' , 'prescription' , 'image'];

    // public function users(){
    //     return $this->belongsToMany(User::class , 'users','id', 'user_id');
    //  }
    public function children()
{
    return $this->hasMany(ServiceChild::class, 'service_id');
}
}
