<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <!-- Formulario de búsqueda -->
        <form class="d-flex mr-auto" role="search">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <!-- Etiquetas -->
        @auth
            
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $username }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-body-tertiary" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        
        
        
        
        @endauth
    </div>
</nav>
