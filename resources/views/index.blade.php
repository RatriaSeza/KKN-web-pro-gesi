<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Beranda
        </x-slot>

        <div class="pt-16 -z-10">
            <div class="owl-carousel">
                <img class="w-full h-48 md:h-[420px] object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}"
                    alt="Kantor Lurah">
                <img class="w-full h-48 md:h-[420px] object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}"
                    alt="Kantor Lurah">
            </div>
        </div>

        <div class="jos bg-white py-10 relative -top-14 md:max-w-2xl lg:max-w-3xl xl:max-w-4xl mx-7 md:mx-auto shadow-md z-10 rounded-md"
            data-jos_animation="stretch" data-jos_duration="0.5" data-jos_timing-function="ease-in-out"
            data-jos_delay="0.4">
            <div class="flex md:grid items-center justify-around md:grid-cols-4 text-center">
                <div class="">
                    <h2 class="text-[#279bd5] drop-shadow-lg font-Secondary font-extrabold text-xl md:text-4xl">3.664</h2>
                    <h4 class="text-xs md:text-base font-Secondary font-semibold text-gray-800">Penduduk</h4>
                </div>
                <div>
                    <h2 class="text-[#279bd5] drop-shadow-lg font-Secondary font-extrabold text-xl md:text-4xl">480,29</h2>
                    <h4 class="text-xs md:text-base font-Secondary font-semibold text-gray-800">Luas <small>(Ha)</small></h4>
                </div>
                <div>
                    <h2 class="text-[#279bd5] drop-shadow-lg font-Secondary font-extrabold text-xl md:text-4xl">4</h2>
                    <h4 class="text-xs md:text-base font-Secondary font-semibold text-gray-800">Dusun</h4>
                </div>
                <div>
                    <h2 class="text-[#279bd5] drop-shadow-lg font-Secondary font-extrabold text-xl md:text-4xl">24</h2>
                    <h4 class="text-xs md:text-base font-Secondary font-semibold text-gray-800">RT</h4>
                </div>
            </div>
        </div>

        <div class="jos" data-jos_animation="zoom-out-up" data-jos_duration="0.8"
            data-jos_timing-function="ease-in-out" data-jos_delay="0.1">
            <p class="mb-4 md:mb-6 md:my-10 text-center text-4xl font-semibold">Berita</p>

            <div
                class="flex flex-col md:flex-row items-center justify-center gap-6 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl md:mx-auto">
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
        </div>

        <div class="py-10 md:py-20 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl mx-7 md:mx-auto">
            <div
                class="bg-[rgba(200,200,200,0.70)] p-7 flex flex-col md:flex-row justify-between max-w-5xl rounded-xl md:mx-auto gap-5 md:gap-10 shadow-[12px_17px_51px_rgba(0,0,0,0.22)] backdrop-blur-[6px]">
                <div class="demo-container jos" data-jos_animation="fade-right" data-jos_duration="0.3"
                    data-jos_timing-function="ease-in-out" data-jos_delay="0.5">
                    <div class="text-sky-600 font-Secondary font-black text-5xl md:text-6xl mb-3 drop-shadow">
                        Lokasi
                    </div>
                    <div class="text-gray-900 text-sm md:text-base">
                        Desa Gesi terletak di Kecamatan Gesi, Kabupaten Sragen, Provinsi Jawa Tengah, Indonesia.
                    </div>
                </div>
                <div class="border-4 shadow-[0_3px_10px_rgb(0,0,0,0.2)] border-white rounded demo-container jos"
                    data-jos_animation="fade-left" data-jos_delay="0.5" data-jos_timing-function="ease-in-out">
                    <iframe class="mx-auto w-full md:w-96 lg:w-[600px] h-80 md:h-[450px]"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20526.235473720226!2d110.99805488435362!3d-7.33187414601767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0133df97ffa5%3A0x5027a76e355b370!2sGesi%2C%20Sragen%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1690361321649!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <x-slot:customJS>
            <script>
                JOS.init()

                $(document).ready(function() {
                    $(".owl-carousel").owlCarousel({
                        slideSpeed: 1000,
                        paginationSpeed: 400,

                        autoplay: true,

                        items: 1,
                        itemsDesktop: false,
                        itemsDesktopSmall: false,
                        itemsTablet: false,
                        itemsMobile: false,
                        loop: true,
                    });
                });

                var speed = 10;

                /* Call this function with a string containing the ID name to
                 * the element containing the number you want to do a count animation on.*/
                function incEltNbr(id) {
                    elt = document.getElementById(id);
                    endNbr = Number(document.getElementById(id).innerHTML);
                    incNbrRec(0, endNbr, elt);
                }

                /*A recursive function to increase the number.*/
                function incNbrRec(i, endNbr, elt) {
                    if (i <= endNbr) {
                        elt.innerHTML = i;
                        setTimeout(function() { //Delay a bit before calling the function again.
                            incNbrRec(i + 1, endNbr, elt);
                        }, speed);
                    }
                }

                incEltNbr("nbr");
            </script>
            </x-slot>
</x-layouts.app>
