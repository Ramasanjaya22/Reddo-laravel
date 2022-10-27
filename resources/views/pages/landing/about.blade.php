@extends('layouts.front')

@section('title', ' Explore')

@section('content')

    <div class="content">
        <section id="tentangkami">
            <div class="reveal about-us container-xxl mx-auto p-0  position-relative">
                <div class="text-center title-text">
                    <h1 class="text-title">Meet Our Team 😎</h1>
                </div>

                <div class="py-10 lg:py-24 flex lg:flex-row flex-col items-centercta-bg">

                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                            src="assets/images/profil/rama.jpg">
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-3xl font-semibold">Rama Sanjaya</h2>
                        <p class="mt-2 text-gray-600">NIM : 6706213028</p>
                        <p class="mt-2 text-gray-600">Full Stack Developer || UI Designer</p>
                    </div>
                </div>
                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                            src="assets/images/profil/thessa.jpg">
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-3xl font-semibold">Thessa Roxana</h2>
                        <p class="mt-2 text-gray-600">NIM : 6706213025</p>
                        <p class="mt-2 text-gray-600">Frontend Developer | UX Designer</p>
                    </div>
                </div>
                <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500"
                            src="assets/images/profil/alan.jpg">
                    </div>
                    <div>
                        <h2 class="text-gray-800 text-3xl font-semibold">Syekh Maulana Wijaya</h2>
                        <p class="mt-2 text-gray-600">NIM : 6706210123</p>
                        <p class="mt-2 text-gray-600">Backend Developer</p>
                    </div>
                </div>

                </div>

            </div>
    </div>



    <div class="grid-padding text-center">
        <div class="reveal row">
            <div class="col-lg-4 column">
            </div>
        </div>
        </section>
    </div>

@endsection
