<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'edad'];
    protected $hidden = ['id', 'created_at', 'updated_at'];
}
