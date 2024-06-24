

<?php $__env->startSection('title', 'Rent Logs'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Rent Log List</h1>

    <div class="mt-5">
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

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/rentlog.blade.php ENDPATH**/ ?>