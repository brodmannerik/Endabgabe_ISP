<?php if(session()->has('success')): ?>
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 2000)"
         class="fixed top-0 left-1/2 transform
    -translate-x-1/2 bg-green text-background px-48 py-6 rounded-xl"
        x-show="show"
        >
        <p>
            <?php echo e(session('success')); ?>

        </p>
    </div>
<?php endif; ?>
<?php /**PATH /Users/erik/Documents/WebAnwendungInternetServerProgrammierung/first-app/resources/views/components/flash-message.blade.php ENDPATH**/ ?>