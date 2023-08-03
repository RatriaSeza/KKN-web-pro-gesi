<div class="flex justify-between items-center container max-w-5xl mx-auto">
    <a href="{{ route('home') }}" class="flex items-center">
        <img class="h-10 w-auto" src="{{ asset('img/sragen-logo.png') }}" alt="Sragen">
        <div class="font-bold ml-2">
            <p class="text-primary text-2xl leading-6">Desa Gesi</p>
            <p class="font-Secondary ml-[1px] mb-1 text-secondary text-sm leading-3">Kecamatan Gesi</p>
        </div>
    </a>
    <nav class="text-primary font-semibold text-sm flex h-[70px] justify-between items-center gap-14">
        <a class="hover:text-secondary ease-out duration-150" href="{{ route('home') }}">Beranda</a>
        <div>
            <button class="h-[70px] peer hover:text-secondary ease-out duration-150" href="#">Informasi</button>
            <div class="font-Secondary font-bold w-32 absolute py-2 -ml-4 hidden peer-hover:flex hover:flex flex-col gap-2 bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] text-xs rounded">
                <a class="px-3 py-2 hover:bg-gray-100" href="{{ route('sejarah') }}">Sejarah</a>
                <a class="px-3 py-2 hover:bg-gray-100" href="{{ route('perangkat-desa') }}">Perangkat Desa</a>
            </div>
        </div>
        <a class="hover:text-secondary ease-out duration-150" href="{{ route('berita') }}">Berita</a>
        <a href="{{ route('login') }}"
            class="text-primary hover:text-white border border-secondary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer ease-out duration-150">Login</a>
    </nav>
</div>
