<x-app-layout :title="$game['title']">
    <div class="container mx-auto p-4 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-white mb-4">{{ $game['title'] }}</h1>
        <img src="{{ asset('storage/' . $game['image']) }}" alt="{{ $game['title'] }}" class="mt-10">

        <div class="flex mt-10 space-x-10">
            <!-- Bouton Modifier le Jeu -->
            <button class="submit">Modifier le Jeu</button>

            <!-- Bouton Écrire une Note -->
            <a href="{{ route('note.create', ['game' => $game['title']]) }}" class="submit">Écrire une Note</a>


            <!-- Bouton Supprimer le Jeu -->
            <button class="submit">Supprimer le Jeu</button>
        </div>

        <div class="mt-10">
            @include('pages.note.note')
        </div>
    </div>
</x-app-layout>

<style>
   /* Style pour le bouton */
.submit {
    background-color: #000116;
    color: white;
    font-weight: bold;
    margin-top: 25px;
    padding: 10px 25px;
    border: 2px solid #9747FF;
    border-radius: 20px;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

/* Style pour le hover du bouton */
.submit:hover {
    background-color: #9747FF;
}
</style>