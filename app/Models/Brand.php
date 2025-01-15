<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Brand extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug'
    ];
}
