<x-layout>
    <div class="flex flex-wrap">
        <div
            class="bg-background p-10 max-w-lg mx-auto mt-40"
        >
        <form method="POST" action="/users/authenticate">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-white text-lg mb-2">Email</label>
                <input
                    type="email"
                    class="bg-background border border-yellow rounded p-2 w-full text-white focus:ring-green focus:border-green"
                    name="email"
                    value="{{old('email')}}"
                />

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-10">
                <label
                    for="password"
                    class="inline-block text-white text-lg mb-2"
                >
                    Password
                </label>
                <input
                    type="password"
                    class="bg-background border border-yellow rounded p-2 w-full text-white"
                    name="password"
                    value="{{old('password')}}"
                />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class="bg-yellow text-black rounded-[22px] py-4 px-14 hover:bg-green"
                >
                    Sign In
                </button>
            </div>

        </form>
    </div>
        <div class="max-w-lg max-h-lg mt-20 mr-20 lg:mr-40 2xl:mr-80 invisible md:visible lg:visible xl:visible 2xl:visible">
            <img class="" src="{{asset('images/registerBackground.png')}}" alt=""/>
        </div>
    </div>
</x-layout>
