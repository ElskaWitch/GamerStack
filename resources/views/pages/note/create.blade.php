<!-- resources/views/pages/note/create.blade.php -->

<x-app-layout title="Note">
    <div class="container mx-auto p-4 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-white mb-4">{{ $gameTitle }}</h1>
    </div>
    <div class="container mx-auto p-4 flex flex-col items-center">
        <div class="bg-[#000116] text-white p-8 rounded-lg shadow-lg mb-4" style="min-width: 60%;">
            <form action="{{ route('note.store') }}" method="POST">
                @csrf
                <textarea name="message" class="w-full h-64 bg-transparent text-white rounded-lg p-4 focus:outline-none resize-none" placeholder="Écrivez votre note ici..." style="min-width: 100%;"></textarea>
                <button type="submit" class="submit mt-4 mx-auto">Valider</button>
            </form>
        </div>
    </div>
</x-app-layout>

<style>
    .submit {
        background-color: #000116;
        color: white;
        font-weight: bold;
        padding: 10px 25px;
        border: 2px solid #9747FF;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
        display: block; 
    }

    /* Style pour le hover du bouton */
    .submit:hover {
        background-color: #9747FF;
    }
</style>
