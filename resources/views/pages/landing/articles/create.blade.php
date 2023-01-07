@extends('layouts.front')

@section('title', ' Buat Post')

@section('content')
    <div class="content">
        <div class="overflow-hidden">
            <div class="mx-auto px-4">
                <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8">
                    <div class="w-full max-w-lg mx-auto">
                        <div class="container mx-auto">
                            <h1 class="text-1xl font-bold text-primary">Tambah Artikel Baru</h1>
                            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data"
                                class="w-full max-w-lg">
                                @csrf
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <input
                                            class=" appearance-none block w-full text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:bg-white focus:border-gray-500 border-none"
                                            id="title" type="text" name="title" placeholder="Judul Artikel...">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        {{-- <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="body">
                                            Isi
                                        </label> --}}
                                        <textarea
                                            class="resize form-input py-3 block w-full leading-5 rounded-md transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                            placeholder="Tulis artikel Anda disini" name="body"></textarea>

                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="image">
                                            Gambar
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="image" type="file" name="image">
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                        type="submit">
                                        Tambah Artikel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
