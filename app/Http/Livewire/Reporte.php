<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\persona;
use App\Models\medico;
use App\Models\especialidad;
use App\Models\tipo;
use App\Models\sintoma;

use PDF;


use Illuminate\Support\Facades\DB;
class Reporte extends Component
{
    public $sintoma, $tipo;
    public function render()
    {
        return view('livewire.reporte');
    }

    public function pacientes()
    {
       
        $e=DB::table('sintomas')
        ->join('personas','sintomas.id_paciente','=','personas.id')
        ->join('medicos','personas.id_medico','=','medicos.id')
        ->select('sintomas.*','personas.nom as nomC','personas.ape as apeC','personas.CI','medicos.nom as nomM','medicos.ape as apeM')
        ->get();
        
         return PDF::loadView('livewire.pacientes', compact('e'))
        ->stream('archivo.pdf');
    } 

    public function sintoma($sintoma)
    {
       
        $s=DB::table('sintomas')
        ->join('personas','sintomas.id_paciente','=','personas.id')
        
        ->select('sintomas.*','personas.nom as nomC','personas.ape as apeC','personas.CI')
        ->where('sintomas.sintoma',$sintoma)
        ->get();
        
         return PDF::loadView('livewire.pacientes-s', compact('s'))
        ->stream('archivo.pdf');
    } 

    public function tipos($tipo)
    {
       
       if($tipo=="paciente"){
            $s=DB::table('personas')
            ->join('tipos','personas.id_tipo','=','tipos.id')
            ->select('personas.*')
            ->where('tipos.tipo',$tipo)
            ->get();
         }
          else {
            $s=DB::table('medicos')
            ->join('tipos','medicos.id_tipo','=','tipos.id')
           ->select('medicos.*')
           ->where('tipos.tipo',$tipo)
           ->get();
           }
         return PDF::loadView('livewire.personast', compact('s'))
        ->stream('archivo.pdf');
    } 

}
