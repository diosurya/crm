

<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Projects</h1>
</div>

<div class="table-responsive">
    <a href="<?php echo e(url('dashboard/projects/create')); ?>" class="btn btn-sm btn-primary mb-3">Add Projects</a>

    <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Lead</th>
                <th>Manager</th>
                <th>Created By</th>
                <th>Status</th>
                <?php if(auth()->user()->role !== 'staff'): ?>
                <th>Action</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($project->id); ?></td>
                <td><?php echo e($project->lead->name); ?></td>
                <td><?php echo e($project->manager->name); ?></td>
                <td><?php echo e($project->by->name); ?></td>
                <td>
                    <?php if($project->project_status == 'pending'): ?>
                    <span class="badge bg-warning"><?php echo e($project->project_status); ?></span>
                    <?php elseif($project->project_status == 'approved'): ?>
                    <span class="badge bg-success"><?php echo e($project->project_status); ?></span>
                    <?php else: ?>
                    <span class="badge bg-danger"><?php echo e($project->project_status); ?></span>
                    <?php endif; ?>
                </td>
                <?php if(auth()->user()->role !== 'staff'): ?>
                <td>
                    <?php if($project->project_status == 'pending'): ?>
                        <a href="<?php echo e(route('projects.approve', $project->id)); ?>" class="btn btn-sm btn-success">Approve</a>
                        <a href="<?php echo e(route('projects.reject', $project->id)); ?>" class="btn btn-sm btn-danger">Reject</a>
                    <?php endif; ?>
                </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/dashboard/projects/index.blade.php ENDPATH**/ ?>