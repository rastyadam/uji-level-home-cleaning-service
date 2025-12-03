<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Aplikasi')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan CSS/asset sesuai kebutuhan -->
    <style>
      body { font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; padding: 20px; }
      header { margin-bottom: 20px; }
      nav a { margin-right: 8px; }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ url('/') }}#layanan">Layanan</a>
      </nav>
    </header>

    <main>
      @yield('content')
    </main>

    <footer style="margin-top:40px;color:#666">
      &copy; {{ date('Y') }} — Aplikasi bersihbersinar
    </footer>
  </body>
</html>
