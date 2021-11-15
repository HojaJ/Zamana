<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table="abouts";
    protected $fillable=['title_tk','title_ru','title_en','content_tk','content_ru','content_en', 'image'];
}
