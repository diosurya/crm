<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('/')); ?>">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <?php if(auth()->user()->role == 'admin'): ?>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/users*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/users')); ?>">
            <span data-feather="file-text"></span>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/leads*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/leads')); ?>">
            <span data-feather="file-text"></span>
            Leads
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/products*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/products')); ?>">
            <span data-feather="file-text"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/projects*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/projects')); ?>">
            <span data-feather="file-text"></span>
            Projects
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/subscriptions*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/subscriptions')); ?>">
            <span data-feather="file-text"></span>
            Subscriptions
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::is('dashboard/customers*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/customers')); ?>">
            <span data-feather="file-text"></span>
            Customers
          </a>
        </li>

      <?php elseif(auth()->user()->role == 'manager'): ?>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/leads*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/leads')); ?>">
          <span data-feather="file-text"></span>
          Leads
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/products*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/products')); ?>">
          <span data-feather="file-text"></span>
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/projects*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/projects')); ?>">
          <span data-feather="file-text"></span>
          Projects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/subscriptions*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/subscriptions')); ?>">
          <span data-feather="file-text"></span>
          Subscriptions
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/customers*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/customers')); ?>">
          <span data-feather="file-text"></span>
          Customers
        </a>
      </li>
      

      <?php else: ?>

      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/leads*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/leads')); ?>">
          <span data-feather="file-text"></span>
          Leads
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/products*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/products')); ?>">
          <span data-feather="file-text"></span>
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/projects*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/projects')); ?>">
          <span data-feather="file-text"></span>
          Projects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard/subscriptions*') ? 'active' : ''); ?>" href="<?php echo e(url('dashboard/subscriptions')); ?>">
          <span data-feather="file-text"></span>
          Subscriptions
        </a>
      </li>

     <?php endif; ?>
    </ul>
    </div>
  </nav><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>