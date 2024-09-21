<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procreator extends Model
{
    use HasFactory;
    protected $table = 'Procreator';
    protected $primaryKey = 'IdProcreator';
    protected $fillable = [
        'IdUser',
        'Telefono'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'IdUser');
    }
}
