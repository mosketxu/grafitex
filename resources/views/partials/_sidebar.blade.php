        <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('campaign.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Campañas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('store.index')}}">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Stores</span>
          </a>
        </li>
        {{-- @can('view',\App\User::class) 
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.index')}}">
              <i class="fas fa-fw fa-users"></i>
              <span>Usuarios</span></a>
          </li>
        @endcan --}}

        {{-- @admin
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.index')}}">
              <i class="fas fa-fw fa-users"></i>
              <span>Usuarios</span></a>
          </li>
        @endadmin --}}

        <li class="nav-item">
          <a class="nav-link" href="{{route('address.index')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Direcciones</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('element.index')}}">
              <i class="fas fa-fw fa-users"></i>
              <span>Elementos</span></a>
          </li>
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Facturación</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Albaranes</span></a>
        </li>
      </ul>
