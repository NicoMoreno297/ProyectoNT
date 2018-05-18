<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use Session;

class usuarioDP extends Controller
{
	public function index()
	{
		return \App\usuario::all();
	}
	public function show($id)
	{
		return \App\usuario::find($id);
	}
	public function store(Request $request)
	{
		return \App\usuario::create($request->all());
	}
	
	public function update(Request $id)
	{
		$registro=\App\usuario::findOrFail($id);
		$registro=\App\usuario::update($request->all());
	}
	public function destroy($id)
	{
		$registro=\App\usuario::findOrFail($id);
		$registro->delete();
		
		return 204;//la ejecución fue exitosa definidos en httm dados los resultados como x ejemplo 404
	}
    function validar(Request $request)
	{
		$usuarios=\App\usuario :: where('USUARIO',$request->input('usuario'))
								->where ('CONTRASENA',$request->input('password')) 
								->get();
		if($usuarios->count()>0)
			return view('inicio');
		else
			return view('login');
	}
}
