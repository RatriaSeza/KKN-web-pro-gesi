<x-layouts.app>
    <x-slot:title>
        Desa Gesi | Login
        </x-slot>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>

        <div class="bg-[#E6E8F3] py-20">
            <div class="bg-gray-50 w-1/3 mx-auto mt-10 rounded-md shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-10">
                <p class="text-3xl font-semibold mb-4 text-gray-700 font-Secondary">Log In</p>
                <div>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-500">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5"
                                placeholder="email@email.com" required>
                        </div>
                        <div x-data="{show: false}">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-500">Password</label>
                            <div class="flex">
                                <input :type="show ? 'text' : 'password'" name="password" id="password" placeholder="••••••••"
                                    class="grow bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block p-2.5"
                                    required>
                                <button @click="show = !show" class="ml-4 basis-1/12 text-gray-500 " type="button">
                                    <span x-bind:class="show ? 'hidden' : ''"><i class="fa-solid fa-eye"></i></span>
                                    <span x-bind:class="show ? '' : 'hidden'"><i class="fa-solid fa-eye-slash"></i></span>
                                </button>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-gray-800 hover:bg-gray-300 hover:text-gray-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ease-out duration-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
</x-layouts.app>
