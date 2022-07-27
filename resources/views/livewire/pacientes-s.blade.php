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
            </tr>
        </thead>
        <tbody>
            @foreach ($s as $item)
                <tr>
                    <td>
                        {{$item->nomC}}  {{$item->apeC}}
                    </td>
                    <td>
                        {{$item->CI}}
                    </td>
                    <td>
                        {{$item->sintoma}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
