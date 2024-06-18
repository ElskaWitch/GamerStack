{{-- resources/views/layouts/app.blade.php --}}
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
    <link href="{{ asset('img/logo_gamerstack.png') }}" rel="icon" type="image/png"/>
    {{-- font roboto --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    <!-- import Tailwind -->
    @vite('resources/css/app.css')
    {{-- scrollreveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    <style>
        body {
            background: linear-gradient(45deg, #000116, #210E47, #682AAE);
            height: 100vh;
         
        }
        .container {
            display: flex;
            width: 100%;
            height: 100vh;
        }
        main {
            flex-direction: column;
            display: flex;
            align-items: center;
            justify-content: center;
            width: calc(100% - 250px);
            padding: 20px;
            margin-left: 250px;
        }
    </style>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <div class="container">
        @include('partials.navbar._sidebar')
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
