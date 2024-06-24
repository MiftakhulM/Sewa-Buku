

<?php $__env->startSection('title', 'Delete User'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .centered-top-container {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        margin-top: 100px; /* Adjust this value to set the distance from the navbar */
    }

    .centered-top-container h2 {
        margin-bottom: 20px;
    }

    .button-container {
        display: flex;
        gap: 20px;
    }

    .btn-danger, .btn-info {
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        color: white;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-danger:hover, .btn-info:hover {
        opacity: 0.8;
    }
</style>

<div class="centered-top-container">
    <h2>Are you sure to delete user <?php echo e($user->username); ?>?</h2>
    <div class="button-container mt-5">
        <a href="/user-destroy/<?php echo e($user->slug); ?>" class="btn btn-danger me-5">Sure</a>
        <a href="/users" class="btn btn-warning">Cancel</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\book_rent\resources\views/user-delete.blade.php ENDPATH**/ ?>