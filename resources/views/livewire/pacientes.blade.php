<div>
    <table>
        <thead >
            <tr >
                <td >
                   nombre cliente
                </td>
                <td>
                    CI
                 </td>
                 <td>
                    sintoma
                 </td>
                 <td>
                    medico
                 </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($e as $item)
                <tr>
                    <td>
                        {{$item->nomC}}
                    </td>
                    <td>
                        {{$item->apeC}}
                    </td>
                    <td>
                        {{$item->sintoma}}
                    </td>
                    <td>
                        {{$item->nomM}}  {{$item->apeM}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
