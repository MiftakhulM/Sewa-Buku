

<?php $__env->startSection('title', 'Users'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Detail User</h1>

    <div class="my-5 d-flex justify-content-end">
        <?php if($user->status == 'inactive'): ?>
            <a href="/user-approve/<?php echo e($user->slug); ?>" class="btn btn-info">Approve User</a>            
        <?php endif; ?>
    </div>

    <div class="mt-5">
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
    </div>

    <div class="my-5 w-25">
        <div class="my-5">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" readonly value="<?php echo e($user->username); ?>">
        </div>
        <div class="my-5">
            <label for="" class="form-label">Phone</label>
            <input type="text" class="form-control" readonly value="<?php echo e($user->phone); ?>">
        </div>
        <div class="my-5">
            <label for="" class="form-label">Address</label>
            <textarea name="" id="" cols="30" rows="7" class="form-control" style="resize: none"><?php echo e($user->address); ?></textarea>
        </div>
        <div class="my-5">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" readonly value="<?php echo e($user->status); ?>">
        </div>
    </div>

    <div class="mt-5">
        <h2>User's Rent Log</h2>
        <?php if (isset($component)) { $__componentOriginal1c153b08db3e4caa96ee92ea0464379b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c153b08db3e4caa96ee92ea0464379b = $attributes; } ?>
<?php $component = App\View\Components\RentLogTable::resolve(['rentlog' => $rent_logs] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('rent-log-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\RentLogTable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c153b08db3e4caa96ee92ea0464379b)): ?>
<?php $attributes = $__attributesOriginal1c153b08db3e4caa96ee92ea0464379b; ?>
<?php unset($__attributesOriginal1c153b08db3e4caa96ee92ea0464379b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c153b08db3e4caa96ee92ea0464379b)): ?>
<?php $component = $__componentOriginal1c153b08db3e4caa96ee92ea0464379b; ?>
<?php unset($__componentOriginal1c153b08db3e4caa96ee92ea0464379b); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/user-detail.blade.php ENDPATH**/ ?>