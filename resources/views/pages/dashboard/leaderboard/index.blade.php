@extends('layouts.app')

@section('title', 'Leaderboard')

@section('content')

    @if (count($characters))
        <main class="h-full overflow-y-auto">
            <div class="container mx-auto">
                <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                    <div class="col-span-8">
                        <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                            Papan Peringkat
                        </h2>
                        <p class="text-sm text-gray-400">
                            Total Pengguna: {{ count($characters) }}
                        </p>
                    </div>
                    {{-- <div class="col-span-4 lg:text-right">
                        <div class="relative mt-0 md:mt-6">
                            <a href="{{ route('member.service.create') }}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                                + Add Service
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            <section class="container px-6 mx-auto mt-5">
                <div class="grid gap-5 md:grid-cols-12">
                    <main class="col-span-12 p-4 md:pt-0">
                        <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                            <table class="w-full" aria-label="Table">
                                {{-- <tbody class="bg-white"> --}}

                                    @foreach ($characters as $char)
                                        <tr class="text-gray-700 border-b">
                                            <td class="w-2/6 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    {{ "crown" }}
                                                </div>
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <img src="{{ $char->user->detailUser->photo ?? '' }}" alt="">
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <h4>{{ $char->user->name ?? '' }}</h4>
                                                <b>lv. {{ $char->level ?? '' }}</b>
                                            </td>
                                            <td class="px-1 py-5 text-sm text-green-500 text-md">
                                                <h1>{{ 1 }}</h1>
                                            </td>
                                        </tr>
                                    @endforeach

                                {{-- </tbody> --}}
                            </table>
                        </div>
                    </main>
                </div>
            </section>
        </main>
    @else
        <div class="flex h-screen">
            <div class="m-auto text-center">
                <img src="{{ asset('/assets/images/empty-illustration.svg') }}" alt="" class="w-48 mx-auto">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    There is No Requests Yet
                </h2>
                <p class="text-sm text-gray-400">
                    It seems that you haven’t provided any service. <br>
                    Let’s create your first service!
                </p>

                <div class="relative mt-0 md:mt-6">
                    <a href="{{ route('member.service.create') }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                        + Add Services
                    </a>
                </div>
            </div>
        </div>
    @endif


@endsection
