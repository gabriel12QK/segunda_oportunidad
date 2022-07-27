<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sintomas extends Model
{
    use HasFactory;
    protected $table= 'medicos';
    public $timestamps =false;
     public $fillable = ['sintoma','id_paciente'];
}
