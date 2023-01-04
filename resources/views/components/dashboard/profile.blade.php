<div class="col-span-4 text-right" id="menu">
    <div @click.away="open = false" class="relative z-10 hidden mt-5 lg:block" x-data="{ open: false }">
        <button @click="open = !open"
            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-white rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4">
            @if (auth()->user()->detailUser()->first()->photo != null)
                <img src="{{ url(Storage::url(auth()->user()->detailUser()->first()->photo)) }}" alt="photo profile"
                    class="inline w-12 h-12 mr-3 rounded-full">
            @else
                <svg class="inline w-12 h-12 mr-3 rounded-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            @endif
            Halo, {{ Auth::user()->name }}
        </button>

        <div x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">

            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline flex items-center"
                    href="{{ route('member.profile.index') }}">
                    <img src="{{ asset('assets/user.svg') }}" alt="user">
                    <span>Profile</span></a>

                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline flex items-center"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <img src="{{ asset('assets/Shutdown.svg') }}" alt="Shutdown">
                    <span>Logout</span>

                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>

                </a>
            </div>
        </div>

    </div>
</div>
