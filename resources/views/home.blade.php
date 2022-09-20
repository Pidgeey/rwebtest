<!doctype html>
<html>
    @include('parts/head')
    <body class="w-full flex flex-col m-auto">
        @include('parts/header')
        <main class="w-11/12 md:w-3/4 m-auto text-xs lg:text-sm">
            <div class="mb-4 flex flex-col items-center md:flex-row">
                @livewire('filters')
                @livewire('search')
            </div>
            @livewire('market')
        </main>
        @livewireScripts
    </body>
</html>
