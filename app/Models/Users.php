<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends model
{
    protected $table = 'users';
    protected $fillable = ['username', 'password'];
}