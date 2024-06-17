{{-- resources/views/pages/game/game.blade.php --}}
<x-app-layout title="Game">
    <div id="card-container" class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 p-4">
        @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Dynamic Game 1'])
        @endcomponent

        @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Dynamic Game 2'])
        @endcomponent

        @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Dynamic Game 3'])
        @endcomponent
    </div>
</x-app-layout>