<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Doctor extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'doctor';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }


class Doctor extends Model
{
    //
}
