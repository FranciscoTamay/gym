<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrenadorModel extends Model
{
    use HasFactory;
    protected $table = 'entrenadores'; // Nombre de la tabla en la base de datos
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'direccion',
        'estado',

    ]; // Campos que se pueden asignar masivamente
    
}
