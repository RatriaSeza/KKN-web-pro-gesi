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
</head>
<body class="font-Primary">
    <header class="bg-white w-full shadow-md py-4 fixed top-0 z-50">
        <div class="flex justify-between items-center container max-w-5xl mx-auto">
            <a href="#" class="flex items-center">
                <img class="h-10" src="{{ asset('img/sragen-logo.png') }}" alt="Sragen">
                <div class="font-bold">
                    <p class="text-primary text-2xl leading-6">Desa Gesi</p>
                    <p class="ml-[1px] mb-1 text-secondary text-sm leading-3">Kecamatan Gesi</p>
                </div>
            </a>
            <nav class="text-primary font-semibold text-sm flex justify-between items-center gap-20">
                <a class="hover:text-secondary ease-out duration-150" href="#">Beranda</a>
                <a class="hover:text-secondary ease-out duration-150" href="#">Informasi</a>
                <a class="hover:text-secondary ease-out duration-150" href="#">Perangkat Desa</a>
                <a class="text-primary hover:text-white border border-secondary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer ease-out duration-150">Login</a>
            </nav>
        </div>
    </header>

    <div class="bg-white">
        {{ $slot }}
    </div>

    <footer class="mt-20">
        <div class="container bg-secondary h-96">

        </div>
    </footer>

    {{-- JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    {{ $customJS }}
</body>
</html>
