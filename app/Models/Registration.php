<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'Registration';
    protected $primaryKey = 'IdRegistration';

    public $timestamps = false;

    protected $fillable = [
        'IdStudent',
        'IdCourse',
        'FechaMatricula'
    ];

    // Relación con el modelo de Estudiantes
    public function student()
    {
        return $this->belongsTo(Student::class, 'IdStudent');
    }

    // Relación con el modelo de los cursos
    public function course()
    {
        return $this->belongsTo(Course::class, 'IdCourse');
    }
}
