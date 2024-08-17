

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Products</h1>
</div>

<div class="table-responsive">
    <?php if(auth()->user()->role !== 'staff'): ?>
    <a href="<?php echo e(url('dashboard/products/create')); ?>" class="btn btn-sm btn-primary mb-3">Add Products</a>
    <?php endif; ?>

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
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <?php if(auth()->user()->role !== 'staff'): ?>
          <th scope="col">Actioin</th>
          <?php endif; ?>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->description); ?></td>
            <td><?php echo e($product->price); ?></td>
            <?php if(auth()->user()->role !== 'staff'): ?>
            <td>
                <form action="<?php echo e(route('leads.destroy', $product->id)); ?>" method="POST">
                <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-sm btn-warning"><span data-feather="edit-3"></span></a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-sm btn-danger"><span data-feather="trash"></span></button>
            </td>
            <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/dashboard/products/index.blade.php ENDPATH**/ ?>