<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\preference;


class preferencias extends Controller
{
    public function index()
	{
		return \App\preference::all();
	}
	public function show($id)
	{
		return \App\preference::find($id);
	}
	public function store(Request $request)
	{
		return \App\preference::create($request->all());
	}
	
	public function update(Request $request,$id)
	{
		$registro=\App\preference::findOrFail($id);
		$registro->update($request->all());
		return $registro;
	}
	public function destroy($id)
	{
		$registro=\App\preference::findOrFail($id);
		$registro->delete();
		
		return 204;//la ejecución fue exitosa definidos en httm dados los resultados como x ejemplo 404
	}
	
}
