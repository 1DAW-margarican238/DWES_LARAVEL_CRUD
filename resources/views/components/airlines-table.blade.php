 <div>
    <table>
  <tr>
    @foreach ($cabeceras as $cabecera)
        <th>{{$cabecera}}</th>
    @endforeach
  </tr>
  @foreach ($datos as $filadatos)
        <tr>
          {{-- @dump($datos); --}}
            @foreach($filadatos as $dato)
            <td>{{$dato}}</td>
            @endforeach
            <td>
                <a href="{{ route('airline.show',$filadatos['id'])}}">Ver</a>
                <a href="{{route('airline.edit',$filadatos['id'])}}">Editar</a>
                {{-- <a href="{{route('airline.delete',$filadatos['id'])}}">Ver</a> --}}
            </td>
        </tr>
    @endforeach
</table> 
</div>