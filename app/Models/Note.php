<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    // Especifica el nombre de la tabla si no sigue la convención plural
    protected $table = 'Note';
    protected $primaryKey = 'IdNota';
    public $timestamps = false;

    protected $fillable = [
        'IdStudent',
        'IdAssignment',
        'Note',
        'FechaRegistro'
    ];

    // Relación con el modelo estudiante
    public function student()
    {
        return $this->belongsTo(Student::class, 'IdStudent');
    }

    // Relación con el modelo de materias
    public function subject()
    {
        return $this->belongsTo(SubjectAssignment::class, 'IdAssignment');
    }

}
