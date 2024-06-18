<!-- resources/views/pages/note/create.blade.php -->

<x-app-layout title="Note">
    <div class="container mx-auto p-4 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-white mb-4">{{ $gameTitle }}</h1>
    </div>
    <!--TEXTAREA -->
    <div class="container mx-auto p-4 flex flex-col items-center">
        <div class="bg-[#000116] text-white p-8 rounded-lg shadow-lg mb-4" style="min-width: 60%;">
            <form action="{{ route('note.store') }}" method="POST">
                @csrf
                <textarea name="message" class="w-full h-64 bg-transparent text-white rounded-lg p-4 focus:outline-none resize-none" placeholder="Écrivez votre message ici..." style="min-width: 100%;"></textarea>
                <button type="submit" class="submit mt-4 mx-auto">Valider</button>
            </form>
        </div>
         <!-- Interface de l'éditeur -->
         <div class="w-1/4 bg-[#000116] text-white p-4 rounded-lg mr-4">
            <!-- Styles du texte -->
            <div class="mb-4">
                <div class="text-xl font-bold mb-2">Styles du Texte</div>
                <button class="text-white bg-transparent border border-white rounded px-2 py-1 hover:bg-white hover:text-[#000116] hover:border-transparent" onclick="execCommand('bold')">
                    Gras
                </button>
                <button class="text-white bg-transparent border border-white rounded px-2 py-1 hover:bg-white hover:text-[#000116] hover:border-transparent" onclick="execCommand('italic')">
                    Italique
                </button>
                <button class="text-white bg-transparent border border-white rounded px-2 py-1 hover:bg-white hover:text-[#000116] hover:border-transparent" onclick="execCommand('underline')">
                    Souligné
                </button>
                <input type="color" id="colorPicker" class="ml-2" onchange="execCommand('foreColor', this.value)" title="Changer la couleur du texte">
            </div>
    </div>

    <script>
        // Fonction pour exécuter des commandes sur le texte
        function execCommand(command, value = null) {
            document.execCommand(command, false, value);
            // Focus sur la zone de texte après l'exécution de la commande
            document.getElementById('editor').focus();
        }
    </script>
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
