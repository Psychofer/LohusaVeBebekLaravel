<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Lohusa İzlem Formu')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts (opsiyonel) -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(to bottom right, #f8f9fa, #e3f2fd);
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #e0e0e0 !important;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer a {
            color: #adb5bd;
            text-decoration: none;
        }

        footer a:hover {
            color: #ffffff;
        }

        .btn-primary, .btn-secondary, .btn-outline-primary {
            border-radius: 30px;
        }

        .container {
            padding-bottom: 60px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ route('lohusa.index') }}">🩺 Lohusa ve Bebek Takip</a>

            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-white">🏠 Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('lohusa.create') }}" class="nav-link text-white">➕ Yeni Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-1">© {{ date('Y') }} Lohusa ve Bebek İzlem Formu</p>
            <p class="small">Geliştiren: <a href="https://github.com" target="_blank">ferhad ÖLMEZ</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


