<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'slug',
        'image',
        'description',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/prestasis/' . $value),
        );
        // use Illuminate\Database\Eloquent\Casts\Attribute;
    }
}
