

<?php $__env->startSection('title', 'Banned Users'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>Banned User List</h1>


    <div class="mt-5">
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
    </div>

    <div class="my-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $bannedUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->username); ?></td>
                    <td>
                            <?php if($item->phone): ?>
                                <?php echo e($item->phone); ?>

                            <?php else: ?>
                                -
                            <?php endif; ?>
                    </td>
                    <td>
                        <a href="/user-restore/<?php echo e($item->slug); ?>" class="btn btn-warning btn-sm">Restore</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/user-banned.blade.php ENDPATH**/ ?>