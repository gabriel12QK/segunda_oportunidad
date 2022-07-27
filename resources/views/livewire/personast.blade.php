<div>
    <table>
        <thead >
            <tr >
                <td >
                   nombre apellido
                </td>
                <td>
                    CI
                 </td>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($s as $item)
                <tr>
                    <td>
                        {{$item->nom}}  {{$item->ape}}
                    </td>
                    <td>
                        {{$item->CI}}
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
