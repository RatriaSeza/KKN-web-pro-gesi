<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Berita
    </x-slot>

    <div class="container mx-auto py-24 bg-[#E6E8F3]">
        <div class="md:max-w-2xl lg:max-w-4xl xl:max-w-5xl mx-7 md:mx-auto">
            <div class="font-Secondary text-sky-500 text-3xl font-extrabold border-b-4 border-sky-500 w-fit">Gesi News</div>
            <div class="flex flex-wrap justify-center gap-6 mt-3">
                @forelse ($news as $berita)
                <a href="{{ route('news.show', $berita->slug) }}" class="bg-white w-[90%] md:max-w-xs rounded overflow-hidden shadow-[0_3px_5px_rgb(0,0,0,0.2)] hover:scale-105 ease-out duration-150">
                    <article class="">
                        <img class="w-full h-40 object-cover " src="{{ asset('img/carousel/kantor-lurah.jpg') }}" alt="Kantor Lurah">
                        <div class="px-4 py-3">
                            <div class="font-semibold md:text-lg h-10 md:h-12 leading-5 md:leading-6 line-clamp-2">{{ $berita->title }}</div>
                            <p class="text-xs md:text-sm my-1 text-yellow-700 font-medium">{{ \Carbon\Carbon::parse($berita->published_date)->locale('id')->isoFormat('D MMMM Y') }}</p>
                            <p class="h-12 md:h-16 text-gray-700 text-xs md:text-sm line-clamp-3 break-words">
                                {{ $berita->summary }} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, molestiae.
                            </p>
                        </div>
                    </article>
                </a>
                @empty
                <div class="px-12 md:px-20 py-8 md:py-14 rounded-lg bg-gray-100 shadow-[rgba(50,50,93,0.25)_0px_30px_50px_-12px_inset,rgba(0,0,0,0.3)_0px_18px_26px_-18px_inset]">
                    <p class="font-bold text-gray-600">
                        Belum ada berita
                    </p>
                </div>
                @endforelse
            </div>
            <div class="flex justify-center space-x-1 mt-10">
                <button title="previous" type="button" class="bg-white inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md">
                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="bg-white w-4">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button type="button" title="Page 1" class="bg-white inline-flex text-sky-500 items-center justify-center w-8 h-8 text-sm font-semibold border border-sky-500 rounded shadow-md">1</button>
                <button type="button" class="bg-white inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md" title="Page 2">2</button>
                <button type="button" class="bg-white inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md" title="Page 3">3</button>
                <button type="button" class="bg-white inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md" title="Page 4">4</button>
                <button title="next" type="button" class="bg-white inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md">
                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('nav-news').classList.add('text-sky-500');
    </script>
</x-layouts.app>
