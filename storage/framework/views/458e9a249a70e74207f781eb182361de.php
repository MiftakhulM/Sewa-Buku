
<?php $__env->startSection('title', 'Books'); ?> 
<?php $__env->startSection('content'); ?>

    <form class="action" method="get">
        <div class="row">
            <div class="col-12 col-sm-6">
                <select name="category" id="category" class="form-control">
                    <option value="">Select Category</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-12 col-sm-6">
                <div class="input-group mb-3">
                    <input type="text" name="title" class="form-control" placeholder="Search book's title">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>

        </div>
    </form>

    <div class="my-1" >
        <div class="row">

            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-3 col md-4 col-sm-6 mb-3">
                    <div class="card h-100" >
                        <img src="<?php echo e($item->cover != null ? asset('storage/cover/' .$item->cover) : asset('images/No cover.png')); ?>"  class="card-img-top" draggable="false">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo e($item->book_code); ?></h5>
                        <p class="card-text"><?php echo e($item->title); ?></p>
                        <p class="card-text text-end fw-bold <?php echo e($item->status == 'in stock' ? 'text-success' : 'text-danger'); ?>" >
                            <?php echo e($item->status); ?>

                        </p>

                        </div>
                    </div>
                </div>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/book-list.blade.php ENDPATH**/ ?>