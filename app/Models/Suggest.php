<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    use HasFactory;
    protected $table="suggests";
    protected $fillable=['title_tk','title_ru','title_en','content_tk','content_ru','content_en', 'image'];
}
