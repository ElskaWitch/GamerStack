{{-- resources/views/partials/navbar/_sidebar.blade.php --}}
<style>
    .sidebar {
        height: 100vh;
        width: 250px;
        background-color: #000116;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 20px; /* Added padding to start from the top */
    }

    .sidebar hr {
        width: 80%;
        border: 1px solid white;
        margin: 20px 0;
    }

    .sidebar a, .sidebar button {
        color: white;
        text-decoration: none;
        font-size: 18px;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: color 0.3s;
        width: 100%;
    }

    .sidebar a:hover, .sidebar button:hover {
        color: #682AAE;
    }

    .sidebar .active {
        color: #682AAE;
    }

    .user-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }

    .user-info img {
        border-radius: 50%;
        width: 6rem;
        height: 6rem;
        margin-bottom: 10px;
    }

    .sidebar-icon {
        width: 24px;
        margin-right: 10px;
    }

    .logout {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
</style>

<nav class="sidebar">
    <img src="{{ asset('img/logo_gamerstack.png') }}" alt="Logo GamerStack" style="width: 12rem;">
    <hr>
    <a href="{{ route('game') }}" class="{{ request()->routeIs('game') ? 'active' : '' }}">
        <img src="{{ asset('img/game.svg') }}" alt="Mes jeux" class="sidebar-icon">Mes jeux
    </a>
    <a href="{{ route('create') }}" class="{{ request()->routeIs('create') ? 'active' : '' }}">
        <img src="{{ asset('img/add.svg') }}" alt="Ajouter" class="sidebar-icon">Ajouter
    </a>
    <a href="{{ route('edit') }}" class="{{ request()->routeIs('edit') ? 'active' : '' }}">
        <img src="{{ asset('img/edit.svg') }}" alt="Modifier" class="sidebar-icon">Modifier
    </a>
    <hr>
    <div class="user-info">
        <img src="{{ asset('img/user_placeholder.png') }}" alt="User Image">
        @auth
            <span>{{ Auth::user()->name }}</span>
        @endauth
    </div>
    <a href="{{ route('parametres') }}" class="{{ request()->routeIs('parametres') ? 'active' : '' }}">
        <img src="{{ asset('img/param.svg') }}" alt="Paramètres" class="sidebar-icon">Paramètres
    </a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout">
            <img src="{{ asset('img/logout.svg') }}" alt="Déconnexion" class="sidebar-icon">Déconnexion
        </button>
    </form>
</nav>
