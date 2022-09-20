<!doctype html>
<html>
    @include('parts/head')
    <body class="w-full flex flex-col m-auto">
        @include('parts/header')
        <main class="w-3/4 m-auto">
            @livewire('coin', ['coinId' => $id])
        </main>
        @livewireScripts
    </body>
</html>
