<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
  <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
      <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
        <div class="d-table m-auto">
          <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{ asset('assets/admin/images/shards-dashboards-logo.svg') }}" alt="Rifle Dashboard">
          <span class="d-none d-md-inline ml-1">Rifle Dashboard</span>
        </div>
      </a>
      <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
        <i class="material-icons">&#xE5C4;</i>
      </a>
    </nav>
  </div>
  <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
    <div class="input-group input-group-seamless ml-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-search"></i>
        </div>
      </div>
      <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> 
    </div>
  </form>
  <div class="nav-wrapper">
    <h6 class="main-sidebar__nav-title">Dashboard</h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='dashboard')?'active':'' }}" href="{{ route('admin.index') }}">
          <i class="material-icons">home</i>
          <span>Index</span>
        </a>
      </li>
    </ul>
    
    @role('super-admin')
    <h6 class="main-sidebar__nav-title">Super Admin</h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='user')?'active':'' }}" href="{{ route('users.index') }}">
          <i class="material-icons">person</i>
          <span>Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='role')?'active':'' }}" href="{{ route('roles.index') }}">
          <i class="material-icons">vertical_split</i>
          <span>Roles</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='user_permission')?'active':'' }}" href="{{ route('user_permission.index') }}">
          <i class="material-icons">vertical_split</i>
          <span>Permission</span>
        </a>
      </li>
    </ul>
    @endrole
    
    @role('admin')
    <h6 class="main-sidebar__nav-title">Admin</h6>
    <ul class="nav flex-column">
      @if(auth()->user()->can('user-list') ||
        auth()->user()->can('user-create') ||
        auth()->user()->can('user-edit') ||
        auth()->user()->can('user-delete'))
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='user')?'active':'' }}" href="{{ route('users.index') }}">
          <i class="material-icons">person</i>
          <span>Users</span>
        </a>
      </li>
      @endif
      @if(auth()->user()->can('role-list') ||
        auth()->user()->can('role-create') ||
        auth()->user()->can('role-edit') ||
        auth()->user()->can('role-delete'))
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='role')?'active':'' }}" href="{{ route('roles.index') }}">
          <i class="material-icons">vertical_split</i>
          <span>Roles</span>
        </a>
      </li>
      @endif
      @if(auth()->user()->can('permission-list') ||
        auth()->user()->can('permission-create') ||
        auth()->user()->can('permission-edit') ||
        auth()->user()->can('permission-delete'))
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='user_permission')?'active':'' }}" href="{{ route('user_permission.index') }}">
          <i class="material-icons">vertical_split</i>
          <span>Permission</span>
        </a>
      </li>
      @endif
    </ul>
    @endrole

    @role('student')
    <h6 class="main-sidebar__nav-title">Student</h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ @($menu=='user')?'active':'' }}" href="#">
          <i class="material-icons">person</i>
          <span>Users</span>
        </a>
      </li>
    </ul>
    @endrole

      <!-- 
      <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link " href="components-blog-posts.html">
          <i class="material-icons">vertical_split</i>
          <span>Blog Posts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="add-new-post.html">
          <i class="material-icons">note_add</i>
          <span>Add New Post</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="form-components.html">
          <i class="material-icons">view_module</i>
          <span>Forms &amp; Components</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="tables.html">
          <i class="material-icons">table_chart</i>
          <span>Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="user-profile-lite.html">
          <i class="material-icons">person</i>
          <span>User Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="errors.html">
          <i class="material-icons">error</i>
          <span>Errors</span>
        </a>
      </li> -->
    </ul>
  </div>
</aside>