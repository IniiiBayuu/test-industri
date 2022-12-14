<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/admin12.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Market Local</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{route('barang.index')}}" class="nav-link {{Request::is('admin/barang*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Barang
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pesanan.index')}}" class="nav-link {{Request::is('admin/pesanan*') ? 
              'active' : ''}}">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Pesanan
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pembelian.index')}}" class="nav-link {{Request::is('admin/pembelian*') ? 
              'active' : ''}}">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Pembelian
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pembeli.index')}}" class="nav-link {{Request::is('admin/pembeli*') ? 
              'active' : ''}}">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Pembeli
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('suplier.index')}}" class="nav-link {{Request::is('admin/suplier*') ? 
              'active' : ''}}">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Suplier
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>