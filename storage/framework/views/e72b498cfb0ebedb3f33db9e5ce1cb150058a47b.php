<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        green: "#10FF28",
                        background: "#161616",
                        card: "#1E1E1E",
                        white: "#FFFFFF",
                        grey: "#7E7E7E",
                        yellow: "#FAFF10"
                    },
                    maxHeight: {
                        '12': '12rem',
                    }
                },
            },
        };
    </script>

    <title>HearOut</title>

</head>
<body class="bg-background mb-28">
<nav class="flex justify-between items-center mb-4">
    <div class="flex items-center space-x-6">
        <?php if(auth()->guard()->check()): ?>
        <a href="/">
            <img class="w-24 ml-6" src="<?php echo e(asset('images/logoHeaderSm.png')); ?>" alt=""/>
        </a>
        <a href="/">
            <img class="w-42" src="<?php echo e(asset('images/HearOut.png')); ?>" alt="" />
        </a>
        <?php else: ?>
        <a href="/">
            <img class="w-24 ml-6" src="<?php echo e(asset('images/logoHeaderSm.png')); ?>" alt=""/>
        </a>
        <?php endif; ?>
    </div>
    <ul class="flex space-x-6 mr-7 text-lg">
        <?php if(auth()->guard()->check()): ?>
        <li>
            <span class="text-grey">
                Hi <?php echo e(auth()->user()->name); ?>

            </span>
        </li>
        <li>
            <a href="/podcasts/manage" class="text-grey hover:text-green">
                <i class="fa-solid fa-gear"></i>
            </a>
        </li>
        <li>
           <form class="inline text-grey hover:text-yellow pr-6" method="POST" action="/logout">
               <?php echo csrf_field(); ?>
               <button type="submit">
                   <i class="fa-solid fa-door-closed"></i>
               </button>
           </form>
        </li>
        <?php else: ?>
        <li>
            <a href="/register" class="text-grey hover:text-green">
                <i class="fa-solid fa-user-plus"></i></a>
        </li>
        <li>
            <a href="/login" class="text-grey hover:text-yellow pr-6">
                <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
        </li>
        <?php endif; ?>
    </ul>
</nav>
<main>
    <?php echo e($slot); ?>

    <?php if(optional(auth()->user())->paid_member === 0): ?>
        <form action="/checkout" method="POST">
            <div class="flex justify-center">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <button class="bg-none text-grey" type="submit">Unpaid Version</button>
            </div>
        </form>
    <?php endif; ?>
</main>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<footer>

</footer>
</body>
</html>
<?php /**PATH /Users/erik/Documents/WebAnwendungInternetServerProgrammierung/first-app/resources/views/components/layout.blade.php ENDPATH**/ ?>