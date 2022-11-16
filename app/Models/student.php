<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\student as Authenticatable;

class student extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'email', 'date_of_birth', 'image', 'password'];
}