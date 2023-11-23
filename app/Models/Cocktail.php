<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    // utilizzo $casts per dire che la chiave ingredients è un array

    protected $casts = [

        'ingredients' => 'array',
    ];

    protected $fillable = [
        'name', 'type', 'alcoholic', 'glass', 'instructions', 'drinkThumb', 'ingredients'
    ];
}
