<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('inicio') }}">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Listado</a>
            </li>
            @if (!auth()->check())
                <li class="nav-item">
                    <a class="btn btn-outline-success " href="{{ route('login') }}">Login</a>
                </li>
            @endif
            @if (auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.show', 1) }}">Ficha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}">Creacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.edit', 1) }}">Edicion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
