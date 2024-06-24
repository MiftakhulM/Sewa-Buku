<div>
    <table class="table">
        <thead class="">
            <tr class="">
                <th>No.</th> 
                <th>User</th>
                <th>Book</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $rentlog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php
                    $rowClass = '';
                    if ($item->actual_return_date) {
                        $rowClass = $item->return_date < $item->actual_return_date ? 'text-bg-danger' : 'text-bg-success';
                    }
                ?>
            <tr class="<?php echo e($rowClass); ?>">
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->user ? $item->user->username : 'User Banned'); ?></td>
                <td><?php echo e($item->book ? $item->book->title : 'Book Deleted'); ?></td>
                <td><?php echo e($item->rent_date); ?></td>
                <td><?php echo e($item->return_date); ?></td>
                <td><?php echo e($item->actual_return_date ?? 'Belum dikembalikan'); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/components/rent-log-table.blade.php ENDPATH**/ ?>