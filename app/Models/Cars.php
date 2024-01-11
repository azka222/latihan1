<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cars extends Model
{
    use HasFactory;
    protected $fillable =[ 'carBrand', 'carModel', 'slug', 'carInformation', 'image', 'category_id'];

    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
