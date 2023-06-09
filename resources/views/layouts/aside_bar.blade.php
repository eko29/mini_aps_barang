<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="/dist/img/1552904276179.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

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
      @php 
        if(isset($id)){
          $id = $id;
        }else{
          $id = 0;
        }
      @endphp
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">

          <a href="#" class="nav-link {{ Request::root().'/'.Request::path()==route('barang.index') ? 'active' : '' }}">
            <i class="fas fa-cog"></i> 
            <p>
              Barang 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          
        </li>
      </ul>
      
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
