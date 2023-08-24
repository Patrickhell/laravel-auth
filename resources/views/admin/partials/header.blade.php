<header>
    <nav class="bg-dark navbar navbar-expand-lg bg-body-tertiary navbar_admin-client" data-bs-theme="dark">
        <div class="container-md ">
            <h3 class="text-white">
                Albums Music
            </h3>
            <div class="collapse navbar-collapse  text-white" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admin.albums.index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Options
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('admin.albums.create') }}">Create your Album</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.albums.trashedAlbum') }}">Trashed Albums</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>