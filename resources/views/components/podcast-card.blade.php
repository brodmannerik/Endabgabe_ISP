@props(['podcast'])

<x-card>
    <div class="flex" x-data="playaudio()">
        <img
            class="hidden w-48 mr-6 md:block max-h-[12rem] max-w-[12rem] object-cover"
            src="{{$podcast->logo ? asset('storage/' . $podcast->logo) : asset('images/logo.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl text-white hover:text-green">
                <a href="/podcasts/{{$podcast->id}}">{{$podcast->title}}</a>
            </h3>
            <div class="text-grey text-xl font-bold mb-4">{{$podcast->host}}</div>
            <div class="text-grey text-lg mb-6 flex" x-data="{ open: false }" @my-custom-event="open = $event.detail">
                <button class="py-2 hover:text-white" x-on:click="open = ! open" id="play_button" @keydown.tab="playAndStop" @click="playAndStop">
                    <i class="fa-solid fa-circle-play fa-xl" x-show="!open"></i>
                    <i class="fa-solid fa-circle-pause fa-xl" x-show="open"></i>
                </button>
                <div class="flex flex-1 items-center pl-4" x-data="range()" x-init="maxtrigger()">
                    <i class="fa-solid fa-volume-low text-grey"></i>

                    <input type="range"
                           step="0.05"
                           x-bind:min="min"
                           x-bind:max="max"
                           x-on:input="maxtrigger"
                           x-model="maxprice"
                           class="2xl:w-40 lg:w-32 md:w-32 h-1 mx-2 accent-green">

                    <i class="fa-solid fa-volume-up text-grey"></i>
                </div>
                <audio id="music_player" x-ref="audio">
                    <source src="{{ $podcast->file_name ? asset('storage/' . $podcast->file_name) : asset('sound/soundFileExample.mp3')  }}" type="audio/mp3" id="audio">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <x-podcast-tags :tagsCsv="$podcast->tags" ></x-podcast-tags>
        </div>
    </div>
    <script>
        function playaudio() {
            return {
                currentlyPlaying: false,

                playAndStop() {

                    document.addEventListener("play", function(event) {
                        audioElements = document.getElementsByTagName("audio");
                        //allPlayerIcons = document.getElementsByClassName("fa-circle-play");
                        //allPauseIcons = document.getElementsByClassName("fa-circle-pause");

                        for( i = 0; i < audioElements.length; i++) {
                            audioElement = audioElements[i];
                            //playButton = allPlayerIcons[i];
                            //pauseButton = allPauseIcons[i];

                            if (audioElement !== event.target) {
                                audioElement.pause();
                            }

                            //console.log("E", event.target);
                            //console.log("E+", event.target.previousSibling.previousSibling.previousSibling.previousSibling);
                            /*if(playButton.style.cssText.includes("display: none") !== event.target.previousSibling.previousSibling.previousSibling.previousSibling) {
                                console.log("yes");
                                playButton.style.cssText = "";
                                pauseButton.style.cssText = "display: none";
                            }*/

                            //console.log("playButton", playButton.style.cssText)
                            //console.log("pauseButton", pauseButton.style.cssText)
                        }
                    }, true);

                    if (this.currentlyPlaying) {
                        this.$refs.audio.pause();
                        this.$refs.audio.currentTime = 0;
                        this.currentlyPlaying = false;
                    } else {
                        this.$refs.audio.play();
                        this.currentlyPlaying = true;
                    }
                },
            }
        }

        function range() {
            return {
                maxprice: 0.3,
                min: 0,
                max: 1,
                minthumb: 0,
                maxthumb: 0,

                maxtrigger() {
                    this.$refs.audio.volume = this.maxprice;
                },
            }
        }
    </script>
</x-card>
