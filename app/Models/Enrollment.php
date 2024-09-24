<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollment';
    protected $primaryKey = 'idEnrollment';

    public $timestamps = false;

    protected $fillable = [
        'idStudent',
        'idCourse',
        'enrollmentDate'
    ];
    // Relación con el modelo de Estudiantes
    public function student()
    {
        return $this->belongsTo(Student::class, 'idStudent');
    }


    // Relación con el modelo de los cursos
    public function course()
    {
        return $this->belongsTo(Course::class, 'idCourse');
    }
}
