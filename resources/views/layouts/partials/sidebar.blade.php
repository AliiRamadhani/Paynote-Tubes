<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(135deg, #14532d, #166534);">

  <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="/">
    <div class="sidebar-brand-icon">
      <img src="/src/1;1 symbol.png" alt="PayNote Logo" style="width: 40px; height: 40px;">
    </div>
    <div class="sidebar-brand-text mx-3 text-white font-weight-bold">
      PayNote
    </div>
  </a>

  <hr class="sidebar-divider my-0">

  <li class="nav-item active">
    <a class="nav-link" href="/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  <div class="sidebar-heading text-white">
    Data
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Data Master</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('categories')}}">Category</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('incomes')}}">
      <i class="fas fa-fw fa-download"></i>
      <span>Pemasukan</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('expenses')}}">
      <i class="fas fa-fw fa-external-link-alt"></i>
      <span>Pengeluaran</span>
    </a>
  </li>

  <div class="text-center d-none d-md-inline mt-4">
    <button class="rounded-sm border-0" id="sidebarToggle"></button>
  </div>
</ul>
