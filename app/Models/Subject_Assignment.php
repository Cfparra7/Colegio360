<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject_Assignment extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención plural
    protected $table = 'subject_assignment';

    protected $primaryKey = 'idAssignment';

    public $timestamps = false;

    protected $fillable = [
        'idSubject',
        'idCourse',
        'idTeacher'
    ];

    // Relación con el modelo de Materias
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'idSubject');
    }

    // Relación con el modelo de cursos
    public function course()
    {
        return $this->belongsTo(Course::class, 'idCourse');
    }

    // Relación con el modelo de profesores
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'idTeacher');
    }
}
