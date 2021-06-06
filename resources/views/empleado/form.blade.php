<h1>{{$modo}} empleado</h1>
<label for="Nombre">Nombre</label>
<input type="text" name="name" value="{{isset ($empleado->name)?$empleado->name:''  }}" id="name"><br>

<label for="Apellido">Apellido</label>
<input type="text" name="lastname"   value="{{isset ($empleado->lastname)?$empleado->lastname:''  }}" id="lastname"><br>

<label for="Email">Email</label>
<input type="email" name="email" id="email"><br>

<label for="Telefono">Telefono</label>
<input type="number" name="number"  value="{{isset ($empleado->number)?$empleado->number:''  }}" id="number"><br>

<label for="Cedula">Cedula</label>
<input type="text" name="documentid" id="documentid"><br>

<label for="Fecha de nacimiento">Fecha de nacimiento</label>
<input type="date" name="birth"    value="{{isset ($empleado->birth)?$empleado->birth:''  }}"><br>

<label for="Pais">Pais</label>
<input type="text" name="country"   value="{{isset ($empleado->country)?$empleado->country:''  }}""id="country"><br>

<label for="Ciudad">Ciudad</label>
<input type="text" name="city"   value="{{isset ($empleado->city)?$empleado->city:''  }}"" id="city" ><br>

<label for="Foto">Foto</label>
@if(isset($empleado->Photo))

<img src="{{asset('storage').'/'.$empleado->Photo}}" width="100" alt="">
@endif
<input type="file" name="Photo" id="Photo">

<label for="pass">pass</label>
<input type="text" name="passwd"   value="{{isset ($empleado->passwd)?$empleado->passwd:''  }}" id="passwd"><br>

<input type="submit" value="{{$modo}} datos">
<a href="{{url('empleado/')}}">Regresar</a>
