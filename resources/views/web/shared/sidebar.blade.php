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
        <li class="{{ Request::routeIs('santri.show') ? 'active' : '' }}">
          <a href="/show"><i class="fas fa-list-ul"></i><span>show</span></a>
        </li>
        <li class="{{ Request::routeIs('blog.Category') ? 'active' : '' }}">
          <a href="/category"><i class="fas fa-times"></i><span>Kategori</span></a>
        </li>
      </ul>
       
</aside>
