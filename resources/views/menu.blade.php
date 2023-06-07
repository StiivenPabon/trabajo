<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">  
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="fas fa-music"></i>
          <p>
            Productos
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          @can('Products.index')
          <li class="nav-item">
            <a href="{{route('products.index')}}" class="nav-link">
              <i class="fas fa-fire-alt"></i>
              <p>Producto</p>
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a href="{{route('categorys.index')}}" class="nav-link">
              <i class="fas fa-fire-alt"></i>
              <p>Categorias</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('sub.index')}}" class="nav-link">
              <i class="fas fa-fire-alt"></i>
              <p>Subcategorias</p>
            </a>
          </li>
        </ul>

      <li class="nav-item">
    
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Navigation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Navigation + Sidebar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/boxed.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Boxed</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Sidebar</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Sidebar <small>+ Custom Area</small></p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="pages/layout/fixed-topnav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Navbar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/fixed-footer.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Footer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Collapsed Sidebar</p>
            </a>
          </li>
        </ul>
      </li> 


      
        </ul>
      </li>
  </nav>