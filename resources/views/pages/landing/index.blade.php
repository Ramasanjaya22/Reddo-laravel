@extends('layouts.front')

@section('title', 'Beranda')

@section('content')

    {{-- top --}}
    <div class="hero-bg">
        <!-- hero -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center text-serv-button">
                    <h1 class="lg:leading-normal sm:text-3xl lg:text-3xl text-2xl mb-5 font-bold lg:mt-16 ">
                        Build Your Reading Habbit <br class="lg:block hidden">
                        and become a Good
                        <br class="lg:block hidden">
                        Reader with <span class="text-reddo-red">Reddo!</span>
                    </h1>
                    <p class="pr-10">Reddo adalah aplikasi Tracking baca berbasis gamifikasi 🎮 sehingga kegiatan
                        membaca tidak lagi membosankan!</p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        <button class="bg-serv-button text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg"
                            onclick="toggleModal('registerModal')">
                            Mulai
                        </button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/hero-image.webp') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="min-h-screen bg-center bg-gradient-to-br from-red-900 via-rose-600 to-red-100"">
        <div class="text-center text-neutral-content flex justify-center">
            <div class="max-w-md p-5">
            <h1 class="mb-5 text-2xl font-bold text-serv-button">Literasi Membaca di Indonesia</h1>
            <p class="mb-3 text-serv-button">
                Berdasarkan hasil penelitian dari United Nations Educational, Scientific and
                Cultural Organization (UNESCO) pada tahun 2016 menunjukan bahwa indeks minat
                baca di Indonesia hanya sebesar 0.001 persen, yang artinya dari 1000 orang
                hanya 1 orang yang memiliki ketertarikan dalam membaca (Perpusnas,2020).
                Program for International Student Assessment (PISA) juga melakukan survei pada
                tahun 2019 yang diterbitkan oleh Organization for Economic Co-Operation and
                Development (OECD) 2018 mencatat bahwa Indonesia menempati peringkat 10
                terbawah dalam hal literasi, lebih tepatnya berada pada urutan 62 dari 70 [1].
              </p>
              <p class="mb-3 text-serv-button">
                Hal inilah yang mendorong kami dari tim Ngetech melakukan riset dan
                mengembangkan solusi berupa website Reading Tracker yang dapat memberikan
                tujuan dan tantangan kepada siswa untuk mencoba membaca minimal satu buku saja
                dengan pendekatan konsep Gamifikasi.
              </p>

          </div>
        </div>
      </div>


@endsection
