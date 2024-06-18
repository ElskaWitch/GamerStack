<style>
    /* Style pour le bouton */
    .submit {
        background-color: #000116;
        color: white;
        font-weight: bold;
        padding: 10px 25px;
        border: 2px solid #9747FF;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    /* Style pour le hover du bouton */
    .submit:hover {
        background-color: #9747FF;
    }
</style>

<nav style="display: flex; justify-content: space-between; padding: 0rem 2rem; align-content: center;">
    <div style="display: flex; align-items: center;">
        <a href="{{ route('inscription') }}">
            <button class="submit">
                Créer un compte
            </button>
        </a>
    </div>

    <div>
        <img src="img/logo_gamerstack.png" alt="Logo GamerStack" style="max-width: 150px;">
    </div>

    <div style="display: flex; align-items: center;">
        <a href="{{ route('connexion') }}">
            <button class="submit">
                Connexion
            </button>
        </a>
    </div>
</nav>