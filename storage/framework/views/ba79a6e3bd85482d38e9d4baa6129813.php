

<?php $__env->startSection('title', 'Users'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>New Registered User List</h1>

    <div class="my-5 d-flex justify-content-end">
        <a href="/users" class="btn btn-primary">Approved User List</a>
    </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $registeredUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="/user-detail/<?php echo e($item->slug); ?>" class="btn btn-info btn-sm">detail</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/registered-user.blade.php ENDPATH**/ ?>