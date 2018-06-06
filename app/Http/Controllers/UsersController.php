<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba as Prueba;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function mostrarUsuario(Request $request)
    {
    	$nombre = $request->input('nombre');
    	$apellido = $request->input('apellido');
    	$edad = $request->input('edad');


    	$mensaje = 'Buenos días '.$nombre.' '.$apellido.' tu edad es '.$edad;
		return $mensaje;
    }

     public function mostrarUsuarioById($id)
    {
	  	$usuario = Prueba::where('id',$id)->get();
		return $usuario;
    }

    public function agregarUsuario(Request $request)
    {
    	$nombre = $request->input('nombre');
    	$cedula = $request->input('cedula');

    	$usuario = new Prueba;

    	$usuario->nombre = $nombre;
    	$usuario->cedula = $cedula;


    	$usuario->save();

    	return $usuario; 
    }

    public function editarUsuario($id ,Request $request)
    {
    	$nombre = $request->input('nombre');
    	$cedula = $request->input('cedula');

    	$usuario = Prueba::find($id);

    	$usuario->nombre =$nombre;
    	$usuario->cedula = $cedula;

    	$usuario->save();

    	return $usuario;

    }

    public function eliminarUsuario($id,Request $request)
    {
    
    	$usuario = Prueba::find($id);
		$usuario->delete();

    	return $usuario;
    }

    public function getUsuarios()
    {
    	$usuarios = DB::select('SELECT * FROM cap_usuario');
		return $usuarios;
    }


}
