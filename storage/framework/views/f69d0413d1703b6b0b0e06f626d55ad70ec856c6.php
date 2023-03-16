<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex flex-wrap">

    <div
        class="bg-background p-10 max-w-lg mx-auto mt-20"
    >
        <form method="POST" action="/users">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="name" class="inline-block text-white text-lg mb-2">
                    Name
                </label>
                <input
                    type="text"
                    class="bg-background border border-yellow rounded p-2 w-full text-white focus:ring-green focus:border-green"
                    name="name"
                    value="<?php echo e(old('name')); ?>"
                />

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="email" class="inline-block text-white text-lg mb-2">Email</label>
                <input
                    type="email"
                    class="bg-background border border-yellow rounded p-2 w-full text-white"
                    name="email"
                    value="<?php echo e(old('email')); ?>"
                />

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
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
                    value="<?php echo e(old('password')); ?>"
                />

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-5">
                <label
                    for="password2"
                    class="inline-block text-white text-lg mb-2"
                >
                    Confirm Password
                </label>
                <input
                    type="password"
                    class="bg-background border border-yellow rounded p-2 w-full text-white"
                    name="password_confirmation"
                    value="<?php echo e(old('password_confirmation')); ?>"
                />

                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mt-4">
                <input required type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1" class="text-white ml-2">Agree the terms and conditions</label>
            </div>

            <div class="mt-10 mb-6">
                <button
                    type="submit"
                    class="bg-yellow text-black rounded-[22px] py-4 px-14 hover:bg-green"
                >
                    Sign Up
                </button>
            </div>

        </form>
    </div>
        <div class="max-w-lg max-h-lg mt-20 mr-20 lg:mr-40 2xl:mr-80 invisible md:visible lg:visible xl:visible 2xl:visible">
            <img class="" src="<?php echo e(asset('images/registerBackground.png')); ?>" alt=""/>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /Users/erik/Documents/WebAnwendungInternetServerProgrammierung/first-app/resources/views/users/register.blade.php ENDPATH**/ ?>