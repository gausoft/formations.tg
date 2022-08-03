<nav class="sticky top-0 z-50 bg-white shadow-sm" x-data="{open: false}" style="background-color: #FFFFFF">
    <div class="max-w-6xl px-4 mx-auto">
        <div class="flex justify-between">

            <div class="flex space-x-4">
                <!-- logo -->
                <div>
                    <a href="/" class="flex items-center px-2 py-5 text-gray-700 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                          </svg>
                        <span class="font-bold">Formations.tg</span>
                    </a>
                </div>

                <!-- primary nav -->
                <div class="items-center hidden space-x-1 md:flex">
                    <a href="/browse" class="px-3 py-5 font-semibold text-black hover:text-primary">Parcourir</a>
                    <a href="/directory" class="px-3 py-5 font-semibold text-black hover:text-primary">Annuaire</a>
                </div>
            </div>

            <!-- secondary nav -->
            <div class="items-center hidden space-x-1 md:flex">
                <button class="inline-block px-3 py-2 font-semibold text-center text-black border" @click="showModal = true">Se connecter</button>
                <a href="/publish" class="inline-block px-6 py-2 font-semibold text-center text-white transition duration-150 ease-in-out rounded-sm bg-primary">
                    Publier
                </a>
            </div>

            <!-- mobile button goes here -->
            <div class="flex items-center md:hidden">
                <button class="mobile-menu-button" @click.prevent="open = !open">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- mobile menu -->
    <div class="px-4 mobile-menu md:hidden" :class="{ 'hidden': !open }">
        <div>
            <a href="/browse" class="block px-4 py-2 text-sm hover:bg-gray-200">Parcourir</a>
            <a href="/directory" class="block px-4 py-2 text-sm hover:bg-gray-200">Annuaire</a>
        </div>
        <div>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-200">Se connecter</a>
            <a href="/publish" class="block px-4 py-2 text-sm hover:bg-gray-200">Publier</a>
        </div>
    </div>
</nav>