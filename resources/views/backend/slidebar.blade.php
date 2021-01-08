
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
      <i class="fas fa-laptop-code fa-2x " ></i>

        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

     

     
      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('post.index')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>All Posts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('course.index')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Course</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>User List</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('record.index')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Register List</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>