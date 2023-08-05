<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Desa Gesi' }}</title>

    <link rel="icon" href="{{ asset('img/sragen-logo.png') }}">

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
</head>

<body class="font-Primary">
    <header x-data="{dropdown: true}" class="bg-white w-full shadow-xl fixed top-0 z-50">
        <x-layouts.header />
    </header>

    <div class="bg-[#E6E8F3]">
        {{ $slot }}
    </div>

    <footer class="bg-gray-800">
        <x-layouts.footer />
    </footer>

    {{-- JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/3c95b2f216.js" crossorigin="anonymous"></script>
    {{ $customJS ?? '' }}
</body>

</html>
