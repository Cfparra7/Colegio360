<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procreator extends Model
{
    use HasFactory;
    protected $table = 'procreator';
    protected $primaryKey = 'idProcreator';
    protected $fillable = [
        'idUser',
        'phone'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
