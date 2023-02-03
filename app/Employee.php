<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['nip', 'full_name', 'email', 'birth', 'phone', 'address', 'salary'];
}

