<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Berita
    </x-slot>

    <div class="container mx-auto my-24">
        <div class="max-w-5xl mx-auto">
            <div class="text-2xl font-semibold border-b-4 border-gray-700 w-fit">Gesi News</div>
            <div class="flex flex-wrap justify-center gap-6 mt-3">
                @for ($i = 0; $i < 10; $i++)
                <div class="bg-white max-w-xs rounded overflow-hidden shadow-lg">
                    <img class="w-full h-40 object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}" alt="Kantor Lurah">
                    <div class="px-4 py-3">
                        <div class="font-bold text-lg">The Coldest Sunset</div>
                        <p class="text-xs my-1 text-yellow-700 font-medium">1 Juli 1999</p>
                        <p class="text-gray-700 text-sm line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</x-layouts.app>
