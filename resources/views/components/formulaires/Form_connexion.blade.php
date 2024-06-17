<style>
    /* Style pour le formulaire */
    form {
        background-color: #000116;
        padding: 20px;
        border-radius: 10px;
        color: white;
        width: 300px;
        margin: 0 auto;
        text-align: center;
    }

    /* Style pour les champs */
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        border: 2px solid #000;
        border-radius: 20px;
        box-sizing: border-box;
        color:  #000116;
    }

    /* Style pour le bouton */
    button[type="submit"] {
        background-color: #000116;
        color:  white;
        font-weight: bold;
        padding: 10px 20px;
        border: 2px solid #9747FF;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    /* Style pour le hover du bouton */
    button[type="submit"]:hover {
        background-color: #9747FF;
    }

    /* Style pour le lien "mot de passe oublié" */
    .forgot-password {
        color: white;
        text-decoration: none;
    }
</style>

<form action="{{ route('connexion.submit') }}" method="POST">
    @csrf
    <h2>Connexion</h2>

    <div>
        <input type="email" id="email" name="email" placeholder="Email" required>
    </div>

    <div>
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
    </div>

    <button type="submit">Valider</button>

    <p><a href="#" class="forgot-password">Mot de passe oublié?</a></p>
</form>
