<aside id="sidebar-wrapper">
<div class="sidebar-brand">
        <a href="index.html">Walisongo</a>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu">
        <!-- menu header -->

        <li class="menu-header ">PPDB</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-blog"></i><span>Calon Santri</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('admin.santri.lihat') ? 'active' : '' }}" href="/admin/santribaru">Daftar Santri</a></li>
            <li><a class="nav-link" href="/kategori">Update</a></li>
          </ul>
        </li>


        <li class="menu-header ">Beranda</li>
        <!-- menu item -->
        <li class="{{ Request::routeIs('santri.dashboard') ? 'active' : '' }}">
          <a href="/dashboard"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        

        

        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-blog"></i><span>Blog</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('blog.Category') ? 'active' : '' }}" href="/admin">Post</a></li>
            <li><a class="nav-link" href="/admin/blog/kategori">Kategori</a></li>
          </ul>
        </li>
        
        </li>

        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-graduate"></i><span>Santri</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('blog.Category') ? 'active' : '' }}" href="/admin/santri">Daftar Santri</a></li>
            <li><a class="nav-link" href="/kategori">Update</a></li>
          </ul>
        </li>

        <li class="menu-header ">Master Data</li>

        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i><span>Manajemen User</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('blog.Category') ? 'active' : '' }}" href="/admin">User</a></li>
            <li><a class="nav-link" href="/kategori">Role</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-coins"></i><span>Keuangan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('blog.Category') ? 'active' : '' }}" href="/admin">Biaya</a></li>
            <li><a class="nav-link" href="/admin/blog/kategori">Update</a></li>
          </ul>
        </li>


        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-school"></i><span>Sekolah</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('blog.Category') ? 'active' : '' }}" href="/admin">Daftar Sekolah</a></li>
            <li><a class="nav-link" href="/kategori">Jadwal Pelajaran</a></li>
          </ul>
        </li>

        <li class="menu-header ">Laporan</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-graduate"></i><span>Santri</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link {{ Request::routeIs('blog.Category') ? 'active' : '' }}" href="/admin">Daftar Santri</a></li>
            <li><a class="nav-link" href="/kategori">Update</a></li>
          </ul>
        </li>

        <li class="menu-header "></li>
        
      </ul>

      
       
</aside>
