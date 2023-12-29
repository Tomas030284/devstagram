<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{

    public function index($id)
    {
        $user = User::find($id);
        return view('user.index',[
            'user' => $user
        ]);
    }

    public function store(Request $request, $id )
    {

        $this->validate($request, [
            'name'=>'required|max:30',
            'lastname'=>'required|max:30',
            'email'=>'required|unique:users|email|max:60',
            'phone'=>'required',
/*             'password'=>'required|confirmed|min:6', */
        ]);

        //Guardar cambios
        $usuario = User::find($id);

        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->email = $request->email;
        $usuario->phone = $request->phone;
        $usuario->save();

        //Redireccionar
        return redirect()->route('posts.index',$usuario->name);

    }

    public function destroy($id)
    {
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('posts.index')->with('error', 'Usuario no encontrado.');
    }

    $user->delete();

    return redirect()->route('posts.index')->with('success', 'Usuario eliminado exitosamente.');
    }

}
