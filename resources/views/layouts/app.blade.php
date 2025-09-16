<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Header commun -->
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-xl font-bold">AAAEP Centre national des tests psychotechniques</h1>
    </header>

    <!-- Contenu de chaque page -->
    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>
