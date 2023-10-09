<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="">General Dashboard</a></li>
                </ul>
              </li>
            </ul>
            <ul class="sidebar-menu">
              
              <li class="menu-header">Data</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Berita</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('berita.index') }}">Data Berita</a></li>
                  <li><a class="nav-link" href="{{route('berita.create') }}">Input Berita</a></li>
                </ul>
              </li>
              @if (auth()->user()->role == 'Admin')
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Kategori</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('kategori.index') }}">Data Kategori</a></li>
                  <li><a class="nav-link" href="{{route('kategori.create') }}">Input Kategori</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>User</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{route('user.index') }}">Data User</a></li>
                  <li><a class="nav-link" href="{{route('user.create') }}">Input User</a></li>
                </ul>
              </li>
            </ul>
            @endif
            <ul class="sidebar-menu">
              <li class="menu-header">Akun</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Profile</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="">Profile</a></li>
                </ul>
              </li>
            </ul>
        </aside>
      </div>