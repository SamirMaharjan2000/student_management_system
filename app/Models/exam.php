<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    public $fillable = array('full_name',
    'email',
    'father_name',
    'dob',
    'edu',
    'number',
    'perm_address',
    'current_addres',
    'nid',
    'pass',
    'exam'
);
}

