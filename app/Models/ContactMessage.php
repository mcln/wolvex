<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    // Especifica los campos que se pueden asignar de manera masiva
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje',
    ];
}