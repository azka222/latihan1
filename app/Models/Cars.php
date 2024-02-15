<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cars extends Model
{
    use HasFactory;
    protected $fillable =[ 'carBrand', 'carModel', 'slug', 'carInformation', 'image', 'category_id', 'user_id'];

    public function category(){
        return $this->belongsTo(Categories::class, 'categories_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
