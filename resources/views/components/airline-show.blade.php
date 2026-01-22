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
        </tr>
    @endforeach
</table> 
</div>