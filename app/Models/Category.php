<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";
    protected $fillable=['name_tk','name_ru','name_en','slug'];

    public function products() {
        return $this->hasMany(Product::class);
    }
}