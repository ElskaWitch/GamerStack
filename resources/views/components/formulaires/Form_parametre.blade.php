<style>
    /* Style pour le formulaire */
    .form_parametre {
        background-color: #000116;
        padding: 20px;
        border-radius: 10px;
        color: white;
        width: 450px; 
        margin: 0 auto;
        text-align: center;
    }

    .form_parametre input[type="text"],
    .form_parametre input[type="email"],
    .form_parametre input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 15px;
        margin-bottom: 20px;
        border: 2px solid #000;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000116;
    }

    .form_parametre button[type="submit"] {
        background-color: #000116;
        color: white;
        font-weight: bold;
        padding: 10px 25px;
        border: 2px solid #9747FF;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .form_parametre button[type="submit"]:hover {
        background-color: #9747FF;
    }

    /* Style pour l'avatar */
    .avatar-container {
        position: relative;
        width: 150px;
        height: 150px;
        margin: 0 auto;
    }

    .avatar {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .avatar:hover::after {
        content: 'Choisir une photo';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 1, 22, 0.5);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

</style>

<form action="{{ route('parametres.update') }}" method="POST" enctype="multipart/form-data" class="form_parametre">
    @csrf

    <div class="avatar-container">
        <img src="{{ asset('img/user_placeholder.png') }}" alt="Avatar" class="avatar">
        <input type="file" id="avatar" name="avatar" style="display: none;">
    </div>

    <div>
        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" value="{{ $user->pseudo }}" required>
    </div>

    <div>
        <input type="email" id="email" name="email" placeholder="Email" value="{{ $user->email }}" required>
    </div>

    <div>
        <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">
    </div>

    <div>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe">
    </div>

    <button type="submit">Valider</button>
</form>
