<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'Role';
    protected $primaryKey = 'IdRole';
    protected  $fillable = [
        'NombreRol'
    ];
    public function user()
    {
        return $this->hasMany(User::class, 'IdRole');
    }
}
