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

        <div class="bg-white flex justify-around relative py-10 -top-14 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl mx-7 md:mx-auto shadow-md z-10 rounded-md">
            <div>
                <img class="w-14 md:w-20 h-auto" src="{{ asset('img/illustrations/documents.png') }}" alt="KK">
            </div>
            <div>
                <img class="w-14 md:w-20 h-auto" src="{{ asset('img/illustrations/ancestors.png') }}" alt="peoples">
            </div>
            <div>
                <img class="w-14 md:w-20 h-auto" src="{{ asset('img/illustrations/documents.png') }}" alt="KK">
            </div>
            <div>
                <img class="w-14 md:w-20 h-auto" src="{{ asset('img/illustrations/documents.png') }}" alt="KK">
            </div>
        </div>

        <div>
            <p class="mb-4 md:mb-6 md:my-10 text-center text-4xl font-semibold">Berita</p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl mx-7 md:mx-auto">
                @for ($i = 0; $i < 3; $i++)
                <div class="bg-white max-w-full md:max-w-xs rounded overflow-hidden shadow-[0_3px_5px_rgb(0,0,0,0.2)]">
                    <img class="w-full h-40 object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}" alt="Kantor Lurah">
                    <div class="px-4 py-3">
                        <div class="font-semibold text-lg">The Coldest Sunset</div>
                        <p class="text-xs md:text-sm my-1 text-yellow-700 font-medium">1 Juli 1999</p>
                        <p class="text-gray-700 text-xs md:text-sm line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <div class="py-10 md:py-20 md:max-w-2xl lg:max-w-4xl xl:max-w-5xl mx-7 md:mx-auto">
            <div class="bg-[rgba(200,200,200,0.70)] p-7 flex flex-col md:flex-row justify-between max-w-5xl rounded-xl md:mx-auto gap-5 md:gap-10 shadow-[12px_17px_51px_rgba(0,0,0,0.22)] backdrop-blur-[6px]">
                <div class="">
                    <div class="text-sky-600 font-Secondary font-black text-5xl md:text-6xl mb-3 drop-shadow">
                        Lokasi
                    </div>
                    <div class="text-gray-900 text-sm md:text-base">
                        Desa Gesi terletak di Kecamatan Gesi, Kabupaten Sragen, Provinsi Jawa Tengah, Indonesia.
                    </div>
                </div>
                <div class="border-4 shadow-[0_3px_10px_rgb(0,0,0,0.2)] border-white rounded">
                    <iframe class="mx-auto w-full md:w-[600px] h-80 md:h-[450px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20526.235473720226!2d110.99805488435362!3d-7.33187414601767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0133df97ffa5%3A0x5027a76e355b370!2sGesi%2C%20Sragen%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1690361321649!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <x-slot:customJS>
            <script>
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
            </script>
            </x-slot>
</x-layouts.app>
