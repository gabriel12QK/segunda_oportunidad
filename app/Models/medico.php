<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;
    protected $table= 'medicos';
    public $timestamps =false;
     public $fillable = ['nom','ape','CI','edad','id_tipo','id_espe'];
}
