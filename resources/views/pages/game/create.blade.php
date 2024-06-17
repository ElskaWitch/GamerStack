{{-- resources/views/pages/game/create.blade.php --}}
<x-app-layout title="Create">
    <style>
        h1 {
            font-size: 2em; 
            font-weight: 500; 
            color: white; 
            margin-bottom: 50px;
        }
    </style>

    <h1>Ajouter</h1>
    <x-formulaires.form_game_create />
</x-app-layout>
