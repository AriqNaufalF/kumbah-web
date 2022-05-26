<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand ms-2 fw-bold" href="/">
            <img src="/img/logo-kumbah.svg" alt="Kumbah Logo" width="30" class="d-inline-block align-text-bottom">
            KUMBAH
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('order') ? 'active' : '' }}" href="/order"><i class="bi bi-journal-text fs-5"></i> <span class="d-lg-none">Order History</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link {{ Request::is('reviews') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-envelope fs-5"></i> <span class="d-lg-none">Notification</span></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/reviews">Reviews</a></li>
              <li><a class="dropdown-item" href="#">Order status</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('cart') ? 'active' : '' }}" href="/cart"><i class="bi bi-cart-fill fs-5"></i> <span class="d-lg-none">Cart</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="/profile">{{ auth()->user()->name }} <i class="bi bi-person-circle fs-5 d-none d-lg-inline ps-1"></i></a>
          </li>
        </ul>
      </div>
    </div>
</nav>