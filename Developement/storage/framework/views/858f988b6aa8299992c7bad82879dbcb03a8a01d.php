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
    <div class="container">
        <div class="row">
            <div class="col-sm-6 banner-info">
                <h1>XY vállalat</h1>
                <p class="big-text">Programtervező informatikusokat keresünk!!!</p>
                <p>Ha érdekel, akkor töltsd fel az önéletrajzod.</p>
                <?php if(Route::has('login')): ?>
                    <div>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/dashboard')); ?>" class="btn btn-primary btn-lg" >Dashboard</a>
                            <?php else: ?>

                            <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary btn-lg">Belépés</a>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary btn-lg">Regisztráció</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-sm-6 banner-image" >
                <img src="/img/meeting-gf53a7d63f_6401.jpg" class="img.responsive" style="border-radius: 10%; box-shadow: 3px 7px 60px 10px #000000;">
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Berta Erik\Downloads\RTT-B-Csoport-Beadando-main\RTT-B-Csoport-Beadando-main\Final_version\Example-app\resources\views/welcome.blade.php ENDPATH**/ ?>