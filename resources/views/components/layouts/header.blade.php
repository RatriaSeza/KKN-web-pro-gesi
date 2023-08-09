<div class="flex justify-between items-center md:max-w-2xl lg:max-w-4xl xl:max-w-5xl py-5 md:py-0 mx-7 md:mx-auto">
    <a href="{{ route('home') }}" class="flex items-center">
        <img class="h-10 w-auto" src="{{ asset('img/sragen-logo.png') }}" alt="Sragen">
        <div class="font-bold ml-2">
            <p class="text-primary text-xl md:text-2xl leading-5 md:leading-6">Desa Gesi</p>
            <p class="font-Secondary md:ml-[1px] mb-1 text-secondary text-xs md:text-sm leading-3">Kecamatan Gesi</p>
        </div>
    </a>

    <nav class="text-primary font-semibold text-sm hidden md:flex h-[70px] justify-between items-center gap-14">
        <a class="hover:text-secondary ease-out duration-150" href="{{ route('home') }}">Beranda</a>
        <div>
            <button class="h-[70px] peer hover:text-secondary ease-out duration-150" href="#">Informasi</button>
            <div class="font-Secondary font-bold w-32 absolute py-2 -ml-4 hidden peer-hover:flex hover:flex flex-col gap-2 bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] text-xs rounded">
                <a class="px-3 py-2 hover:bg-gray-100" href="{{ route('sejarah') }}">Sejarah</a>
                <a class="px-3 py-2 hover:bg-gray-100" href="{{ route('perangkat-desa') }}">Perangkat Desa</a>
            </div>
        </div>
        <a class="hover:text-secondary ease-out duration-150" href="{{ route('news') }}">Berita</a>
        <a href="{{ route('login') }}"
            class="text-primary hover:text-white border border-secondary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer ease-out duration-150">Login</a>
    </nav>

    <button @click="dropdown = !dropdown" class="md:hidden border border-gray-500 w-10 h-10 rounded flex justify-center items-center bg-white active:bg-gray-300">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>

<nav x-bind:class="dropdown ? 'hidden' : ''" class="w-full h-screen bg-gray-300 absolute -z-50 text-primary font-semibold text-base md:hidden">
    <div class="flex flex-col mx-7 py-4">
        <a class="hover:text-secondary ease-out duration-150 py-2" href="{{ route('home') }}">Beranda</a>

        <div x-data="{accordion: true}" class="py-2">
            <button @click="accordion = !accordion" class="ease-out duration-150 w-full flex justify-between items-center">
                <div>
                    Informasi
                </div>

                <div x-bind:class="accordion ? '' : 'hidden'">
                    <i class="fa-solid fa-chevron-down"></i>
                </div>

                <div x-bind:class="accordion ? 'hidden' : ''">
                    <i class="fa-solid fa-chevron-up"></i>
                </div>
            </button>
            <div x-bind:class="accordion ? 'max-h-0 invisible' : 'max-h-full visible mt-3'" class=" bg-gray-100 font-Secondary font-bold flex flex-col text-xs rounded pl-3 transition-[max-height] duration-300 ease-in overflow-hidden">
                <a class="py-2" href="{{ route('sejarah') }}">Sejarah</a>
                <a class="py-2" href="{{ route('perangkat-desa') }}">Perangkat Desa</a>
            </div>
        </div>

        <a class="hover:text-secondary ease-out duration-150 py-2" href="{{ route('berita') }}">Berita</a>
        <a href="{{ route('login') }}"
            class="bg-primary text-white border border-secondary focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer ease-out duration-150">Login</a>
    </div>
</nav>
