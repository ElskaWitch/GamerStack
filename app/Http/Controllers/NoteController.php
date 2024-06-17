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
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Créer un nouvel enregistrement de note dans la base de données
        $note = new Note();
        $note->message = $request->message;
        $note->save();

        // Rediriger vers la page d'index des notes avec un message de succès
        return redirect()->route('notes.index')->with('success', 'Note created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
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