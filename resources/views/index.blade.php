<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Beranda
        </x-slot>

        <div>
            <div class="owl-carousel">
                <img class="w-full h-screen object-cover" src="{{ asset('img/carousel/kantor-lurah.jpg') }}"
                    alt="Kantor Lurah">
            </div>
        </div>

        <div>
            <p class="my-10 text-center text-2xl font-semibold">Berita</p>

            <div class="flex justify-center gap-6 max-w-5xl mx-auto">
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
            </div>
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
