<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            {{-- <header class="bg-white shadow"> --}}
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
            {{-- </header> --}}
        @endif

        <!-- Page Content -->
        <a class="btn btn-primary ms-3 mt-3" href="{{ route('vente.index') }}">{{ __('Listes des ventes') }}</a>
        <a class="btn btn-primary ms-3 mt-3" href="{{ route('produit.index') }}">{{ __('Listes des produits') }}</a>
        <a class="btn btn-primary ms-3 mt-3" href="{{ route('marque.index') }}">{{ __('Listes des marques') }}</a>
        <div>
            <p class="m-3">{{ __('Vous naviguez en') }} [{{ session('locale') }}] [{{ App::getLocale() }}]
                <a href="{{ route('language.change', ['code_iso' => 'fr']) }}">{{ __('French') }}</a>
                <a href="{{ route('language.change', ['code_iso' => 'en']) }}">{{ __('English') }}</a>
            </p>
        </div>
        @yield('content')

    </div>
</body>

</html>
