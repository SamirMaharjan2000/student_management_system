<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $fillable = array('full_name',
    'gender',
    'email',
    'father_name',
    'mother_name',
    'dob',
    'edu',
    'number',
    'country',
    'perm_address',
    'current_addres');
}
