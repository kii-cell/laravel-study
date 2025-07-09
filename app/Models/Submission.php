<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = ['name','age','email','password','user_id',];
    
    public function user()
{
    return $this->belongsTo(User::class);
}
}
