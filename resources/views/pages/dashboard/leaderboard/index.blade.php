{{-- @dd($characters->all()[0]->user()) --}}
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

                                    @for ($i = 0; $i < count($characters); $i++)
                                        <tr class="text-gray-700 border-b">
                                            <td class="w-2/6 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <img src="{{ URL('assets/rank/'.$crowns[0][$i]) }}" alt="">
                                                </div>
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                @if ($characters->all()[$i]->user->detailUser->photo != NULL)
                                                <img src="{{ url($characters->all()[$i]->user->detailUser->photo) }}" alt="photo profile" class="w-16 h-16 rounded-full">
                                            @else
                                                <span class="inline-block w-16 h-16 overflow-hidden bg-gray-100 rounded-full">
                                                    <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                </span>
                                            @endif
                                                {{-- <img src="{{ $characters->all()[$i]->user->detailUser->photo ?? '' }}" alt=""> --}}
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <h4>{{ $characters->all()[$i]->user->name ?? '' }}</h4>
                                                <b>lv. {{ $characters->all()[$i]->level ?? '' }}</b>
                                            </td>
                                            <td class="px-1 py-5 text-sm text-green-500 text-md">
                                                <h1><b>{{ $i+1 }}</b></h1>
                                            </td>
                                        </tr>
                                    @endfor

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
