{{-- resources/views/home.blade.php --}}
<x-main-layout title="Accueil">
    <div style="display: flex; justify-content: center; align-items: center; ">
        <p style="font-size: 1.5rem; color: white; text-align: center; padding: 3rem 7rem;">
            Découvrez GamerStack, votre espace personnalisé pour gérer votre collection de jeux vidéo. Créez votre propre bibliothèque virtuelle, votre journal de bord personnalisé pour chaque jeu. Une plateforme dédiée pour les passionnés de jeux, par un passionné de jeux.
        </p>
    </div>
    {{-- Inclusion des cartes --}}
    <div>
        <x-cards.card-home />
    </div>
</x-main-layout>