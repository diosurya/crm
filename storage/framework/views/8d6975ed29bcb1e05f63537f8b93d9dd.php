

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Customers</h1>
</div>


<div class="table-responsive">
    

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
                <th>Customer Name</th>
                <th>Subscriptions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($customer->id); ?></td>
                <td><?php echo e($customer->lead->name); ?></td>
                <td>
                    <ul>
                        <?php $__currentLoopData = $customer->subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($subscription->product->name); ?> (<?php echo e($subscription->start_date); ?> - <?php echo e($subscription->end_date ?? 'Ongoing'); ?>)</li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/dashboard/customers/index.blade.php ENDPATH**/ ?>