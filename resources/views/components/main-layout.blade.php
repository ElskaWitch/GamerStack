@props(['title'])

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>GamerStack | {{ $title }}</title>
    {{-- animate css --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    {{-- favicon --}}
    <link href="img/logo_gamerstack.png" rel="icon" type="image/png"/>
    {{-- font roboto --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- import Tailwind -->
    @vite('resources/css/app.css')
    {{-- scrollreveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>
	
    <style>
        body {
            font-family: 'Roboto', sans-serif; 
            background-color: #000116;
            margin: 0; 
            padding: 0;
        }
        .hero {
            background: url('img/hero.png') center center no-repeat;
            background-size: cover;
            height: 50vh;
        }
        .hero-overlay {
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .hero-overlay h2 {
            font-size: 6rem;
            color: white;
        }
    </style>
</head>

<body>
     @include('partials.navbar._nav')
    <!-- hero -->
    <div class="hero">
        <div class="hero-overlay">
            <h2 class="font-semibold animate__animated animate__flipInX">GamerStack</h2>
        </div>
    </div>
    <div class=""> 
        @include('partials._session')
        {{ $slot }}
    </div>

    @vite('resources/js/app.js')
</body>

</html>
