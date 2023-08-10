<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Berita
    </x-slot>

    <div class="pt-28 pb-8 md:pb-20 mx-7 md:mx-28">
        <div class="font-Secondary mb-4 md:mb-6">
            <h3 class="text-2xl md:text-3xl text-gray-700 font-semibold">
                {{ $news->title }}
            </h3>
            <p class="text-gray-700 text-xs md:text-sm">Oleh Perangkat Desa | {{ \Carbon\Carbon::parse($news->published_date)->locale('id')->isoFormat('D MMMM Y') }}</p>
        </div>

        <div>
            <img class="bg-gray-400 w-full h-auto md:h-[450px] object-contain " src="{{ asset('img/carousel/kantor-lurah.jpg') }}" alt="Kantor Lurah">
        </div>

        <div>
            <div class="text-justify text-xs md:text-sm mt-4 md:mt-6">
                {{ $news->content }}
            </div>
        </div>
    </div>
</x-layouts.app>
