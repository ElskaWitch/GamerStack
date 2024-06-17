{{-- resources/views/pages/game/edit.blade.php --}}
<x-app-layout title="Edit">
   <style>
        h1 {
            font-size: 2em; 
            font-weight: 500; 
            color: white; 
            margin-bottom: 50px;
        }
    </style>
   <h1>Modifier</h1>
   <x-formulaires.form_game_edit />
</x-app-layout>