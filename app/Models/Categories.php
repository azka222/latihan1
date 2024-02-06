<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['nameCategory'];
    use HasFactory;

    public function car(){
        return $this->hasMany(Cars::class);
    }
}
