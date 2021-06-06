
<!--View que permite crear empleado -->
<!--<h1>{{$modo}} empleado</h1>-->



@if ($errors->any())

<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

</div>
@endif


<div class="container">

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"> <h3>{{$modo}} empleado</h3></div>
<div class="form-group col-md-8 col align-self-center">
<label for="Nombre">Nombre</label>
<input type="text" name="name" class="form-control " value="{{isset ($empleado->name)?$empleado->name:old('name')  }}" id="name">



<label for="Apellido">Apellido</label>
<input type="text" name="lastname"  class="form-control "  value="{{isset ($empleado->lastname)?$empleado->lastname:old('lastname')  }}" id="lastname">



<label for="Email">Email</label>
<input type="email" name="email"  class="form-control " id="email">



<label for="Telefono">Telefono</label>
<input  class="form-control" type="text"  class="form-control " name="number"  value="{{isset ($empleado->number)?$empleado->number:old('number')  }}" id="number">



<label for="Cedula">Cedula</label>
<input type="text" name="documentid"  class="form-control "id="documentid">



<label for="Fecha de nacimiento">Fecha de nacimiento</label>
<input type="date" name="birth"  class="form-control "   value="{{isset ($empleado->birth)?$empleado->birth:old('birth')  }}">



<label for="Pais">Pais</label>
<input type="text" name="country"   class="form-control " value="{{isset ($empleado->country)?$empleado->country:old('country')  }}""id="country">



<label for="Ciudad">Ciudad</label>
<input type="text" name="city"   class="form-control " value="{{isset ($empleado->city)?$empleado->city:old('city') }}"" id="city" >





<label for="Foto"></label>
@if(isset($empleado->Photo))
<img src="{{asset('storage').'/'.$empleado->Photo}}" class="img-thumbnail img-fluid"  width="100" alt="">
@endif
<input type="file" name="Photo"  class="form-control " id="Photo">




<label for="pass">Contraseña</label>
<input type="text" name="passwd"   class="form-control " value="{{isset ($empleado->passwd)?$empleado->passwd:old('passwd') }}" id="passwd">
</div>


</div>
<div>
<br>
<div class="d-flex justify-content-center">
<input type="submit" value="{{$modo}} datos" class="btn btn-success ">
<a href="{{url('empleado/')}}" class="btn btn-primary text-center">Regresar</a>
</div>
</div>


</div>
</div>
</div>

