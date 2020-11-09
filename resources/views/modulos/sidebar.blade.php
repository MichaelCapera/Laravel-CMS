<aside class="main-sidebar sidebar-dark-primary elevation-4" style = "overflow-x:hidden;"><!--Oculta cualquier Scroll en el eje x-->
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{url('/')}}/img/A1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NevadoBit Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/')}}/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<!--=============================================
=            BOTTON            = 
=============================================-->

<li class="nav-item">

  <a href="{{url("/")}}" class="nav-link">

  <i class="nav-icon fas fa-home"></i>
  
  <p>Blog</p>

  </a>
  
</li>

<!--=============================================
=            BOTTON ADMIN           = 
=============================================-->

<li class="nav-item">

  <a href="{{url("/administradores")}}" class="nav-link">

  <i class="nav-icon fas fa-users-cog"></i>
  
  <p>Administradores</p>

  </a>
  
</li>

<!--=============================================
=            BOTTON CATEGORIES           = 
=============================================-->

<li class="nav-item">

  <a href="{{url("/categorias")}}" class="nav-link">

  <i class="nav-icon fas fa-list-ul"></i>
  
  <p>Categorias</p>

  </a>
  
</li>

<!--=============================================
=            BOTTON ARTICLES           = 
=============================================-->

<li class="nav-item">

  <a href="{{url("/articulos")}}" class="nav-link">

  <i class="nav-icon fas fa-sticky-note"></i>
  
  <p>Artículos</p>

  </a>
  
</li>

<!--=============================================
=            BOTTON OPINIONS           = 
=============================================-->

<li class="nav-item">

  <a href="{{url("/opiniones")}}" class="nav-link">

  <i class="nav-icon fas fa-user-check"></i>
  
  <p>Opiniones</p>

  </a>
  
</li>


<!--=============================================
=            BOTTON BANNER           = 
=============================================-->

<li class="nav-item">

  <a href="{{url("/banner")}}" class="nav-link">

  <i class="nav-icon fas fa-images"></i>
  
  <p>Banner</p>

  </a>
  
</li>

<!--=============================================
=            BOTTON ADVERTISEMENTS         = 
=============================================-->

<li class="nav-item">

  <a href="{{url("/anuncios")}}" class="nav-link">

  <i class="nav-icon fas fa-bullhorn"></i>
  
  <p>Anuncios</p>

  </a>
  
</li>


<!--=============================================
=            BOTTON WEB SITE         = 
=============================================-->

<li class="nav-item">

  <a href="{{substr(url("/"),0,-11)}}" class="nav-link active" target="_blank">

  <i class="nav-icon fas fa-globe"></i>
  
  <p>Ver sitio</p>

  </a>
  
</li>
       </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>