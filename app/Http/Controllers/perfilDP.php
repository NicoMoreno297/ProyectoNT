<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\perfilMD;
use \App\usuario;

require '/config/facebook.php';
require '/vendor/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\GraphUser;
use Facebook\GraphObject;
use Facebook\FacebookRequestException;


class perfil extends Controller
{
    public function salir()
    {
        unset($_SESSION['facebook']);
        header('Location: ../index.php');
    }

    public function ingresar()
    {
        FacebookSession::setDefaultApplication($config['app_id'], $config['app_secret']);
        $helper = new FacebookRedirectLoginHelper('http://localhost:8000/face.php');
        
        try {
        	$session = $helper->getSessionFromRedirect();
        
        	if ($session):
        		$_SESSION['facebook'] = $session->getToken();
        		header('Location: index.php');
        	endif;
        
        	if (isset($_SESSION['facebook'])):
        		$session = new FacebookSession($_SESSION['facebook']);
        
        		$request = new FacebookRequest($session, 'GET', '/me');
        		$response = $request->execute();
        		$graphObjectClass = $response->getGraphObject(GraphUser::className());
        
        		$facebook_user = $graphObjectClass;
        	endif;
        } catch(FacebookRequestException $ex) {
          
        } catch(\Exception $ex) {
          
        }
    }
    public function index()
	{
		return \App\perfil::all();
	}
	public function show($id)
	{
		return \App\perfil::find($id);
	}
	public function store(Request $request)
	{
		return \App\perfil::create($request->all());
	}
	
	public function update(Request $request,$id)
	{
		$registro=\App\perfil::findOrFail($id);
		$registro->update($request->all());
		return $registro;
	}
	public function destroy($id)
	{
		$registro=\App\perfil::findOrFail($id);
		$registro->delete();
		
		return 204;//la ejecución fue exitosa definidos en httm dados los resultados como x ejemplo 404
	}

    //
    function analizar_datos(Request $request)
	{
        $i=0;
        if($request->input('4')=='si')
        {
            $preferencias[$i]='romance';
            $i++;
            if($request->input('3')=='misterio')
            {
                $preferencias[$i]='misterio';
                $i++;
                if($request->input('9')=='si')
                {
                    $preferencias[$i]='animadas';
                    $i++;
                }   
                else if($request->input('8')=='si')
                {
                    $preferencias[$i]='familiares';
                    $i++;
                }
            }
            else if($request->input('3')=='accion')
            {
                $preferencias[$i]='accion';
                $i++;
                if($request->input('9')=='si')
                {
                    $preferencias[$i]='animadas';
                    $i++;
                }   
                else if($request->input('8')=='si')
                {
                    $preferencias[$i]='familiares';
                    $i++;
                }
            }
        }
        else if($request->input('1')=='comedia')
        {
            $preferencias[$i]='comedia';
            $i++;
            if($request->input('3')=='misterio')
            {
                $preferencias[$i]='misterio';
                $i++;
                if($request->input('9')=='si')
                {
                    $preferencias[$i]='animadas';
                    $i++;
                }   
                else if($request->input('8')=='si')
                {
                    $preferencias[$i]='familiares';
                    $i++;
                }
            }
            else if($request->input('3')=='accion')
            {
                $preferencias[$i]='acccion';
                $i++;
                if($request->input('9')=='si')
                {
                    $preferencias[$i]='animadas';
                    $i++;
                }   
                else if($request->input('8')=='si')
                {
                    $preferencias[$i]='familiar';
                    $i++;
                }
            }
            if($request->input('1')=='terror')
            {
                $preferencias[$i]='terror';
                $i++;
                if($request->input('9')=='si')
                {
                    $preferencias[$i]='animadas';
                    $i++;
                }   
                else if($request->input('8')=='si')
                {
                    $preferencias[$i]='familiares';
                    $i++;
                }
            }
        }
        else if($request->input('1')=='terror')
        {
            $preferencias[$i]='terror';
            $i++;
            if($request->input('3')=='accion')
            {
                $preferencias[$i]='accion';
                $i++;
                if($request->input('9')=='si')
                {
                    $preferencias[$i]='animadas';
                    $i++;
                }   
                else if($request->input('8')=='si')
                {
                    $preferencias[$i]='familiares';
                    $i++;
                }
            }
            else if($request->input('3')=='misterio')
            {
                $preferencias[$i]='misterio';
                $i++;
                if($request->input('9')=='si')
                {
                    $preferencias[$i]='animadas';
                    $i++;
                }   
                else if($request->input('8')=='si')
                {
                    $preferencias[$i]='familiares';
                    $i++;
                }
            }
        }
        return view('preferencias',['preferencias'=>$preferencias]);
    }
    function ingreso(Request $request)
    {
        $ing =new perfilMD;
        $usu=new usuario;

        $ing->nombre= $request->input("nombre");
        $ing->edad= $request->input("edad");
        $ing->save();
        $id=\App\perfilMD :: where('nombre',$request->input('nombre'))
        ->where('edad',$request->input('edad'))
        ->pluck('idperfiles');

        $usu->idperfiles=$id[0];
        $usu->usuario= $request->input("usuario");
        $usu->contrasena= $request->input("contra");

        $usu->save();

        return view('correcto');
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
			if($p['sen']<=$persona[0])
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
    
    //selección de la película o serie que el usuario desee
	function seleccionarPelicula(Request $request){
		
		$persona=\App\perfil::where('id',Session::get('id',0))
								->pluck('edad'); 
		$preferencia=\App\preference::where('idperfiles',Session::get('id',0))
								->pluck('idgenero'); 
		$preferencia=\App\genre::where('idgenero',$preferencia[0])
									->pluck('nombre');
		$peliculas=array(
						array("id"=>1,
							   "gen"=>'Comedia',
							   "cal"=>5,
							   "sen"=>15),
						array("id"=>'id2',
							   "gen"=>1,
							   "cal"=>4,
							   "sen"=>25),
						array("id"=>'id3',
							   "gen"=>1,
							   "cal"=>3,
							   "sen"=>17),);	
		$final=$this->BuscarPelicula($persona, $peliculas,$preferencia);
		return view('sugerencia',['listado'=>$final]);
	}
	
}
