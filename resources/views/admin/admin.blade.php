<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title') | Administration</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>
            @php
                $route = request()->route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('admin.post.index') }}" @class(['nav-link', 'active' => str_contains($route, 'post.')])>Gérer les articles</a>
                    </li>
                </ul>
                <div class="ms-auto">
                    @auth
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="post" ">
                                        @csrf
                                        @method('delete')
                                        <button class="nav-link">Se déconnecter</button>
                                        </form>
                                        </li>
                                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        @include('shared.flash')

        @yield('content')
    </div>
</body>

</html>
