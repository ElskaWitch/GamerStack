<!-- resources/views/pages/note/create.blade.php -->

<x-app-layout title="Game">
    <div class="container mx-auto p-4 flex flex-col space-y-12">
        <div class="flex justify-between items-center w-full mb-4">
            <h1 class="text-3xl font-bold text-white">Mes jeux</h1>
            <div class="flex space-x-4 items-center">
                <!-- Input de recherche -->
                <div class="relative">
                    <input type="text" class="search-input bg-[#000116] text-white rounded-full pl-10 pr-4 py-2" placeholder="Rechercher un jeu...">
                    <!-- Nouvelle icône de loupe -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-[#9747FF]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a7 7 0 100 14 7 7 0 000-14zM21 21l-4.35-4.35" />
                    </svg>
                </div>
                <!-- Filtre par console -->
                <div class="relative">
                    <select class="filter bg-[#000116] text-white rounded-full py-2 pl-3 pr-8">
                        <option value="">Tous</option>
                        <option value="PS4">PS4</option>
                        <option value="Switch">Switch</option>
                        <option value="DS">DS</option>
                    </select>
                    <!-- Chevron icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute right-3 top-1/2 transform -translate-y-1/2 text-[#9747FF]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Section pour les jeux PS4 -->
        <div class="carousel-section flex flex-col">
            <h2 class="carousel-title text-white text-3xl mb-4 text-left">Jeux PS4</h2>
            <div class="slider">
                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://upload.wikimedia.org/wikipedia/en/1/15/The_Elder_Scrolls_V_Skyrim_cover.png',
                    'title' => 'Skyrim'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://image.api.playstation.com/cdn/EP0700/CUSA06014_00/60LMXmTtlbr3RwGglLc9awmBpcFRCC5S.png',
                    'title' => 'Tekken 7'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://upload.wikimedia.org/wikipedia/en/7/70/Fallout_4_cover_art.jpg',
                    'title' => 'Fallout 4'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://m.media-amazon.com/images/M/MV5BMDU4ODc1M2UtODg3Ny00NDViLTkxNmQtMzMzZWM1NGRmYTNjXkEyXkFqcGdeQXVyODY5Njk4Njc@._V1_FMjpg_UX1000_.jpg',
                    'title' => 'The Witcher 3'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://image.api.playstation.com/cdn/EP0700/CUSA09884_00/InTjrv6HYQfRaZLFk6SchRYWVT5E2I2a.png',
                    'title' => 'Soulcalibur IV'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://upload.wikimedia.org/wikipedia/en/thumb/a/a5/Grand_Theft_Auto_V.png/220px-Grand_Theft_Auto_V.png',
                    'title' => 'GTA V'
                ])@endcomponent
            </div>
        </div>

        <!-- Section pour les jeux Switch -->
        <div class="carousel-section flex flex-col">
            <h2 class="carousel-title text-white text-3xl mb-4 text-left">Jeux Switch</h2>
            <div class="slider">
                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://upload.wikimedia.org/wikipedia/en/c/c6/The_Legend_of_Zelda_Breath_of_the_Wild.jpg',
                    'title' => 'Zelda BOTW'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://upload.wikimedia.org/wikipedia/en/f/fb/The_Legend_of_Zelda_Tears_of_the_Kingdom_cover.jpg',
                    'title' => 'Zelda TOTK'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9c/Pokemon_Legends_Arceus_cover.jpg/220px-Pokemon_Legends_Arceus_cover.jpg',
                    'title' => 'Pokemon Légende Arceus'
                ])@endcomponent
            </div>
        </div>

        <!-- Section pour les jeux DS -->
        <div class="carousel-section flex flex-col">
            <h2 class="carousel-title text-white text-3xl mb-4 text-left">Jeux DS</h2>
            <div class="slider">
                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://m.media-amazon.com/images/M/MV5BODVhZGFhNTEtNGQ0Yi00MjE4LWI4MGQtYjhlMjMyOTVlYzFkXkEyXkFqcGdeQXVyMTA0MTM5NjI2._V1_FMjpg_UX1000_.jpg',
                    'title' => 'Mario Kart'
                ])@endcomponent

                @component('components.cards.Card-game', [
                    'imageUrl' => 'https://www.nintendo.com/eu/media/images/10_share_images/games_15/nintendo_ds_22/SI_NDS_DrawnToLifeTheNextChapter_frFR_image1600w.jpg',
                    'title' => 'Dessine ton aventure'
                ])@endcomponent
            </div>
        </div>

    </div>

    <!-- Script pour initialiser Slick Carousel -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                variableWidth: true,
                centerMode: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                            variableWidth: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: true
                        }
                    }
                ]
            });

            // Fonction de recherche et filtrage
            $('.search-input').on('input', function() {
                let searchTerm = $(this).val().toLowerCase();
                $('.carousel-section .slider .slick-slide').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1);
                });
            });

            $('.filter').on('change', function() {
                let filterValue = $(this).val().toLowerCase();
                if (filterValue === "") {
                    $('.carousel-section').show();
                } else {
                    $('.carousel-section').each(function() {
                        let sectionTitle = $(this).find('.carousel-title').text().toLowerCase();
                        $(this).toggle(sectionTitle.indexOf(filterValue) > -1);
                    });
                }
            });
        });
    </script>
</x-app-layout>

<style>
    .search-input {
        border: 2px solid #9747FF;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        padding-left: 40px; 
        box-shadow: none;
        outline: none;
    }

    .search-input:focus {
        border-color: #ffffff;
        background-color: #000116;
    }

    .filter {
        border: 2px solid #9747FF;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        appearance: none; 
        background-color: #000116;
        background-image: none; 
        box-shadow: none;
        outline: none;
    }

    .filter:focus {
        border-color: #ffffff;
        background-color: #000116;
    }
</style>
