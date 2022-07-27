<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    use HasFactory;
    protected $table= 'medicos';
    public $timestamps =false;
     public $fillable = ['tipo'];
}
