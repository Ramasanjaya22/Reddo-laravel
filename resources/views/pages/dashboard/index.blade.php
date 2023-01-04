@extends('layouts.app')

@section('title', ' Dashboard')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Selamat Datang!
                    </h2>
                    <p class="text-sm text-gray-400">
                        Today is a Reader, Tomorrow is a Winner
                    </p>
                </div>

                <div class="col-span-4 text-right" id="menu">
                    <div @click.away="open = false" class="relative z-10 hidden mt-5 lg:block" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-white rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4">
                            @if (auth()->user()->detailUser()->first()->photo != null)
                                <img src="{{ url(Storage::url(auth()->user()->detailUser()->first()->photo)) }}"
                                    alt="photo profile" class="inline w-12 h-12 mr-3 rounded-full">
                            @else
                                <svg class="inline w-12 h-12 mr-3 rounded-full text-gray-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            @endif
                            Halo, {{ Auth::user()->name }}
                        </button>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">

                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('member.profile.index') }}">Profile</a>

                                <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout

                                    <form action="{{ route('logout') }}" id="logout-form" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>

                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- component -->

        <section class="container px-6 mx-auto mt-5">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 p-4">
                    <div class="flex items-center justify-center">
                        <div class="bg-white font-semibold text-center rounded-xl p-10">
                            <h1 class="text-lg mt-2 text-primary"> Klik tombol fokus, dan dapatkan point! </h1>
                            <img class="mx-3 w-32 mx-auto" src="{{ asset('/assets/icon-pomodoro.svg') }}"
                                alt="gambar reddo pomodoro">

                            <div id="pomodoro-timer">
                                <div id="time-left"></div>
                                <button id="start-button">Start</button>
                                <button id="stop-button">Stop</button>
                                <button id="reset-button">Reset</button>
                                <br>
                                <label for="work-time">Durasi sesi bekerja:</label>
                                <input id="work-time" type="number" min="1" value="25"> menit
                                <br>
                                <label for="break-time">Durasi istirahat:</label>
                                <input id="break-time" type="number" min="1" value="5"> menit
                                <script src="{{ asset('js/dashboard/pomodoro.js') }}" defer></script>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-4">

                    <main class="p-6 lg:col-span-7 md:col-span-12 md:pt-0">
                        <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                            <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                                <div>
                                    <div>
                                        <img src="{{ asset('/assets/images/leaderboard-gold-icon.svg') }}" alt=""
                                            class="w-8 h-8">
                                    </div>
                                    <p class="mt-2 text-2xl font-semibold text-left text-gray-800">{{ $progress ?? '' }}</p>
                                    <p class="text-sm text-left text-gray-500">
                                        Terbaik <br class="hidden lg:block">
                                        di papan peringkat
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                                <div>
                                    <div>
                                        <img src="{{ asset('/assets/images/book-year-challange-icon.svg') }}" alt=""
                                            class="w-8 h-8">
                                    </div>
                                    <p class="mt-2 text-2xl font-semibold text-left text-gray-800">{{ $completed ?? '' }}
                                    </p>
                                    <p class="text-sm text-left text-gray-500">
                                        Books Year <br class="hidden lg:block">
                                        Challange 2022
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                                <div>
                                    <div>
                                        <img src="{{ asset('/assets/images/charm_trophy-icon.svg') }}" alt=""
                                            class="w-8 h-8">
                                    </div>
                                    <p class="mt-2 text-2xl font-semibold text-left text-gray-800">{{ $freelancer ?? '' }}
                                    </p>
                                    <p class="text-sm text-left text-gray-500">
                                        Achievement <br class="hidden lg:block">
                                        Yang sudah terbuka
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-white rounded-xl mt-6">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold text-primary text-center">
                                    Tantangan Harian!
                                </h2>
                                <p class="text-sm  text-primary text-center">
                                    Selesaikan dan dapatkan item menarik!
                                </p>
                            </div>
                            <table class="w-full" aria-label="Table">
                                <thead>
                                    <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                        <th class="py-4" scope=""></th>
                                        <th class="py-4" scope=""></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr class="text-gray-700">
                                        <td class="w-1/2 px-1 py-2">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ url('https://randomuser.me/api/portraits/men/2.jpg') }}"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">Sarah Roses</p>
                                                    <p class="text-sm text-gray-400">1 May 2021</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            @include('components/dashboard.rating')
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="w-1/2 px-1 py-2">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ url('https://randomuser.me/api/portraits/men/3.jpg') }}"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">Sarah Roses</p>
                                                    <p class="text-sm text-gray-400">1 May 2021</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            @include('components/dashboard.rating')
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="w-1/2 px-1 py-2">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ url('https://randomuser.me/api/portraits/men/4.jpg') }}"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">Sarah Roses</p>
                                                    <p class="text-sm text-gray-400">1 May 2021</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            @include('components/dashboard.rating')
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="w-1/2 px-1 py-2">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ url('https://randomuser.me/api/portraits/men/5.jpg') }}"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">Sarah Roses</p>
                                                    <p class="text-sm text-gray-400">1 May 2021</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            @include('components/dashboard.rating')
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="w-1/2 px-1 py-2">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="{{ url('https://randomuser.me/api/portraits/men/6.jpg') }}"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">Sarah Roses</p>
                                                    <p class="text-sm text-gray-400">1 May 2021</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            @include('components/dashboard.rating')
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </main>

                </div>
            </div>
        </section>
    </main>

@endsection
