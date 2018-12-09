<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function vistaUsuarios()
    {
        $users=User::all();
        return view('users.vista_usuarios',compact('users'));
    }

    public function informacion($id)
    {
     
        $user = User::find($id);
        return view('users.perfil_freelancer', compact('user'));
    }
}
