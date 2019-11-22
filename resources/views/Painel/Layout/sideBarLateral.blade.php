 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('Painel.index')}}" class="brand-link">
      <img src="{{asset ('AdminLTE/dist/img/LogoMadrigal.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" 
           style="opacity: .8">  <!-- logo -->
      <span class="brand-text font-weight-light">Madrigal Estágios</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset ('AdminLTE/dist/img/AdminLTELogo.png')}}" class="img-circle elevation-2" alt="User Image"> <!-- logo -->
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $user->name }}</a>  <!-- nome user logado-->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
             <li class="nav-item ">
             <a href="{{route ('Painel.Usuarios.index') }}" class="nav-link ">
             <i class="fa fa-users"> </i>
                <p>Usuários</p>
             </a>
             </li>
              <li class="nav-item">     
                <a href="{{route('Painel.Alunos.index')}}" class="nav-link ">
                  <i class="fas fa-user-graduate nav-icon"></i>
                  <p>Alunos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Painel.Empresas.index')}}" class="nav-link">
                  <i class="far fa-building nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Painel.Estagios.index')}}" class="nav-link">
                  <i class="fab fa-phoenix-framework nav-icon"></i>
                  <p>Estágios</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sair
                <span class="right badge badge-danger">Deslogar</span>
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
