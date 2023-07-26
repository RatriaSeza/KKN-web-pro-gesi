<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Beranda
        </x-slot>

        <div class="mt-16 -z-10">
            <div class="owl-carousel">
                <img class="w-full h-96 object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}"
                    alt="Kantor Lurah">
            </div>
        </div>

        <div class="bg-white -mt-16 h-48 max-w-5xl mx-auto shadow-md z-[999]">
            asdfsa
        </div>

        <div>
            <p class="my-10 text-center text-2xl font-semibold">Berita</p>

            <div class="flex justify-center gap-6 max-w-5xl mx-auto">
                @for ($i = 0; $i < 3; $i++)
                <div class="bg-white max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full h-40 object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}" alt="Kantor Lurah">
                    <div class="px-4 py-3">
                        <div class="font-bold text-lg mb-2">The Coldest Sunset</div>
                        <p class="text-gray-700 text-sm line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                            et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <div class="mx-auto w-full my-10">
            <iframe class="mx-auto rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20526.235473720226!2d110.99805488435362!3d-7.33187414601767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0133df97ffa5%3A0x5027a76e355b370!2sGesi%2C%20Sragen%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1690361321649!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <x-slot:customJS>
            <script>
                $(document).ready(function() {
                    $(".owl-carousel").owlCarousel({
                        slideSpeed: 300,
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
