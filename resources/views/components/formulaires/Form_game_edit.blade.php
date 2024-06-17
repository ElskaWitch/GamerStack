<style>
    /* Style pour le formulaire */
    .form_create {
        background-color: #000116;
        padding: 20px;
        border-radius: 10px;
        color: white;
        width: 450px; 
        height: 415px;
        margin: 0 auto;
        text-align: center;
    }

    /* Style pour les champs */
    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-top: 25px;
        margin-bottom: 20px;
        border: 2px solid #000;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000116;
    }

    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-top: 25px;
        margin-bottom: 20px;
        border: 2px solid #000;
        border-radius: 20px;
        box-sizing: border-box;
        color: white;
    }

    /* Style pour le bouton */
    button[type="submit"] {
        background-color: #000116;
        color: white;
        font-weight: bold;
        margin-top: 25px;
        padding: 10px 25px;
        border: 2px solid #9747FF;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    /* Style pour le hover du bouton */
    button[type="submit"]:hover {
        background-color: #9747FF;
    }

</style>

<form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data" class="form_create">
    @csrf

    <div>
        <input type="text" id="title" name="title" placeholder="Titre du jeu" value="@isset($game){{ $game->title }}@endisset" required>
    </div>

    <div>
        <select id="console" name="console" required>
            <option value="" disabled selected>Choisir une console</option>
            <option value="PS4" @isset($game){{ $game->console === 'PS4' ? 'selected' : '' }}@endisset>PS4</option>
            <option value="Switch" @isset($game){{ $game->console === 'Switch' ? 'selected' : '' }}@endisset>Switch</option>
            <option value="DS" @isset($game){{ $game->console === 'DS' ? 'selected' : '' }}@endisset>DS</option>
        </select>
    </div>

    <div>
        <input type="file" id="image" name="image" required>
    </div>

    <button type="submit">Modifier</button>
</form>
