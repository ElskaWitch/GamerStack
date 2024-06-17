<nav style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 2rem; background-color: #000116;">
    <div style="display: flex; align-items: center;">
        <a href="{{ route('inscription') }}">
            <button style="background-color: #000116; color: white; font-weight: bold; padding: 0.5rem 1rem; border: 2px solid #9747FF; border-radius: 30px; transition: all 0.3s ease-in-out;">
                Créer un compte
            </button>
        </a>
    </div>

    <div>
        <img src="img/logo_gamerstack.png" alt="Logo GamerStack" style="max-width: 150px;">
    </div>

    <div style="display: flex; align-items: center;">
        <a href="{{ route('connexion') }}">
            <button style="background-color: #000116; color: white; font-weight: bold; padding: 0.5rem 1rem; border: 2px solid #9747FF; border-radius: 30px; transition: all 0.3s ease-in-out; ">
                Connexion
            </button>
        </a>
    </div>
</nav>