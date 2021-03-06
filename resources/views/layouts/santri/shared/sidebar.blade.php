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
       
      </ul>
       
</aside>
