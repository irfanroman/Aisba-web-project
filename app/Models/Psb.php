<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Psb extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'file',
        'image',
        'description'
    ];


    protected function file(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/psbs/' . $value),
        );
        // use Illuminate\Database\Eloquent\Casts\Attribute;
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/psbs/' . $value),
        );
        // use Illuminate\Database\Eloquent\Casts\Attribute;
    }
}
