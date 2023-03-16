<div
    class="fixed h-24 w-full bottom-0 left-0 right-0 flex animate-slideup bg-gradient-to-br from-white/10 to-lightgray backdrop-blur-lg rounded-t-3xl z-10"
>
    <div class="relative sm:px-12 px-8 w-full flex items-center justify-between">
        <div class="flex-1 flex items-center justify-start">
            <div class="hidden sm:block h-16 w-16 mr-4">
                <img alt="cover art" src="{{asset('images/logo.png')}}">
            </div>
            <div class="w-[50%]">
                <p class="truncate text-white font-bold text-lg">No active Podcast</p>
                <p class="truncate text-gray-300">No active Podcast</p>
            </div>
        </div>
        <div class="flex-1 flex flex-col items-center justify-center">
            <div class="flex items-center justify-around md:w-36 lg:w-52 2xl:w-80">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" color="white"
                     class="hidden sm:block cursor-pointer" height="20" width="20"
                     xmlns="http://www.w3.org/2000/svg" style="color: white;">
                    <path
                        d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z">
                    </path>
                    <path fill-rule="evenodd"
                          d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z">
                    </path>
                </svg>


                <button>
                    <i class="fa-solid fa-play fa-xl text-white"></i>
{{--                <i class="fa-solid fa-play fa-xl text-white" x-show="!open"></i>--}}
{{--                <i class="fa-solid fa-pause fa-xl text-white" x-show="open"></i>--}}
                </button>

                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" color="white"
                     class="hidden sm:block cursor-pointer" height="20" width="20"
                     xmlns="http://www.w3.org/2000/svg" style="color: white;">
                    <path fill-rule="evenodd"
                          d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z"></path>
                    <path
                        d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"></path>
                </svg>
            </div>
            <div class="hidden sm:flex flex-row items-center pt-1">
                <p class="text-white" id="current-time">0:00</p>

                <input type="range"
                       step="any"
                       min="0"
                       max="0"
                       class="md:block w-24 md:w-56 2xl:w-96 h-1 mx-4 2xl:mx-6 rounded-lg accent-green"
                       value="0"
                       id="seek-slider"
                >

                <p class="text-white" id="duration">0:00</p>
            </div>
            <audio>
            </audio>
        </div>
        <div class="hidden lg:flex flex-1 items-center justify-end">
            <i class="fa-solid fa-volume-low text-white"></i>

            <input
                type="range"
                step="0.05"
                min="0"
                max="1"
                id="change_vol"
                class="2xl:w-40 lg:w-32 md:w-32 h-1 ml-2 accent-green"
                value="0.3"
{{--            onchange="change_vol(document.getElementById('music_player'), document.getElementById('change_vol'))"--}}
            >
        </div>
    </div>
</div>
