<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table="partners";
    protected $fillable=['title_tk','title_ru','title_en','testimonial_tk','testimonial_ru','testimonial_en', 'image'];
}
