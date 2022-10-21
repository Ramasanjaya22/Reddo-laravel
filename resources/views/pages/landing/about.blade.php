@extends('layouts.front')

@section('title', ' Explore')

@section('content')

    <div class="content">
        <section id="tentangkami">
            <div class="reveal about-us container-xxl mx-auto p-0  position-relative">
                <div class="text-center title-text">
                    <h1 class="text-title">Tentang Kami</h1>
                </div>
                <div class="grid-padding text-center">
                    <div class="reveal row">
                        <div class="col-lg-4 column">
                            <div class="rounded-5 p-2" style="background:#593B9B;">
                                <img class="rounded-5 p-2" style="width: 100%;" src="assets/img/aboutUs/rama1.jpeg" alt="" />
                            </div>
                            <h3 class="title">Rama Sanjaya</h3>
                            <p class="caption">
                                NIM : 6706213021
                                <br>
                                Frontend Developer | UI Designer
                            </p>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="rounded-5 p-2" style="background:#593B9B;">
                                <img class="rounded-5 p-2" style="width: 95%;" src="assets/img/aboutUs/ihdazul1.jpeg" alt="" />
                            </div>
                            <h3 class="title">Syekh Maulana Wijaya</h3>
                            <p class="caption">
                                NIM : 6706210123<br />
                                Backend Developer
                            </p>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="rounded-5 p-2" style="background:#593B9B;">
                                <img class="rounded-5 p-2" style="width: 80%;" src="assets/img/aboutUs/thessa1.jpeg" alt="" />
                            </div>
                            <h3 class="title">Thessa Roxana</h3>
                            <p class="caption">
                                NIM : 6706213025<br />
                                Frontend Developer | UX Designer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
