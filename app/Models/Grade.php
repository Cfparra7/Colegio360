<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    // Especifica el nombre de la tabla si no sigue la convención plural
    protected $table = 'grade';
    protected $primaryKey = 'idGrade';
    public $timestamps = false;

    protected $fillable = [
        'idStudent',
        'idAssignment',
        'grade',
        'recordDate'
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
