<x-app-layout :title="$game['title']">
    <div class="container mx-auto p-4 flex flex-col items-center">
        <h1 class="text-3xl font-bold text-white mb-4">{{ $game['title'] }}</h1>
        <img src="{{ asset('storage/' . $game['image']) }}" alt="{{ $game['title'] }}" class="mt-4">
    </div>
</x-app-layout>
