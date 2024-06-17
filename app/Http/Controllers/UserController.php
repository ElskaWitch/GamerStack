<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'pseudo' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        // Créer un nouvel utilisateur dans la base de données
        $user = new User();
        $user->pseudo = $request->pseudo;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Rediriger vers la page d'index des utilisateurs avec un message de succès
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'pseudo' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|max:255',
        ]);

        // Mettre à jour l'utilisateur dans la base de données
        $user->pseudo = $request->pseudo;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        // Rediriger vers la page d'index des utilisateurs avec un message de succès
        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Supprimer l'utilisateur de la base de données
        $user->delete();

        // Rediriger vers la page d'index des utilisateurs avec un message de succès
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}