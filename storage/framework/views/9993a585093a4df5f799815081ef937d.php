

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Leads</h1>
</div>


<div class="table-responsive">
    <a href="<?php echo e(url('dashboard/leads/create')); ?>" class="btn btn-sm btn-primary mb-3">Add Leads</a>

    <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <table class="table table-striped table-sm mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Company</th>
          <th scope="col">Status</th>
          <th scope="col">Actioin</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($lead->name); ?></td>
            <td><?php echo e($lead->email); ?></td>
            <td><?php echo e($lead->phone); ?></td>
            <td><?php echo e($lead->company); ?></td>
            <td><span class="badge bg-primary"><?php echo e($lead->status); ?></span></td>
            <td>
                <form action="<?php echo e(route('leads.destroy', $lead->id)); ?>" method="POST">
                <a href="<?php echo e(route('leads.edit', $lead->id)); ?>" class="btn btn-sm btn-warning"><span data-feather="edit-3"></span></a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-sm btn-danger"><span data-feather="trash"></span></button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/dashboard/leads/index.blade.php ENDPATH**/ ?>