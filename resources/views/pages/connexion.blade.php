<style>
    body {
        background: linear-gradient(to bottom right, #000116, #210E47, #682AAE);
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .logo-container {
        text-align: center;
        margin-bottom: 30px;
    }

    .logo-container img {
        border-radius: 50%;
        max-width: 150px;
    }
</style>

<x-layouts/guest title="Connexion">
    <div class="logo-container">
        <img src="img/logo_gamerstack.png" alt="Logo GamerStack">
    </div>
    <div>
        <x-formulaires.form_connexion />
    </div>
</x-layouts/guest>
