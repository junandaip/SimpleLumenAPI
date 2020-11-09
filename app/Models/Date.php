<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Date extends model
{
    protected $table = 'realdate';
    protected $fillable = ['timezone_type', 'timezone'];
}