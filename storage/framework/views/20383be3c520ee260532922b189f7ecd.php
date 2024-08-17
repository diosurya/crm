<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel <?php echo e($title); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss','resources/js/app.js']); ?>
  </head>
  <body>
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <div class="container mt-4">
      <?php echo $__env->yieldContent('container'); ?>
    </div>
  </body>
</html><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/layouts/main.blade.php ENDPATH**/ ?>