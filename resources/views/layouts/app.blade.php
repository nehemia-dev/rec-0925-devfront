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
    <header class="bg-white">
        <div class="pt-[24px] pb-[19px]">
            <div class="container mx-auto">
                <a href="/manjatoharinaivo-completez-votre-reservation">
                    <img src="{{ asset('logo.png') }}" alt="Logo AAAEP" />
                </a>
            </div>
        </div>
        <div class="pt-[42px] pb-[39px] shadow-[0_3px_14px_rgba(0,0,0,0.16)]">
            <div class="container mx-auto">
                <h1>Test psychotechnique pour permis de conduire à Montgeron</h1>
            </div>
        </div>
    </header>

    <!-- Contenu de chaque page -->
    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>
