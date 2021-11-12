<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disco extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'artist' , 'year' , 'user_id'];
    

    public function dono(){

        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
