<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleado::paginate(1);
        return view('empleado.index',$datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('empleado.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Se agrega validaciones

        $campos=[
            'name'=>'required|string|max:100',
            'lastname'=>'required|string|max:100',
            'number'=>'required|string|max:12',
            'documentid'=>'required|string|max:10',
            'birth'=>'required|date|',
            'email' => 'required|email|unique:users',
            'passwd' => 'required|string|min:10|regex:/[a-z]/|regex:/[A-Z]/| regex:/[0-9]/|regex:/[@$!%*#?&]/',



        ];

        $mensaje=[
            'required' => ' Campo :attribute requerido',

        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleado = request()->except('_token');

        if($request->hasFile('Photo')){
$datosEmpleado['Photo']=$request->file('Photo')->store('uploads', 'public');
        }
        Empleado::insert($datosEmpleado);

       // return response()->json($datosEmpleado);

       return redirect('empleado')->with('mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Funcion que permite editar datos
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualiza empleados y redirecciona con mensaje exitoso


        $datosEmpleado = request()->except(['_token','_method','documentid','email']);



        if($request->hasFile('Photo')){
            $empleado=Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->Photo);
            $datosEmpleado['Photo']=$request->file('Photo')->store('uploads', 'public');
                    }
        Empleado::where('id','=',$id)->update($datosEmpleado);

        $empleado=Empleado::findOrFail($id);
       // return view('empleado.edit', compact('empleado'));

       return redirect('empleado')->with('mensaje','Empleado actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //funcion que permite realizar el delete de un empleado

       $empleado=Empleado::findOrFail($id);

       if(Storage::delete('public/'.$empleado->Photo));{

        Empleado::destroy($id);

       }

        return redirect('empleado')->with('mensaje','Empleado borrado con exito');
    }
}
