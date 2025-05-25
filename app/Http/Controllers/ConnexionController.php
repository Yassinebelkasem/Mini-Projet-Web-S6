<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
  
    public function form()
    {
        return view('administarative');
    } 
    public function login(Request $request)
    { 
        $request->validate([
            'nom' => 'required',
            'passe' => 'required'
        ]);
        $name = 'yassine';
        $password = '1234567';

        if ($request->nom === $name && $request->passe === $password) {
            session(['utilisateur' => $name]);
            return redirect('/homea');
        } else {
            return back()->with('erreur', 'Nom ou mot de passe incorrect.');
        }
    }
}