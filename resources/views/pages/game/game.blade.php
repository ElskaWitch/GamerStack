<x-app-layout title="Game">
    <div class="container mx-auto p-4 flex flex-col space-y-12">

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
        });
    </script>
</x-app-layout>
