<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validarDP extends Controller
{
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
