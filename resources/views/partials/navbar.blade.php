<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Dummy Apps</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      {{-- {{ $menuItems }} --}}
      <div class="collapse navbar-collapse" id="navbarNav">
        @if (!Auth::guest())

      
      </div>
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link">Logout</button>
          </form>
          {{-- <a class="nav-link" href="/logout">Logout</a> --}}
        </li>
      </ul>
      @endif
    </div>
  </nav>