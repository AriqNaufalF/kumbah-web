<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a href="/admin" class="navbar-brand fw-bold ms-2"><img src="/img/logo-kumbah.svg" alt=" Kumbah Logo " width="30"> KUMBAH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/admin/incoming-order"><i class="bi bi-bell fs-5"></i><span class="d-lg-none"> Notification</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#wip"><i class="bi bi-envelope fs-5"></i><span class="d-lg-none"> Message</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">{{ auth()->user()->name }} <i class="bi bi-person-circle fs-5 d-none d-lg-inline"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <form action="/logout" method="get">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>

{{-- under construction modal --}}
<div class="modal" id="wip" tabindex="-1">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-warning text-center">
        <h3>This feature is under consturction <i class="bi bi-exclamation-triangle-fill"></i></h3>
      </div>
    </div>
  </div>
</div>