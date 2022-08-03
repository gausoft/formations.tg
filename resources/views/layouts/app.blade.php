<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Formations.tg | @yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Alpine -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    {{-- <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script> --}}
    <!-- Flickity Slider -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="relative antialiased tracking-tight text-gray-500 bg-white" x-data="{ 'showModal': false }" @keydown.escape="showModal = false" :class="{'overflow-y-hidden': showModal}" x-cloak>
    <div class="absolute inset-0 -translate-x-1/2 -translate-y-1/2 bg-top bg-no-repeat bg-illustration-01"
        style="background-image: url('img/illustration-section-01.svg')"></div>
    <div class="absolute inset-0 -translate-x-1/2 -translate-y-1/2 bg-center bg-no-repeat bg-illustration-02"
        style="background-image: url('img/illustration-section-02.svg')"></div>

    @include('shared/header')

    <div class="relative">
        <main>
            @yield('content')
        </main>
        @include('shared/footer')
    </div>
</body>

</html>