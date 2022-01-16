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
    <div class="files color form-group mb-3">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong><?php echo e($message); ?></strong>
        </div>
        <img src="uploads/<?php echo e(Session::get('file')); ?>">
        <?php endif; ?>
        <!-- <<?php if(count($errors)> 0): ?> -->
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <!-- <?php endif; ?> -->
        <form action="<?php echo e(route('file.upload.post')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div>
                <input type="file" multiple name="file" class="form-control">
            </div>
            <div">
                <button type="submit" class="btn btn-success" style="margin-left: 45%">Upload File</button>
    </div>
    </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js">
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/Example-app/resources/views/upload.blade.php ENDPATH**/ ?>