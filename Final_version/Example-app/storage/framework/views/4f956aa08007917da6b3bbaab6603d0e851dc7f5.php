<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <?php if(auth()->guard()->check()): ?>

                    <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="align-items-center">
        <div class="paper" style="background: white">
            <div class="card p-3 py-4">
                <div class="text-center"> <img src="/img/profilepic.jpg" width="100" class="rounded-circle"> </div>
                <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white">Profil</span>
                    <h5 class="mt-2 mb-0"><?php echo e(Auth::user()->name); ?></h5> <span>E-mail: <?php echo e(Auth::user()->email); ?></span>
                    <div class="px-4 mt-1">
                        <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                 </div>
            </div>
        </div>
        </div>
    </div>
</div>

                     <!--       <h1>Személyes adatok:</h1>
                        <p>Név: <?php echo e(Auth::user()->name); ?></p>
                        <p>E-mail: <?php echo e(Auth::user()->email); ?></p>
                    -->     
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/Example-app/resources/views/dashboard.blade.php ENDPATH**/ ?>