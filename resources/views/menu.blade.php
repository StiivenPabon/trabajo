<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">  
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="fas fa-chevron-circle-down"></i>
          <p>
              Menú
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
      
         
          <li class="nav-item">
            <a href="{{route('products.index')}}" class="nav-link">
              <i class="fas fa-fire-alt"></i>
              <p>Producto</p>
            </a>
          </li>
          
      
         
       
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
      </li>

        @can('Users.index')
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="fas fa-user-edit"></i>
            <p>
              Usuarios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
        
        
            <li class="nav-item">
              <a href="{{route('users.index')}}" class="nav-link">
                <i class="fas fa-fire-alt"></i>
                <p>Asingar Roles</p>
              </a>
            </li>

          </ul>
        </li>  
      @endCan

    
      
        </ul>
      </li>
  </nav>