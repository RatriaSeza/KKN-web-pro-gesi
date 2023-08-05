<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Beranda
        </x-slot>

        <div class="pt-16 -z-10">
            <div class="owl-carousel">
                <img class="w-full h-[420px] object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}"
                    alt="Kantor Lurah">
                <img class="w-full h-[420px] object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}"
                    alt="Kantor Lurah">
            </div>
        </div>

        <div class="bg-white flex justify-around relative py-10 -top-14 max-w-5xl mx-auto shadow-md z-10 rounded-md">
            <div>
                <img class="w-20" src="{{ asset('img/illustrations/documents.png') }}" alt="KK">
            </div>
            <div>
                <img class="w-20" src="{{ asset('img/illustrations/ancestors.png') }}" alt="peoples">
            </div>
            <div>
                <img class="w-20" src="{{ asset('img/illustrations/documents.png') }}" alt="KK">
            </div>
            <div>
                <img class="w-20" src="{{ asset('img/illustrations/documents.png') }}" alt="KK">
            </div>
        </div>

        <div>
            <p class="my-10 text-center text-2xl font-semibold">Berita</p>

            <div class="flex justify-center gap-6 max-w-5xl mx-auto">
                @for ($i = 0; $i < 3; $i++)
                <div class="bg-white max-w-xs rounded overflow-hidden shadow-lg">
                    <img class="w-full h-40 object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}" alt="Kantor Lurah">
                    <div class="px-4 py-3">
                        <div class="font-semibold text-lg">The Coldest Sunset</div>
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

        <div class="flex justify-between max-w-5xl mx-auto py-20 gap-10">
            <div class="">
                <div class="text-sky-500 font-Secondary font-black text-6xl mb-3 drop-shadow">
                    Lokasi
                </div>
                <div class="text-base">
                    Desa Gesi terletak di Kecamatan Gesi, Kabupaten Sragen, Provinsi Jawa Tengah, Indonesia.
                </div>
            </div>
            <div class="border-4 shadow-[0_3px_10px_rgb(0,0,0,0.2)] border-white rounded">
                <iframe class="mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20526.235473720226!2d110.99805488435362!3d-7.33187414601767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0133df97ffa5%3A0x5027a76e355b370!2sGesi%2C%20Sragen%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1690361321649!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
