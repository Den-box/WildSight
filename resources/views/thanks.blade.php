<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WildSight</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased relative flex flex-col min-h-screen mx-auto">
<header class="flex sm:flex mb-8 sm:mb-auto mx-auto items-center">
    <img class="m-auto pt-12 block" alt="WildSight" src="{{ Vite::asset('resources/images/WildSight.svg') }}">
</header>
<section class="mx-auto mb-auto">
    <img class="block mx-auto px-4 sm:px-0" alt="Insights for NATURE" src="{{ Vite::asset('resources/images/title.svg') }}">
    <h2 class="mt-4 text-center text-2xl sm:text-4xl font-medium text-zinc-400">WildSight gives you and your team the tools to <br/> make sense of a
        fast-moving market.</h2>
    <h2 class="mt-4 text-center text-2xl sm:text-4xl">Thank you for your subscription</h2>
</section>
</body>
</html>

