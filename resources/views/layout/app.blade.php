<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Boat Rental')</title>
</head>
<body>
    <header>
        <h1>Marine & Boat Rental Software</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Marine & Boat Rental Software</p>
    </footer>
</body>
</html>
