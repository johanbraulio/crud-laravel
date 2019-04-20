<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;



class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = DB::table('persona')->get();
        $data['personas'] = $personas;
        return view('listado', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona['nombres'] = '';
        $persona['id'] = 0;
        $persona['paterno'] = '';
        $persona['materno'] = '';
        $persona['fecha_nacimiento'] = '';
        $persona['email'] = '';
        $persona['celular'] = '';
        $data['persona'] = (object) $persona;
        return view('editar', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = DB::table('persona')
                        ->where('id','=',$id)
                        ->first();
        $data['persona'] = $persona;
        return view('editar', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required',
            'paterno' => 'required',
            'materno' => 'required'
        ]);

        $data = array("nombres" => $request->input('nombres'),
                        "paterno" => $request->input('paterno'),
                        "materno" => $request->input('materno'),
                        "fecha_nacimiento" => $request->input('nacimiento'),
                        "email" => $request->input('email'),
                        "celular" => $request->input('celular')
                    );
        if($id != "0"){
            DB::table('persona')
                ->where('id', $id)
                ->update($data);
            $mensaje = 'Usuario actualizado con exito';
        }else{
            DB::table('persona')
                ->insert($data);
            $mensaje = 'Usuario registrado con exito';
        }
        

        return Redirect::to('listado')->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('persona')->where('id', $id)->delete();

        return Redirect::to('listado')->with('mensaje', 'Usuario eliminado con exito');
    }
}
