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
<header class="flex flex-wrap items-center justify-between">
    <img class="mx-2" alt="python" src="{{ Vite::asset('resources/images/WildSight.png') }}">
    <div class="mx-8"><a class="inline-block border-white border px-4 py-2 rounded-md"  href="/">Get in touch</a></div>
</header>
<section class="m-auto">
    <img class="block m-auto" alt="Insights for NATURE" src="{{ Vite::asset('resources/images/title.svg') }}">
    <h2 class="mt-4 text-center text-4xl font-thin text-gray-500">WildSight gives you and your team the tools to <br/> make sense of a fast-moving market.</h2>
</section>
<section class="m-auto">
    <div class="flex flex-wrap mb-5">
        <img class="mx-2" alt="python" src="{{ Vite::asset('resources/images/Image1.png') }}">
        <img class="mx-2" alt="js" src="{{ Vite::asset('resources/images/Image2.png') }}">
        <img class="mx-2" alt="typescript" src="{{ Vite::asset('resources/images/Image3.png') }}">
        <img class="mx-2" alt="swift" src="{{ Vite::asset('resources/images/Image4.png') }}">
        <img class="mx-2" alt="kotlin" src="{{ Vite::asset('resources/images/Image5.png') }}">
        <img class="mx-2" alt="php" src="{{ Vite::asset('resources/images/Image6.png') }}">
    </div>
</section>
</body>
</html>
