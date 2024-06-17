{{-- resources/views/components/cards/Card-game.blade.php --}}
<div class="w-full max-w-xs sm:max-w-[12rem] mx-2 rounded-lg overflow-hidden shadow-lg">
    <img src="{{ $imageUrl }}" alt="{{ $title }}" class="w-full h-48 object-cover" style="border-radius: 1rem 1rem 0 0;">
    <div class="bg-[#000116] text-white text-center py-4" style="border-radius: 0 0 1rem 1rem;">
        <h2 class="text-lg font-semibold">{{ $title }}</h2>
    </div>
</div>
