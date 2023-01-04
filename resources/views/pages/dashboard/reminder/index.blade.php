
@extends('layouts.app')

@section('title', 'Pengingat')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Pengingat
                    </h2>
                    <p class="text-sm text-gray-400">
                        Bangunlah kebiasaan baru dan fokus
                    </p>
                    <p class="text-sm text-gray-400">
                        dengan apa yang mau kamu lakukan!
                    </p>
                </div>
                @include('components.dashboard.profile')
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Reminder</th>
                                    <th class="py-4" scope="">Start Time</th>
                                    <th class="py-4" scope="">End Time</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">

                                @for ($i = 0; $i < count($reminders); $i++)
                                    <tr class="text-gray-700 border-b">
                                        <td class="px-1 py-5 text-sm w-2/8">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    {{ $i+1 }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-2/6 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                                        {{ $reminders[$i]->description; }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-2/6 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                                        {{ $reminders[$i]->start_time; }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-2/6 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                                        {{ $reminders[$i]->end_time; }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <div>
                            <a href="{{ route('member.create.reminder') }}" type="button">Buat Pengingat</a>
                        </div>
                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection
