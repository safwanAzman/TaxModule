<header class="z-10 py-4 bg-blue-500  shadow-md " style="height: 7vh;">
    <div class="flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
    <img src="{{asset('img/eCouncil_putih.png')}}" class="lg:block ml-6 h-12 bg-contain bg-center hidden"/>
    <!-- Mobile hamburger -->
    <button
        class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
        @click="toggleSideMenu"
        aria-label="Menu"
    >
        <x-heroicon-o-menu class="w-6 h-6 text-white"/>
    </button>

    <ul class="flex items-center flex-shrink-0 space-x-6">
        <!-- Profile menu -->
        <li class="relative">
        <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
            <div class="flex text-white font-semibold">
            <img class="object-cover w-8 h-8 rounded-full" src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="" aria-hidden="true" />
            <p class="pt-1 pl-2">ADMIN</p>
            </div>
        </button>
        <template x-if="isProfileMenuOpen">
            <ul
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click.away="closeProfileMenu"
            @keydown.escape="closeProfileMenu"
            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
            aria-label="submenu"
            >
            <li class="flex">
                <a
                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                >
                <x-heroicon-o-login class="w-5 h-5 mr-2"/>
                <span>Log out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            </ul>
        </template>
        </li>
    </ul>
    </div>
</header>