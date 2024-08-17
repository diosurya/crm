

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Subscriptions</h1>
</div>


<div class="table-responsive">
    <a href="<?php echo e(url('dashboard/subscriptions/create')); ?>" class="btn btn-sm btn-primary mb-3">Add Subscriptions</a>

    <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>


    <table class="table table-striped table-sm mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($subscription->id); ?></td>
                <td><?php echo e($subscription->customer->lead->name); ?></td> <!-- Asumsi customer terkait dengan lead -->
                <td><?php echo e($subscription->product->name); ?></td>
                <td><?php echo e($subscription->start_date); ?></td>
                <td><?php echo e($subscription->end_date ?? 'Ongoing'); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/dashboard/subscriptions/index.blade.php ENDPATH**/ ?>