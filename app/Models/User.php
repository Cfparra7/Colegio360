<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'idUser';
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'IdRole'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'IdRole');
    }
    public function Student()
    {
        return $this->hasOne(Student::class, 'IdUser');
    }
}
