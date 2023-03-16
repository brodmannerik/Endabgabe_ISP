<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div
        class="bg-background p-10 rounded max-w-lg mx-auto mt-10"
    >
        <header class="text-center">
            <h2 class="text-2xl text-yellow font-bold mb-5">
                Edit <?php echo e($podcast->title); ?>

            </h2>
        </header>

        <form method="POST" action="/podcasts/<?php echo e($podcast->id); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-6">
                <label
                    for="host"
                    class="inline-block text-lg text-white mb-2"
                >Podcast Creator
                </label>
                <input
                    type="text"
                    class="text-white bg-background border border-yellow rounded p-2 w-full"
                    name="host"
                    placeholder="the creator of the podcast"
                    value="<?php echo e($podcast->host); ?>"
                />

                <?php $__errorArgs = ['host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg text-white mb-2"
                >Podcast Title</label>
                <input
                    type="text"
                    class="text-white border bg-background border-yellow rounded p-2 w-full"
                    name="title"
                    placeholder="the title of the podcast"
                    value="<?php echo e($podcast->title); ?>"
                />

                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg text-white mb-2">Podcast Location</label>
                <input
                    type="text"
                    class="text-white bg-background border border-yellow rounded p-2 w-full"
                    name="location"
                    placeholder="Berlin, GER"
                    value="<?php echo e($podcast->location); ?>"
                />

                <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg text-white mb-2"
                >Podcast Email</label
                >
                <input
                    type="text"
                    class="text-white bg-background border border-yellow rounded p-2 w-full"
                    name="email"
                    placeholder="email"
                    value="<?php echo e($podcast->email); ?>"
                />

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label
                    for="website"
                    class="inline-block text-lg text-white mb-2"
                >
                    Podcast Website
                </label>
                <input
                    type="text"
                    class="text-white bg-background border border-yellow rounded p-2 w-full"
                    name="website"
                    placeholder="the website of the podcast"
                    value="<?php echo e($podcast->website); ?>"
                />

                <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg text-white mb-2">
                    Podcast Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="text-white bg-background border border-yellow rounded p-2 w-full"
                    name="tags"
                    placeholder="politics, science.."
                    value="<?php echo e($podcast->tags); ?>"
                />

                <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg text-white mb-2">
                    Podcast Logo
                </label>
                <input
                    type="file"
                    class="bg-background text-white border border-yellow rounded p-2 w-full"
                    name="logo"
                />

                <img
                    class="w-100 mr-6 py-10"
                    src="<?php echo e($podcast->logo ? asset('storage/' . $podcast->logo) : asset('images/logo.png')); ?>"
                    alt=""
                />

                <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="file_name" class="inline-block text-lg text-white mb-2">
                    Podcast File
                </label>
                <input
                    type="file"
                    class="bg-background text-white border border-yellow rounded p-2 w-full"
                    name="file_name"
                />

                <?php $__errorArgs = ['file_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg text-white mb-2"
                >
                    Podcast Description
                </label>
                <textarea
                    class="text-white bg-background border border-yellow rounded p-2 w-full"
                    name="description"
                    rows="10"
                ><?php echo e($podcast->description); ?>

                </textarea>

                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-600 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <button
                    class="bg-yellow text-black rounded-[22px] py-4 px-14 hover:bg-green"
                >
                    Update Podcast
                </button>

                <a href="/" class="bg-green text-black rounded-[22px] py-4 px-14 hover:bg-yellow">Back</a>
            </div>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/erik/Documents/WebAnwendungInternetServerProgrammierung/first-app/resources/views/podcasts/edit.blade.php ENDPATH**/ ?>