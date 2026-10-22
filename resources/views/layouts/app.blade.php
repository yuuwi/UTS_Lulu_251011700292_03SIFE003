<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal Resep Masakan')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('recipes.index') }}">
                🍳 Portal Resep Masakan
            </a>
        </div>
    </nav>

    <main class="container mb-5">
        @yield('content')
    </main>

    <footer class="bg-white text-center py-3 border-top mt-auto">
        <p class="mb-0 text-muted">&copy; 2026 Portal Resep Masakan - UTS Rekayasa Web</p>
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>