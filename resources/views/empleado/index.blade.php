<!--View que permite editar el usuario-->
@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible">
 {{Session::get('mensaje')}}
 <button type="button"  class="close" data-dismiss="alert"  aria-label="Close">
<span   aria-hidden="true">&times;</span>
</button>


</div>
@endif



<a href="{{url('empleado/create')}}" class="btn btn-success py-2">Registrar nuevo empleado</a> </br></br>
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
   <img src="{{asset('storage').'/'.$empleado->Photo}}"  class=" img-thumbnail img-fluid" width="100" alt="">
   </td>
   <td>{{$empleado-> name}}</td>
   <td>{{$empleado-> lastname}}</td>
   <td>{{$empleado-> email}}</td>
   <td>{{$empleado-> number}}</td>
   <td>

   <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-primary">Editar</a>


   <form action="{{url('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
   @csrf
   {{method_field('DELETE')}}
<input type="submit" onclick="return confirm('¿Deseas eliminar registro?')" value="Borrar" class="btn btn-danger">
   </form>
   </td>

  </tr>

  @endforeach


  </tbody>
</table>

{!!$empleados -> links()!!}
</div>
@endsection
