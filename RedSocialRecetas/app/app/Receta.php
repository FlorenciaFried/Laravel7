<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'titulo', 'ingredientes', 'preparacion', 'imagen',
    ];
}
