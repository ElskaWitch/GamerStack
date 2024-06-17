{{-- resources/views/pages/game/game.blade.php --}}
<x-app-layout title="Game">
    <div class="container mx-auto p-4 flex flex-col space-y-12">

        <!-- Section pour les jeux PS4 -->
        <div class="carousel-section flex flex-col">
            <h2 class="carousel-title text-white text-3xl mb-4 text-left">Jeux PS4</h2>
            <div class="slider slider-ps4">
                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu PS4 1'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu PS4 2'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu PS4 3'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu PS4 4'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu PS4 5'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu PS4 6'])
                @endcomponent
            </div>
        </div>

        <!-- Section pour les jeux Switch -->
        <div class="carousel-section flex flex-col">
            <h2 class="carousel-title text-white text-3xl mb-4 text-left">Jeux Switch</h2>
            <div class="slider slider-switch">
                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu Switch 1'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu Switch 2'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu Switch 3'])
                @endcomponent
            </div>
        </div>

        <!-- Section pour les jeux DS -->
        <div class="carousel-section flex flex-col">
            <h2 class="carousel-title text-white text-3xl mb-4 text-left">Jeux DS</h2>
            <div class="slider slider-ds">
                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu DS 1'])
                @endcomponent

                @component('components.cards.Card-game', ['imageUrl' => 'https://via.placeholder.com/400x300', 'title' => 'Jeu DS 2'])
                @endcomponent

            </div>
        </div>

    </div>

    <!-- Script pour initialiser Slick Carousel -->
    <script type="text/javascript">
        $(document).ready(function(){
            // Initialiser le carrousel pour PS4
            $('.slider-ps4').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                variableWidth: true,  // Ajuste la largeur des slides
                centerMode: false,    // Désactive le centrage
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

            // Initialiser le carrousel pour Switch
            $('.slider-switch').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                variableWidth: true,  // Ajuste la largeur des slides
                centerMode: false,    // Désactive le centrage
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

            // Initialiser le carrousel pour DS
            $('.slider-ds').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                variableWidth: true,  // Ajuste la largeur des slides
                centerMode: false,    // Désactive le centrage
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
