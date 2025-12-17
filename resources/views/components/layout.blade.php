<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @if (session('success'))
        <div id="flash" class="p-4 bg-green-50 text-green-500 text-center font-bold">
            <p>
                {{ session('success') }}
            </p>
        </div>
    @endif
    <x-navbar></x-navbar>
    {{-- <nav>
        <ul>
            <li>
                <x-navlink href="/">Home</x-navlink>
            </li>
            <li>
                <x-navlink href="/about">About</x-navlink>
            </li>
            <li>
                <x-navlink href="/contact">Contact</x-navlink>
            </li>
            <li>
                <x-navlink href="/siswa">Daftar Siswa</x-navlink>
            </li>
        </ul>
    </nav> --}}
    <main class="mx-auto max-w-6xl px-8 py-20">
        {{ $slot }}
    </main>
    <footer class="mx-auto max-w-6xl px-8">
        This is footer from {{ $footer }} page
    </footer>
</body>

</html>
