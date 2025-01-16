
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ asset('admin') }}" class="brand-link">
    <img src="{{ asset('template/admin/dist/img/favicon-music.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
    <span class="brand-text font-weight-light">Music Shop</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('template/admin/dist/img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image" style="object-fit: cover; width: 40px; height: 40px;">
      </div>
      <div class="info">
        <a href="#" class="d-block">Do Huy Duong</a>
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
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bars"></i>
            <p>
              Category
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ asset('admin/menus/add') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ asset('admin/menus/list') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Catagory</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store-alt"></i>
              <p> Product
                  <i class="right fas fa-angle-left"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ asset('admin/products/add') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Product</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ asset('admin/products/list') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Product</p>
                </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p> Slider
                  <i class="right fas fa-angle-left"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ asset('admin/sliders/add') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Slider</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ asset('admin/sliders/list') }} " class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Slider</p>
                  </a>
              </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p> Cart
                  <i class="right fas fa-angle-left"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/admin/customers" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Order List</p>
                  </a>
              </li>
          </ul>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>