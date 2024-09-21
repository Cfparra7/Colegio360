<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectAssignment extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si no sigue la convención plural
    protected $table = 'SubjectAssignment';

    protected $primaryKey = 'IdSubjectAssignment';

    public $timestamps = false;

    protected $fillable = [
        'IdSubject',
        'IdCourse',
        'IdTeacher'
    ];

    // Relación con el modelo de Materias
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'IdSubject');
    }

    // Relación con el modelo de cursos
    public function course()
    {
        return $this->belongsTo(Course::class, 'IdCourse');
    }

    // Relación con el modelo de profesores
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'IdTeacher');
    }
}
