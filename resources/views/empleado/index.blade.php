principal

@if(Session::has('mensaje'))
 {{Session::get('mensaje')}}
@endif
<a href="{{url('empleado/create')}}">Registrar Nuevo empledo</a>
<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Celular</th>
      <th scope="col">Acciones</th>


    </tr>
  </thead>
  <tbody>
  @foreach($empleados as $empleado)

  <tr>
   <td>{{$empleado-> id}}</td>
   <td>
   <img src="{{asset('storage').'/'.$empleado->Photo}}" width="100" alt="">
   </td>
   <td>{{$empleado-> name}}</td>
   <td>{{$empleado-> lastname}}</td>
   <td>{{$empleado-> email}}</td>
   <td>{{$empleado-> number}}</td>
   <td>

   <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">Editar</a>


   <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
   @csrf
   {{method_field('DELETE')}}
<input type="submit" onclick="return confirm('¿Deseas eliminar registro?')" value="Borrar">
   </form>
   </td>

  </tr>

  @endforeach


  </tbody>
</table>
