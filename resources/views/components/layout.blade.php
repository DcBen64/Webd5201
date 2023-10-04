<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beans App</title>
    <link href="/app.css" rel="stylesheet">
    <nav class="navbar">
        <div class="container">
            <a href="/" class="navbar-brand">Beans App</a>
            <ul class="navbar-nav">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/characters" class="nav-link active">Characters</a></li>
                <li><a href="/settings" class="nav-link">Settings</a></li>
                <li><a href="/abilities" class="nav-link">Abilities</a></li>
                <li><a href="/factions" class="nav-link">Factions</a></li>
                <li><a href="/dynamics" class="nav-link">Dynamics</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>



   {{ $slot }}



</body>
<footer>
    <div class="container">
        <p>&copy; 2023 Beans App. All rights reserved.</p>
    </div>
</footer>
</html>
