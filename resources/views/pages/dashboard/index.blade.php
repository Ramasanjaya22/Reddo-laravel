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
                @include('components.dashboard.profile')
            </div>
        </div>
        <!-- component -->

        <section class="container px-6 mx-auto mt-5">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 p-4">
                    <div class="flex items-center justify-center">
                        <div class="bg-white font-semibold text-center rounded-xl p-12">
                            <h1 class="text-xl font-bold mt-1 text-primary"> Klik Tombol Start, Dapatkan Point! </h1>
                            <img class="w-32 mx-auto" src="{{ asset('/assets/icon-pomodoro.svg') }}"
                                alt="gambar reddo pomodoro">

                            @include('components/dashboard.pomodoro')

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
                                                        aria-hidden="true">
                                                    </div>
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
