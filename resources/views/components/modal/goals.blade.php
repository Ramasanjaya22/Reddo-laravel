<div class="hidden modal overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="registerModal">
    <div class="relative w-128 my-6 mx-auto max-w-md">
        <!--content-->
        <div
            class="border-0 rounded-xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">

            <!--header-->
            <div class="p-5 rounded-t-xl text-center mt-2 mx-10">
                <h3 class="text-2xl font-semibold text-primary">
                    Buat Reading Goal!
                </h3>
                <p class="text-gray-400 text-2xl">
                    Ikuti Reddo Book Years Challange 2022
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <!--body-->
                <div class="relative p-6 flex-auto mx-10">
                    <div class="mb-2">
                        <label class="block text-grey-darker text-sm mb-2" for="goal">
                            Aku ingin membaca buku sebanyak
                        </label>

                        <input name="goal"
                            class="appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 placeholder-serv-text text-xs"
                            id="goal" type="text" placeholder="100" required>

                        @if ($errors->has('goal'))
                            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('goal') }}</p>
                        @endif
                    </div>

                </div>

                <!--footer-->
                <div class="px-6 pb-2 rounded-b-xl mx-6">
                    <input type="hidden" name="auth" value="true">
                    <button class="block text-center bg-serv-button text-white text-lg py-3 px-12 rounded-lg w-full">
                        Selanjutnya
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="hidden opacity-75 fixed inset-0 z-40 bg-black" id="registerModal-backdrop"></div>
