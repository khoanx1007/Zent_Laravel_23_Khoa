<div class="nav-left-sidebar sidebar-dark">
  <div class="menu-list">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="d-xl-none d-lg-none" href="{{ route('backend.dashboard') }}">Dashboard</a>
          <button class="navbar-toggler" class="nav-link @if (request()->is('backend/dashboard')) active @endif">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                  <li class="nav-divider">
                      Menu
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link @if (request()->is('backend/dashboard')) active @endif" href="{{ route('backend.dashboard') }}" >
                          <i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link @if (request()->is('backend/storage')) active @endif" href="{{ route('backend.storage') }}" >
                          <i class="fas fa-folder-open"></i>Storage</a>
                  </li>
                  <li class="nav-divider" style="font-family: Arial;">
                      Quản lý hệ thống
                    <li class="nav-item " style="font-family: Arial;">
                        <a class="nav-link  @if (request()->routeIs('backend.menus.*')) active @endif" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-columns"></i> Quản lí Menu </a>
                            <div id="submenu-1" class="collapse submenu @if (request()->RouteIs('backend.menus.*')) show @endif">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link @if (request()->routeIs('backend.menus.create')) active @endif d-flex align-items-center" href="{{ Route('backend.menus.create') }}">
                                            <i class="nav-icon fas fa-pencil-alt"></i>
                                            <span>Tạo Menu</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link @if (request()->routeIs('backend.menus.index')) active @endif d-flex align-items-center" href="{{ Route('backend.menus.index') }}">
                                            <i class="fas fa-clipboard-list"></i>
                                            <span>Danh sách Menu</span> 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        
                    </li>
                    <li class="nav-item " style="font-family: Arial;">
                        <a class="nav-link @if (request()->routeIs('backend.categories.*')) active @endif" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-columns"></i> Quản lí Danh mục </a>
                        <div id="submenu-2" class="collapse submenu @if (request()->routeIs('backend.categories.*')) show @endif" >
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->routeIs('backend.categories.create')) active @endif d-flex align-items-center" href="{{ Route('backend.categories.index') }}">
                                        <i class="nav-icon fas fa-pencil-alt"></i>
                                        <span>Tạo danh mục</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->routeIs('backend.categories.index')) active @endif d-flex align-items-center" href="{{ Route('backend.categories.index') }}">
                                        <i class="fas fa-clipboard-list"></i>
                                        <span>Danh sách danh mục</span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item " style="font-family: Arial;">
                        <a class="nav-link @if (request()->RouteIs('backend.posts.*')) active @endif" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-columns"></i> Quản lí Blog </a>
                        <div id="submenu-3" class="collapse submenu @if (request()->RouteIs('backend.posts.*')) show @endif" >
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link @if (request()->routeIs('backend.posts.create')) active @endif d-flex align-items-center" href="{{ Route('backend.posts.create') }}">
                                        <i class="nav-icon fas fa-pencil-alt"></i>
                                        <span>Tạo Blog</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->routeIs('backend.posts.index')) active @endif d-flex align-items-center" href="{{ Route('backend.posts.index') }}">
                                        <i class="fas fa-clipboard-list"></i>
                                        <span>Danh sách Blog</span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                  </li>
                  <li class="nav-divider" style="font-family: Arial;">
                      Quản lý thành viên         
                    <li class="nav-item " style="font-family: Arial;">
                        <a class="nav-link @if (request()->RouteIs('backend.users.*')) active @endif" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-columns"></i> Quản lí Người dùng </a>
                        <div id="submenu-4" class="collapse submenu @if (request()->RouteIs('backend.users.*')) show @endif" >
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link @if (request()->routeIs('backend.users.index')) active @endif d-flex align-items-center" href="{{ Route('backend.users.index') }}">
                                        <i class="fas fa-clipboard-list"></i>
                                        <span>Danh sách người dùng</span> 
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item " style="font-family: Arial;">
                        <a class="nav-link @if (request()->RouteIs('backend.roles.*')) active @endif" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-columns"></i> Quản lí Role </a>
                        <div id="submenu-5" class="collapse submenu @if (request()->RouteIs('backend.roles.*')) show @endif" >
                            <ul class="nav flex-column">
                                <li class="nav-item ">
                                    <a class="nav-link d-flex align-items-center" href="{{ Route('backend.users.create') }}">
                                        <i class="nav-icon fas fa-pencil-alt"></i>
                                        <span>Tạo Role</span> 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="{{ Route('backend.users.index') }}">
                                        <i class="fas fa-clipboard-list"></i>
                                        <span>Danh sách Role</span> 
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li> 
                  </li>           
              </ul>
          </div>
      </nav>
  </div>
</div>