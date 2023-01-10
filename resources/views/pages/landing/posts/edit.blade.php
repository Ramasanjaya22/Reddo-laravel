@extends('layouts.front')

@section('title', ' Edit Post')

@section('content')
    <div class="content">
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="mx-auto px-4">
                <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8">
                    <div class="w-full max-w-lg  mx-auto">
                        <div class="card rounded-lg shadow">
                            <div class="card-header bg-white font-bold py-4 px-6 border-b border-gray-300">
                                Edit Post
                            </div>


                            @foreach ($posts as $post)


                            <form
                            action="{{ route('posts.update', $post->id) }}"
                            method="POST" class="card-body bg-white p-6" >
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <div class="flex items-center mb-2">
                                        {{-- validation photo --}}
                                        @if (auth()->user()->detailUser()->first()->photo != null)
                                            <img class="inline ml-3 h-12 w-12 rounded-full"
                                                src="{{ url(Storage::url(auth()->user()->detailUser()->first()->photo)) }}"
                                                alt="" loading="lazy" />
                                        @else
                                            <svg class="inline ml-3 h-12 w-12 rounded-full text-gray-300"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        @endif
                                        <div>
                                            <h4 class="font-bold text-xl mb-2">{{ auth()->user()->name }}</h4>
                                            <p class="text-gray-600 text-sm">{{ auth()->user()->username }}</p>
                                        </div>
                                    </div>

                                    <label for="content" class="block text-gray-700 font-bold mb-2">Konten</label>
                                    <textarea id="content" class="form-input w-full @error('content') border-red-500 @enderror" name="content" required>{{ old('content', $post->content) }}</textarea>
                                    @error('content')
                                        <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex justify-between items-center">
                                    <button type="submit" class="btn-blue font-bold py-2 px-4 rounded-full">
                                        Update Post
                                    </button>
                                    <span class="text-gray-600 text-sm font-bold char-count">280 karakter tersisa</span>

                                    <a href="{{ route('posts.landing') }}"
                                        class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        const charCount = document.querySelector('.char-count');
        const contentInput = document.querySelector('#content');
        contentInput.addEventListener('input', updateCharCount);

        function updateCharCount() {
            const charLeft = 280 - contentInput.value.length;
            charCount.textContent = `${charLeft} karakter tersisa`;
        }

        window.addEventListener('load', updateCharCount);
    </script>
@endsection
