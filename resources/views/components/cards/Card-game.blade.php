{{-- resources/views/components/cards/Card-game.blade.php --}}
<div class="card w-full max-w-xs sm:max-w-[12rem] mx-2 rounded-lg overflow-hidden shadow-lg m-auto">
    <img src="{{ $imageUrl }}" alt="{{ $title }}" class="w-full h-48 object-cover" style="border-radius: 1rem 1rem 0 0;">
    <div class="card-content bg-[#000116] text-white text-center py-4" style="border-radius: 0 0 1rem 1rem;">
        <h2 class="text-lg font-semibold truncate px-5">{{ $title }}</h2>
    </div>
</div>

@push('styles')
<style>
    /* Troncature du texte */
    .truncate {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 100%;
    }

    /* Effet de survol pour la carte */
    .card:hover .card-content {
        background-color: #682AAE; /* Change la couleur de fond au survol */
    }

    /* Transition douce pour le changement de couleur */
    .card-content {
        transition: background-color 0.3s ease;
    }
</style>
@endpush
