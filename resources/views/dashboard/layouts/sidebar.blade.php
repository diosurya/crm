<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="{{ url('dashboard/users') }}">
            <span data-feather="file-text"></span>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/leads*') ? 'active' : '' }}" href="{{ url('dashboard/leads') }}">
            <span data-feather="file-text"></span>
            Leads
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="{{ url('dashboard/products') }}">
            <span data-feather="file-text"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/projects*') ? 'active' : '' }}" href="{{ url('dashboard/projects') }}">
            <span data-feather="file-text"></span>
            Projects
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/subscriptions*') ? 'active' : '' }}" href="{{ url('dashboard/subscriptions') }}">
            <span data-feather="file-text"></span>
            Subscriptions
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/customers*') ? 'active' : '' }}" href="{{ url('dashboard/customers') }}">
            <span data-feather="file-text"></span>
            Customers
          </a>
        </li>

      @elseif(auth()->user()->role == 'manager')
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/leads*') ? 'active' : '' }}" href="{{ url('dashboard/leads') }}">
          <span data-feather="file-text"></span>
          Leads
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="{{ url('dashboard/products') }}">
          <span data-feather="file-text"></span>
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/projects*') ? 'active' : '' }}" href="{{ url('dashboard/projects') }}">
          <span data-feather="file-text"></span>
          Projects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/subscriptions*') ? 'active' : '' }}" href="{{ url('dashboard/subscriptions') }}">
          <span data-feather="file-text"></span>
          Subscriptions
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/customers*') ? 'active' : '' }}" href="{{ url('dashboard/customers') }}">
          <span data-feather="file-text"></span>
          Customers
        </a>
      </li>
      

      @else

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/leads*') ? 'active' : '' }}" href="{{ url('dashboard/leads') }}">
          <span data-feather="file-text"></span>
          Leads
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="{{ url('dashboard/products') }}">
          <span data-feather="file-text"></span>
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/projects*') ? 'active' : '' }}" href="{{ url('dashboard/projects') }}">
          <span data-feather="file-text"></span>
          Projects
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/subscriptions*') ? 'active' : '' }}" href="{{ url('dashboard/subscriptions') }}">
          <span data-feather="file-text"></span>
          Subscriptions
        </a>
      </li>

     @endif
    </ul>
    </div>
  </nav>