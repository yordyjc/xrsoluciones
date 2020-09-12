        <div class="topbar">
          <nav class="navbar-custom">
            <ul class="list-inline float-right mb-0">
              <!-- language-->
              <li class="list-inline-item dropdown notification-list hide-phone"><a class="text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                  aria-expanded="false">Hola, {{Auth::user()->nombres}} {{Auth::user()->apellidos}} </a>

              </li>

              <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                  aria-expanded="false"><img src="{{url('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle"></a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                  <!-- item-->
                  <div class="dropdown-item noti-title">
                    <h5>Bienvenido</h5>
                  </div><a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Perfil</a>
                   <a class="dropdown-item" href="#"><i class="mdi mdi-settings m-r-5 text-muted"></i> configuración</a><a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Editar perfil</a>
                    <form action="{{url('logout')}}" method="POST">
                    @csrf
                    <div class="dropdown-divider"></div><button class="dropdown-item"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</button></div>
                    </form>

              </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
              <li class="float-left"><button class="button-menu-mobile open-left waves-light waves-effect"><i class="mdi mdi-menu"></i></button></li>

            </ul>

            <div class="clearfix"></div>
          </nav>
        </div>
