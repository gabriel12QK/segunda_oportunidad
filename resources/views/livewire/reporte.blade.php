<div>
    <div>
        <button><a href="{{url('pacientes-pdf')}}" target="_blank">reporte de pacientes</a></button>     
       </div>
       <br>
       <br>
        <div>
            <form action="">
               <input type="text" wire:model="sintoma">
               <a href="{{url('sintomas-pdf'.$sintoma)}}" target="_blank">reporte de pacientes por sintoma</a>
         </div>
         <div>
            <form action="">
                 {{-- ingeniero el programa tiene un problerma con la palabra odontologo, con medico si funciona  --}}
               <input type="text" wire:model="tipo">
               <a href="{{url('personast-pdf'.$tipo)}}" target="_blank">reporte de personas por tipo</a>
         </div>

</div>
