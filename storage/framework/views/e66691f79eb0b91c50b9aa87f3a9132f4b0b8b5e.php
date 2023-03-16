<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['podcast']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['podcast']); ?>
<?php foreach (array_filter((['podcast']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex" x-data="playaudio()">
        <img
            class="hidden w-48 mr-6 md:block max-h-[12rem] max-w-[12rem] object-cover"
            src="<?php echo e($podcast->logo ? asset('storage/' . $podcast->logo) : asset('images/logo.png')); ?>"
            alt=""
        />
        <div>
            <h3 class="text-2xl text-white hover:text-green">
                <a href="/podcasts/<?php echo e($podcast->id); ?>"><?php echo e($podcast->title); ?></a>
            </h3>
            <div class="text-grey text-xl font-bold mb-4"><?php echo e($podcast->host); ?></div>
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
                    <source src="<?php echo e($podcast->file_name ? asset('storage/' . $podcast->file_name) : asset('sound/soundFileExample.mp3')); ?>" type="audio/mp3" id="audio">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.podcast-tags','data' => ['tagsCsv' => $podcast->tags]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('podcast-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tagsCsv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($podcast->tags)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/erik/Documents/WebAnwendungInternetServerProgrammierung/first-app/resources/views/components/podcast-card.blade.php ENDPATH**/ ?>