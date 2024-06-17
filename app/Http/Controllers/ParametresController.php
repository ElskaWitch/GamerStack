<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ParametresController extends Controller
{
    /**
     * Affiche le formulaire de paramètres de l'utilisateur.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $user = Auth::user();
        return view('pages.parametres.edit', compact('user'));
    }

    /**
     * Met à jour les paramètres de l'utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $user = Auth::user(); // Récupérer l'utilisateur connecté
        $user->pseudo = $request->input('pseudo');
        $user->email = $request->input('email');
        
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        
        if ($request->hasFile('avatar')) {
        }
        
        $user->save(); 
        
        return redirect()->route('parametres')->with('success', 'Paramètres mis à jour avec succès');
    }
    
}
