<aside id="sidebar-wrapper">
<div class="sidebar-brand">
        <a href="index.html">Walisongo</a>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu">
        <!-- menu header -->
        <li class="menu-header ">Beranda</li>
        <!-- menu item -->
        <li class="{{ Request::routeIs('santri.dashboard') ? 'active' : '' }}">
          <a href="/dashboard"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-blog"></i><span>Blog</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('blog.Category') ? 'active' : '' }}" href="/admin">Post</a></li>
            <li><a class="nav-link" href="/kategori">Kategori</a></li>
          </ul>
        </li>
        <li class="{{ Request::routeIs('santri.show') ? 'active' : '' }}">
          <a href="/show"><i class="fas fa-list-ul"></i><span>show</span></a>
        </li>
        <li class="{{ Request::routeIs('blog.Category') ? 'active' : '' }}">
          <a href="/kategori"><i class="fas fa-times"></i><span>Kategori</span></a>
        </li>
      </ul>
       
</aside>
