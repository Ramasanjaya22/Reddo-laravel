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
                <div class="col-span-4 lg:text-right">

                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <div class="px-2 py-2 mt-2 bg-white rounded-xl" >
                            <h1>Ingatkan Saya...</h1>
                            <form action="{{ route('member.reminder.store') }}" method="POST" enctype="multipart/form-data">

                                @method('POST')
                                @csrf

                                <div>
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <label for="keterangan" class="block mb-3 font-medium text-gray-700 text-md">Keterangan</label>

                                                <textarea placeholder="Deskripsikan tentang pengingat ini..." type="text" name="keterangan" id="keterangan" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" rows="4" required></textarea>

                                                @if ($errors->has('keterangan'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('keterangan') }}</p>
                                                @endif
                                            </div>

                                            <div class="md:col-span-6 lg:col-span-3">
                                                <label for="start_time" class="block mb-3 font-medium text-gray-700 text-md">Waktu mulai</label>

                                                <input type="datetime-local" name="start_time" id="start_time"  class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="" required>

                                                @if ($errors->has('start_time'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('start_time') }}</p>
                                                @endif
                                            </div>

                                            <div class="md:col-span-6 lg:col-span-3">
                                                <label for="end_time" class="block mb-3 font-medium text-gray-700 text-md">Waktu selesai</label>

                                                <input type="datetime-local" name="end_time" id="end_time"  class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="" required>

                                                @if ($errors->has('end_time'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('end_time') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" onclick="return confirm('Apakah yakin ingin membuat pengingat ini?')">
                                            Buat Pengingat
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection
