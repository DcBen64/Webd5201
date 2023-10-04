<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beans App - Hunter x Hunter Database</title>
    <link href="/app.css" rel="stylesheet">
    <script src="/app.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Beans App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/characters') }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/settings') }}">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/abilities') }}">Abilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/factions') }}">Factions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dynamics') }}">Dynamics</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <div class="jumbotron">
            <h1>Welcome to Beans App!</h1>
            <p class="lead">Your ultimate database for everything related to Hunter x Hunter.</p>
        </div>
    </main>

    <footer class="text-center py-4">
        <p>&copy; 2023 Beans App. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
