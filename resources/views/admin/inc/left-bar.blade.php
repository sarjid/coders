 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">W3 Coders Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route("admin.dashboard") }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item has-treeview menu-open"> --}}
           
        
          <li class="nav-item has-treeview">
            <a href="{{ url('admin/category') }}" class="nav-link @yield('category')">
                <i class="far fa-circle nav-icon"></i>
              <p>
                Category
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('admin/course') }}" class="nav-link @yield('course')">
                <i class="far fa-circle nav-icon"></i>
              <p>
                Course
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('admin/course/section') }}" class="nav-link @yield('section')">
                <i class="far fa-circle nav-icon"></i>
              <p>
                Course Video Section
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview @yield('video')">
            <a href="#" class="nav-link  @yield('video')">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Upload Course
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/course/add-video') }}" class="nav-link @yield('add-video')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Video</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/course/manage-video') }}" class="nav-link @yield('manage-video')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Video</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="{{ url('admin/coupon') }}" class="nav-link @yield('coupon')">
                <i class="far fa-circle nav-icon"></i>
              <p>
                Coupon
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview @yield('orders')">
            <a href="#" class="nav-link  @yield('orders')">
              <i class="nav-icon fas fa-circle"></i>
              <p>
               Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/orders-pending') }}" class="nav-link @yield('pending-orders')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Orders</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/orders-confirm') }}" class="nav-link @yield('confirmed-orders')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed Orders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('admin/enroll/student') }}" class="nav-link @yield('enroll')">
                <i class="far fa-circle nav-icon"></i>
              <p>
                Enrolled Student
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('admin/subscriber/all') }}" class="nav-link @yield('subscriber')">
                <i class="far fa-circle nav-icon"></i>
              <p>
              Subscriber
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('admin/messages/all') }}" class="nav-link @yield('messages')">
                <i class="far fa-circle nav-icon"></i>
              <p>
                Messages
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview @yield('settings')">
            <a href="#" class="nav-link  @yield('settings')">
              <i class="nav-icon fas fa-circle"></i>
              <p>
              Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/settings/profile-edit') }}" class="nav-link @yield('edit-profile')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/settings/profile-pass') }}" class="nav-link @yield('change-pass')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>