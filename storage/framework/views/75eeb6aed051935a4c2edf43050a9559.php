<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Dummy Apps</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php if(!Auth::guest()): ?>

      
      </div>
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <form action="/logout" method="post">
            <?php echo csrf_field(); ?>
            <button type="submit" class="nav-link">Logout</button>
          </form>
          
        </li>
      </ul>
      <?php endif; ?>
    </div>
  </nav><?php /**PATH D:\tes\Laravel 11\diosuryaputra_crm\resources\views/partials/navbar.blade.php ENDPATH**/ ?>