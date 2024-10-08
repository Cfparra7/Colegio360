<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $primaryKey = 'idRole';
    protected  $fillable = [
        'roleName'
    ];
    public function user()
    {
        return $this->hasMany(User::class, 'idRole');
    }
}
