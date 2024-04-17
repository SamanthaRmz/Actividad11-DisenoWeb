<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts'; // Nombre de la tabla en la base de datos
    protected $fillable = ['name', 'email']; // Campos que se pueden asignar de forma masiva
}
