@extends('layouts.app')

@section('title', ' Edit Profile')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Edit Profile ku
                    </h2>
                    <p class="text-sm text-gray-400">
                        Silahkan masukkan data anda dengan benar
                    </p>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <form action="{{ route('member.profile.update', [Auth::user()->id]) }}" method="POST"
                            enctype="multipart/form-data">

                            @method('PUT')
                            @csrf

                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">

                                            <div class="flex items-center mt-1">

                                                @if (auth()->user()->detailUser()->first()->photo != null)
                                                    <img src="{{ url(Storage::url(auth()->user()->detailUser()->first()->photo)) }}"
                                                        alt="photo profile" class="w-16 h-16 rounded-full">
                                                @else
                                                    <span
                                                        class="inline-block w-16 h-16 overflow-hidden bg-gray-100 rounded-full">
                                                        <svg class="w-full h-full text-gray-300" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                        </svg>
                                                    </span>
                                                @endif

                                                <label for="choose"
                                                    class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">Choose
                                                    File</label>

                                                <input type="file" accept="image/*" id="choose" name="photo" hidden>

                                                <a href="{{ route('member.delete.photo.profile') }}" type="button"
                                                    class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-red-700 bg-transparent rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                                                    onclick="return confirm('Are you sure want to delete your photo?')">
                                                    Delete
                                                </a>
                                            </div>

                                            @if ($errors->has('photo'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('photo') }}</p>
                                            @endif

                                        </div>

                                        <div class="md:col-span-6 lg:col-span-3">
                                            <label for="name" class="block mb-3 font-medium text-gray-700 text-md">Nama
                                                Lengkap</label>

                                            <input placeholder="Nama Anda..." type="text" name="name" id="name"
                                                autocomplete="name"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $user->name ?? '' }}" required>

                                            @if ($errors->has('name'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>

                                        <div class="md:col-span-6 lg:col-span-3">
                                            <label for="highlight"
                                                class="block mb-3 font-medium text-gray-700 text-md">Highlight Kamu</label>

                                            <input placeholder="Ambisius/si paling baca..." type="text" name="highlight"
                                                id="highlight" autocomplete="highlight"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $user->detailUser->highlight ?? '' }}">

                                            @if ($errors->has('highlight'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('highlight') }}</p>
                                            @endif
                                        </div>

                                        <div class="md:col-span-6 lg:col-span-3">
                                            <label for="email"
                                                class="block mb-3 font-medium text-gray-700 text-md">Alamat Email</label>

                                            <input placeholder="your email" type="email" name="email" id="email"
                                                autocomplete="email"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $user->email ?? '' }}" required>

                                            @if ($errors->has('email'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>

                                        <div class="md:col-span-6 lg:col-span-3">
                                            <label for="contact_number"
                                                class="block mb-3 font-medium text-gray-700 text-md">Nomor Kontak</label>

                                            <input placeholder="your contact number" type="number" name="contact_number"
                                                id="contact_number" autocomplete="contact_number"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $user->detailUser->contact_number ?? '' }}" required>

                                            @if ($errors->has('contact_number'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('contact_number') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="biography"
                                                class="block mb-3 font-medium text-gray-700 text-md">Biografi</label>

                                            <textarea placeholder="Enter your biography here.." type="text" name="biography" id="biography"
                                                autocomplete="biography"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm"
                                                rows="4">{{ $user->detailUser->biography ?? '' }}</textarea>

                                            @if ($errors->has('biography'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('biography') }}</p>
                                            @endif
                                        </div>

                                        {{-- <div class="col-span-6">
                                            <label for="experience" class="block mb-3 font-medium text-gray-700 text-md">My Experience</label>

                                            @forelse ($experience_user as $key => $item)
                                                <input placeholder="More than 9 years of experience" type="text" name="{{ 'experience['.$item->id.']' }}" id="{{ 'experience['.$item->id.']' }}" autocomplete="{{ 'experience['.$item->id.']' }}" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm" value={{ $item->experience }}>

                                                @if ($errors->has('experience[' . $item->id . ']'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('experience') }}</p>
                                                @endif
                                            @empty
                                                <input placeholder="More than 9 years of experience" type="text" name="experience[]" id="experience" autocomplete="experience" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm">

                                                @if ($errors->has('experience'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('experience') }}</p>
                                                @endif

                                                <input placeholder="More than 9 years of experience" type="text" name="experience[]" id="experience" autocomplete="experience" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm">

                                                @if ($errors->has('experience'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('experience') }}</p>
                                                @endif

                                                <input placeholder="More than 9 years of experience" type="text" name="experience[]" id="experience" autocomplete="experience" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-green-500 sm:text-sm">

                                                @if ($errors->has('experience'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('experience') }}</p>
                                                @endif
                                            @endforelse

                                        </div> --}}
                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href={{ route('member.dashboard.index') }} type="button"
                                        class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                                        onclick="return confirm('Are you sure want to cancel?, Any changes you make will not be saved.')">
                                        Cancel
                                    </a>

                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-purple-500 border border-transparent rounded-lg shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500"
                                        onclick="return confirm('Are you sure want to submit this data ?')">
                                        Simpan Perubahan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection
