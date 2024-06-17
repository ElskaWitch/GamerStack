{{-- resources/views/pages/404.blade.php --}}
<x-main-layout title="404">
    <div class="body">
        <div class="navbar">
            <div>
                <a href="javascript:history.back()">
                <img src="img/back-arrow.png" alt="Back" style="max-height: 30px;">
                </a>
            </div>
            <div>
                <img src="img/logo_gamerstack.png" alt="GamerStack Logo">
            </div>
        </div>

        <div class="content">
            <div class="circle-404">
                <img src="img/404.png" alt="404">
            </div>
        </div>
    </div>
</x-main-layout>

<style>
        .body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000116;
            color: white;
        }
        .navbar {
            background-color: #000116;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
        }
        .navbar img {
            max-height: 50px;
        }
        .content {
            background-image: url('img/bg-404.png');
            background-size: cover;
            background-position: center;
            height: calc(100vh - 50px);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .circle-404 {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
        }
        .circle-404 img {
            width: 100%;
            height: auto;
        }
    </style>