<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domisili extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'domisili_name',
    'created_at',
    'updated_at',
    ];

}
