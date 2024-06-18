<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$games = Game::all();
        //return view('games.index', compact('games'));
        
        return view('pages.game.game');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'console' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Game::create([
            'title' => $request->title,
            'console' => $request->console,
            'image' => $imageName,
        ]);

        return redirect()->route('game')->with('success', 'Jeu ajouté avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show($slug)
{
    // Exemple de données pour le jeu. En pratique, vous récupérerez ces données de la base de données.
    $games = [
        'skyrim' => [
            'title' => 'Skyrim',
            'image' => 'https://upload.wikimedia.org/wikipedia/en/1/15/The_Elder_Scrolls_V_Skyrim_cover.png'
        ],
        'tekken-7' => [
            'title' => 'Tekken 7',
            'image' => 'https://image.api.playstation.com/cdn/EP0700/CUSA06014_00/60LMXmTtlbr3RwGglLc9awmBpcFRCC5S.png'
        ],
        // Ajoutez d'autres jeux ici
    ];

    // Vérifiez si le jeu avec le slug donné existe dans le tableau $games
    if (!array_key_exists($slug, $games)) {
        abort(404, 'Jeu non trouvé');
    }

    // Récupérez les détails du jeu à partir du tableau $games
    $game = $games[$slug];

    // Retournez la vue game.show qui se trouve dans le dossier `pages/game`
    return view('pages.game.show', compact('game'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('pages.game.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        // Valider les données reçues du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'console' => 'required|string|in:PlayStation,Xbox,Switch,PC,Mobile',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mettre à jour les champs du jeu dans la base de données
        $game->title = $request->title;
        $game->console = $request->console;

        // Gérer le téléchargement de la nouvelle image et mettre à jour le chemin dans la base de données
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/games');
            $game->image = $imagePath;
        }

        $game->save();

        // Rediriger vers la page d'index des jeux avec un message de succès
        return redirect()->route('games.index')->with('success', 'Game updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        // Supprimer le jeu de la base de données
        $game->delete();

        // Rediriger vers la page d'index des jeux avec un message de succès
        return redirect()->route('games.index')->with('success', 'Game deleted successfully!');
    }
}