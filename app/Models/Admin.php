<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  //  Import this
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable

{
    use Notifiable ,HasRoles;
    protected $table = 'admins';

    protected $fillable = [
            'name',
            'email',
            'password',
            'role'
        ];

     protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

}
