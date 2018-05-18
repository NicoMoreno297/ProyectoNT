<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\genre;


class genreDP extends Controller
{
    public function index()
	{
		return \App\genre::all();
	}
	public function show($id)
	{
		return \App\genre::find($id);
	}
	public function store(Request $request)
	{
		return \App\genre::create($request->all());
	}
	
	public function update(Request $request,$id)
	{
		$registro=\App\genre::findOrFail($id);
		$registro->update($request->all());
		return $registro;
	}
	public function destroy($id)
	{
		$registro=\App\genre::findOrFail($id);
		$registro->delete();
		
		return 204;//la ejecución fue exitosa definidos en httm dados los resultados como x ejemplo 404
	}
	
}
