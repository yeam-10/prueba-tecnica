
<!--View que permite crear empleado -->
<h1>{{$modo}} empleado</h1>



<div class="container">
<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" name="name" class="form-control" value="{{isset ($empleado->name)?$empleado->name:old('name')  }}" id="name">
</div>

<div class="form-group">
<label for="Apellido">Apellido</label>
<input type="text" name="lastname"  class="form-control"  value="{{isset ($empleado->lastname)?$empleado->lastname:old('lastname')  }}" id="lastname">
</div>

<div class="form-group">
<label for="Email">Email</label>
<input type="email" name="email"  class="form-control" id="email">
</div>

<div class="form-group">
<label for="Telefono">Telefono</label>
<input  class="form-control" type="number"  class="form-control" name="number"  value="{{isset ($empleado->number)?$empleado->number:old('number')  }}" id="number">
</div>

<div class="form-group">
<label for="Cedula">Cedula</label>
<input type="text" name="documentid"  class="form-control" id="documentid">
</div>

<div class="form-group">
<label for="Fecha de nacimiento">Fecha de nacimiento</label>
<input type="date" name="birth"  class="form-control"   value="{{isset ($empleado->birth)?$empleado->birth:old('birth')  }}">
</div>

<div class="form-group">
<label for="Pais">Pais</label>
<input type="text" name="country"   class="form-control" value="{{isset ($empleado->country)?$empleado->country:old('country')  }}""id="country">
</div>

<div class="form-group">
<label for="Ciudad">Ciudad</label>
<input type="text" name="city"   class="form-control" value="{{isset ($empleado->city)?$empleado->city:old('city') }}"" id="city" >
</div>



<div class="form-group">
<label for="Foto"></label>
@if(isset($empleado->Photo))
<img src="{{asset('storage').'/'.$empleado->Photo}}" class="img-thumbnail img-fluid"  width="100" alt="">
@endif
<input type="file" name="Photo"  class="form-control" id="Photo">
</div>


<div class="form-group">
<label for="pass">Contraseña</label>
<input type="text" name="passwd"   class="form-control" value="{{isset ($empleado->passwd)?$empleado->passwd:old('passwd') }}" id="passwd">
</div>

</div>

<input type="submit" value="{{$modo}} datos" class="btn btn-success">
<a href="{{url('empleado/')}}" class="btn btn-primary"">Regresar</a>
