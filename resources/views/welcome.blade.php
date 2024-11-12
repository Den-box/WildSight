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
    <div class="mx-8"><a class="inline-block border-white border px-4 py-2 rounded-md hover:bg-cyan-400 hover:border-cyan-400 hover:text-black transition ease-in-out duration-150" href="mailto:emily.a.l.birch@gmail.com">Get in touch</a></div>
</header>
<section class="m-auto">
    <img class="block m-auto" alt="Insights for NATURE" src="{{ Vite::asset('resources/images/title.svg') }}">
    <h2 class="mt-4 text-center text-4xl font-thin text-gray-500">WildSight gives you and your team the tools to <br/> make sense of a fast-moving market.</h2>
    <form method="post" action="" class="p-6">
        @csrf
        @method('put')
        <div class="mt-6">
            <x-text-input id="email" name="email" type="email" class="m-auto block w-1/2" autocomplete="email" data-placement="email" placeholder="E-mail" />
            <x-input-error :messages="$errors->updatePassword->get('email')" class="mt-2"/>
        </div>
        <x-primary-button class="mt-5 mx-auto block w-1/2">{{ __('Join the waitlist') }}</x-primary-button>
    </form>
</section>
<section class="m-auto">
    <div class="flex flex-wrap mb-5">
        <img class="mx-2" alt="WildSight1" src="{{ Vite::asset('resources/images/Image1.png') }}">
        <img class="mx-2" alt="WildSight2" src="{{ Vite::asset('resources/images/Image2.png') }}">
        <img class="mx-2" alt="WildSight3" src="{{ Vite::asset('resources/images/Image3.png') }}">
        <img class="mx-2" alt="WildSight4" src="{{ Vite::asset('resources/images/Image4.png') }}">
        <img class="mx-2" alt="WildSight5" src="{{ Vite::asset('resources/images/Image5.png') }}">
        <img class="mx-2" alt="WildSight6" src="{{ Vite::asset('resources/images/Image6.png') }}">
    </div>
</section>
</body>
</html>
