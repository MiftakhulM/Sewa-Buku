

<?php $__env->startSection('title', 'Delete Book'); ?>
    
<?php $__env->startSection('content'); ?>
    <h2>Are you sure to delete book <?php echo e($book->title); ?>? </h2>
        <div class="mt-5">
            <a href="/book-destroy/<?php echo e($book->slug); ?>" class="btn btn-danger me-5">Sure</a>
            <a href="/books" class="btn btn-info">Cancel</a>

        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/book-delete.blade.php ENDPATH**/ ?>