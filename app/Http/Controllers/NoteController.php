<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.note.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($game)
    {
        // Ici vous pouvez ajuster selon la logique de votre application pour récupérer les détails du jeu
        $gameTitle = $game; // Exemple de récupération du titre du jeu

        return view('pages.note.create', compact('gameTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'message' => 'required|string',
        ]);

        // Créer un nouvel enregistrement de note dans la base de données
        $note = new Note();
        $note->message = $request->message;
        $note->save();

        // Rediriger vers une page appropriée ou afficher un message de succès
        return redirect()->route('notes.index')->with('success', 'Note créée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('pages.note.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('pages.note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Mettre à jour le champ de la note dans la base de données
        $note->message = $request->message;
        $note->save();

        // Rediriger vers la page d'index des notes avec un message de succès
        return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        // Supprimer la note de la base de données
        $note->delete();

        // Rediriger vers la page d'index des notes avec un message de succès
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
    }
}