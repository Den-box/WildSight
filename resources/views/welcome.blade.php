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
<header class="block sm:flex mb-8 sm:mb-auto mx-auto items-center">
    <img class="m-auto block" alt="WildSight" src="{{ Vite::asset('resources/images/WildSight.png') }}">
</header>
<section class="m-auto">
    <img class="block px-2 mx-auto max-w-full" alt="Insights for NATURE" src="{{ Vite::asset('resources/images/title.svg') }}">
    <h2 class="mt-4 text-center text-2xl sm:text-4xl font-medium text-zinc-400">WildSight gives you and your team the tools to <br/> make sense of a
        fast-moving market.</h2>
    <form method="post" action="{{ route("email.store") }}" class="p-6">
        @csrf
        <div class="mt-6">
            <x-text-input id="email" name="email" type="email" class="m-2 sm:m-auto block w-full sm:w-1/2" autocomplete="email"
                          data-placement="email"
                          placeholder="Email" />
            <x-input-error :messages="$errors->updatePassword->get('email')" class="mt-2"/>
        </div>
        <x-primary-button class="m-2 sm:mx-auto block w-full sm:w-1/2 mt-5 font-thin text-lg text-black font-['Halyard-Text-Book'] normal-case">{{ __('Stay
        tuned!')
        }}</x-primary-button>
    </form>
</section>
</body>
</html>
