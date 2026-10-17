
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | FirstTechnos Academy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar FTA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            
        <a class="navbar-brand" href="/">
            <img
                src="{{ asset('images/logo-fta.png') }}"
                alt="FirstTechnos Academy"
                class="navbar-logo"
            >
        </a>


            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarFTA"
                aria-controls="navbarFTA"
                aria-expanded="false"
                aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarFTA">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Our Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/instructor">Our Instructor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Isi halaman -->
    <main class="container py-5 flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-top py-4 text-center text-secondary">
        &copy; 2026 FirstTechnos Academy. All rights reserved.
    </footer>

</body>
</html>
