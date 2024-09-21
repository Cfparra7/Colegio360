<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $primaryKey = 'IdTeacher';
    protected $fillable = [
        'IdUser',
        'TituloProfesional'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'IdUser');
    }
}
