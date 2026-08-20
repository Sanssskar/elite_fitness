<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Elite Fitness Studio' }}</title>
    <meta name="description" content="{{ $description ?? 'Elite Fitness Studio — Zumba and Yoga classes designed to help you move, breathe, and feel strong.' }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<style>
    .container{
        width: 86%;
        margin: auto
    }
</style>
<body class="bg-brand-cream">
    <x-frontend-header>

    </x-frontend-header>
    <main>
    {{ $slot }}
    </main>
    <x-frontend-footer>

    </x-frontend-footer>
</body>
</html>
