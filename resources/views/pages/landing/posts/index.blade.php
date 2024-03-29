@extends('layouts.front')

@section('title', ' Forum Community')

@section('content')



    <div class="content">
        <!-- Postingan -->
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-4xl font-semibold mb-1 text-primary">Selamat Datang di Forum Komunitas <img
                            src="{{ asset('assets/forum.svg') }}" alt="forum" class="w-8 inline"></h1>

                    <p class="leading-8 text-serv-text mb-10">
                        Bersama komunitas membaca, kita melengkapi diri dengan wawasan yang luas
                    </p>
                </div>


                <a href="{{ route('posts.create') }}">
                    <button class="bg-serv-button text-white text-lg font-semibold py-4 px-8 my-2 rounded-lg">+ Buat
                        Post</button></a>
                <!-- component post-->
                <div class="grid grid-cols-2 gap-2 ">
                    @foreach ($posts as $post)
                        <div
                            class=" mx-auto my-auto px-5 py-4 bg-white dark:bg-gray-800 shadow rounded-lg w-full">

                            <div class="flex mb-4 justify-between">
                                @if (auth()->user()->detailUser()->first()->photo != null)
                                    <img src="{{ url(Storage::url($post->user()->detailUser()->photo)) }}"
                                        alt="photo profile" class="w-16 h-16 rounded-full">
                                @else
                                    <svg class="inline ml-3 h-12 w-12 rounded-full text-gray-300" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                @endif

                                <div class="ml-2 mt-0.5">
                                    <span
                                        class="block font-medium text-base leading-snug text-black dark:text-gray-100">{{ $post->user->name }}</span>
                                    <span
                                        class="block text-sm text-gray-500 dark:text-gray-400 font-light leading-snug">{{ $post->created_at->format('d M Y') }}</span>
                                </div>

                                <div class="flex justify-self-end align-top">

                                    <td class="text-right">
                                        <div class="relative inline-block">
                                            <button class="more-menu-button focus:outline-none">
                                                <svg class="h-6 w-6 fill-current text-gray-700"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <title>More</title>
                                                    <circle cx="3" cy="10" r="2" />
                                                    <circle cx="10" cy="10" r="2" />
                                                    <circle cx="17" cy="10" r="2" />
                                                </svg>
                                            </button>
                                            <div id="moreMenuContent"
                                                class="more-menu-content absolute mt-2 py-2 w-48 bg-white rounded-md shadow-xl">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                                    id="editButton">Edit</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                                    id="deleteButton">Delete</a>
                                            </div>
                                        </div>
                                    </td>

                                    @section('scripts')
                                        <script>
                                            const moreMenuButton = document.querySelector('.more-menu-button');
                                            const moreMenuContent = document.querySelector('#moreMenuContent');
                                            const editButton = document.querySelector('#editButton');
                                            const deleteButton = document.querySelector('#deleteButton');

                                            moreMenuButton.addEventListener('click', function() {
                                                moreMenuContent.classList.toggle('hidden');
                                            });

                                            editButton.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                window.location.href = "{{ route('posts.edit', $post->id) }}";
                                            });

                                            deleteButton.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                if (confirm('Are you sure you want to delete this post?')) {
                                                    document.querySelector('#deleteForm').submit();
                                                }
                                            });
                                        </script>
                                    @endsection

                                    <form action="{{ route('posts.delete', $post->id) }}" method="POST" class="d-none"
                                        id="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </div>


                            </div>
                            <p class="text-gray-800 dark:text-gray-100 leading-snug md:leading-normal">{{ $post->content }}
                            </p>

                            <div class="flex justify-between items-center mt-5">
                                <div class="flex">
                                    <svg class="p-0.5 h-6 w-6 rounded-full z-20 bg-white dark:bg-gray-800 "
                                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
                                        viewBox='0 0 16 16'>
                                        <defs>
                                            <linearGradient id='a1' x1='50%' x2='50%' y1='0%'
                                                y2='100%'>
                                                <stop offset='0%' stop-color='#18AFFF' />
                                                <stop offset='100%' stop-color='#0062DF' />
                                            </linearGradient>
                                            <filter id='c1' width='118.8%' height='118.8%' x='-9.4%'
                                                y='-9.4%' filterUnits='objectBoundingBox'>
                                                <feGaussianBlur in='SourceAlpha' result='shadowBlurInner1'
                                                    stdDeviation='1' />
                                                <feOffset dy='-1' in='shadowBlurInner1'
                                                    result='shadowOffsetInner1' />
                                                <feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1'
                                                    k3='1' operator='arithmetic' result='shadowInnerInner1' />
                                                <feColorMatrix in='shadowInnerInner1'
                                                    values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0' />
                                            </filter>
                                            <path id='b1' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z' />
                                        </defs>
                                        <g fill='none'>
                                            <use fill='url(#a1)' xlink:href='#b1' />
                                            <use fill='black' filter='url(#c1)' xlink:href='#b1' />
                                            <path fill='white'
                                                d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z' />
                                        </g>
                                    </svg>
                                    <span class="ml-1 text-gray-500 dark:text-gray-400  font-light">8</span>
                                </div>
                                <div class="ml-1 text-gray-500 dark:text-gray-400 font-light">33 comments</div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

            {{-- ulasan buku --}}
            <div class="lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold mb-1">Ulasan Buku 📚</h1>
                    <p class="leading-8 text-serv-text mb-10">
                        Ulasan buku, mengulas wawasan, mengulas diri
                    </p>
                </div>
                <a href="{{ route('articles.create') }}">
                    <button class="bg-serv-button text-white text-lg font-semibold py-4 px-8 my-2 rounded-lg">+
                        Buat
                        Ulasan</button>
                </a>
                <div class="grid grid-cols-1 gap-4">
                    <!-- component -->
                    @foreach ($articles as $article)
                        <section class="bg-white dark:bg-gray-900 rounded-lg">
                            <div class="container px-6 py-10 mx-auto ">
                                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                                    <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                                        src="{{ url(Storage::url($article->image)) }}"alt="">


                                    <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                                        <p class="text-sm text-blue-500 uppercase">Review</p>

                                        <a href="#"
                                            class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                                            {{ $article->title }}
                                        </a>

                                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                                            {{ $article->body }}
                                        </p>

                                        <a href="#"
                                            class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read
                                            more</a>

                                        <div class="flex items-center mt-6">
                                            <img class="object-cover object-center w-10 h-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                                alt="">

                                            <div class="mx-4">
                                                <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia.
                                                    Anderson</h1>
                                                <p class="text-sm text-gray-500 dark:text-gray-400">Lead
                                                    Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach
                </div>


            </div>
        </div>
    </div>


@endsection
