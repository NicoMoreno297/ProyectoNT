<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perfil extends Controller
{
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
}
