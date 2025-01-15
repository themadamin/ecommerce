<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'parent_id',
        'name',
    ];
}
