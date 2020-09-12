    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu"><button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button>
      <!-- LOGO -->
      <div class="topbar-left">
        <div class="text-center"><a href="#" class="logo"><img src="{{url('assets/images/logo.png')}}" height="60" alt="logo"></a></div>
      </div>
      <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
          <ul>
            <li class="menu-title">Plataforma</li>
            <li><a href="#" class="waves-effect"><i class="mdi mdi-airplay"></i> <span>Configuación</span></a></li>
            <li
              class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span>Usuarios </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
              <ul
                class="list-unstyled">
                <li><a href="{{url('/admin/usuarios/create')}}">Nuevo usuario</a></li>
                <li><a href="{{url('/admin/usuarios')}}">Lista de usuarios</a></li>

          </ul>
          </li>
          <li class="menu-title">Administración</li>
          <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span>Categorias de servicios</span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul
              class="list-unstyled">
              <li><a href="{{url('/admin/categorias/create')}}">Nueva categoría</a></li>
              <li><a href="{{url('/admin/categorias')}}">Lista de categorias</a></li>
              </ul>
          </li>
          <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-arrow-down"></i><span> Check list - Mantenimiento </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul
              class="list-unstyled">
              <li><a href="{{url('/admin/servicios/create')}}">Nuevo</a></li>
              <li><a href="{{url('/admin/servicios')}}">Lista de servicios</a></li>
              </ul>
          </li>
          <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-arrow-down"></i><span> Clientes </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul
              class="list-unstyled">
              <li><a href="{{url('/admin/clientes/create')}}">Nuevo</a></li>
              <li><a href="{{url('/admin/clientes')}}">Lista de clientes</a></li>
              </ul>
          </li>
          <li class="menu-title">Reportes</li>
          <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-arrange-bring-forward"></i><span> Generar Reporte </span></a>
          </li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- end sidebarinner -->
    </div>
