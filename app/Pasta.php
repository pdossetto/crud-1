<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    // Deve proprio chiamarsi Fillable
    protected $fillable = ['title', 'description', 'type', 'image', 'cooking_time', 'weight'];
}
