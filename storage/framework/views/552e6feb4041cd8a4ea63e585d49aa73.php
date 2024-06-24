

<?php $__env->startSection('title', 'Users'); ?>
    
<?php $__env->startSection('content'); ?>
    <h1>User List</h1>

    <div class="my-3 d-flex justify-content-end">
        <a href="/user-banned" class="btn btn-danger me-3">View Banned User</a>
        <a href="/registered-users" class="btn btn-primary">New Registered User</a>
    </div>

    <div class="mt-2">
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
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="/user-detail/<?php echo e($item->slug); ?>" class="btn btn-info btn-sm me-3">detail</a>
                        <a href="/user-ban/<?php echo e($item->slug); ?>" class="btn btn-danger btn-sm">ban user</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/user.blade.php ENDPATH**/ ?>