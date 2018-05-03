<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seleccion extends Controller
{
    function seleccionarPelicula(Request $request){
		
		$persona=\App\perfilMD::where('idperfiles',$request->input('id'))
								->pluck('edad'); 
		$preferencia=\App\preferencia::where("idperfiles",$request->input('id'))
								->pluck('idgenero'); 					   
		$peliculas=array(
						array("id"=>$request->input('id1'),
							   "gen"=>$request->input('gen1'),
							   "cal"=>$request->input('cal1'),
							   "sen"=>$request->input('sen1')),
						array("id"=>$request->input('id2'),
							   "gen"=>$request->input('gen2'),
							   "cal"=>$request->input('cal2'),
							   "sen"=>$request->input('sen2')),
						array("id"=>$request->input('id3'),
							   "gen"=>$request->input('gen3'),
							   "cal"=>$request->input('cal3'),
							   "sen"=>$request->input('sen3')),
						array("id"=>$request->input('id4'),
							   "gen"=>$request->input('gen4'),
							   "cal"=>$request->input('cal4'),
							   "sen"=>$request->input('sen4')),
						array("id"=>$request->input('id5'),
							   "gen"=>$request->input('gen5'),
							   "cal"=>$request->input('cal5'),
							   "sen"=>$request->input('sen5')),
						array("id"=>$request->input('id6'),
							   "gen"=>$request->input('gen6'),
							   "cal"=>$request->input('cal6'),
							   "sen"=>$request->input('sen6')));	
		$final=$this->BuscarPelicula($persona, $peliculas,$preferencia);
		return view('listado',['listado'=>$final]);
	}
	
	function BuscarPelicula($persona, $pelicula,$preferencia){
		
		$final=array();
		foreach($pelicula as $p){
			foreach($preferencia as $pr)
				if($p['gen']==$pr)
					array_push($final,$p);
		}
		$pelicula=$final;
		$final=array();
		foreach($pelicula as $p){
			if($p['sen']<$persona[0])
				array_push($final,$p);
		}
		$pelicula=$final;
		$final=array();
		foreach($pelicula as $p){
			if($p['cal']>=4)
				array_push($final,$p);
		}
		return $final;
	}
}
