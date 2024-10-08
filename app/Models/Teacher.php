<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teacher';
    protected $primaryKey = 'idTeacher';
    protected $fillable = [
        'idUser',
        'professionalTitle'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
