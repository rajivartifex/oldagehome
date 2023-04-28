 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Admin</span>
     </a>
     <div class="sidebar">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="info">
                 <a href="#" class="d-block">Old-Age-Home</a>
             </div>
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-item">
                     <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}"">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p> Dashboard </p>
                     </a>
                 </li>
                 <li class="nav-item">
                    <a href="{{route('service-list')}}" class="nav-link {{ request()->is('service*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Services </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sc-index')}}" class="nav-link {{ request()->is('sc-details*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p> SC Details </p>
                    </a>
                </li>
                <li class="nav-item">
                     <a href="{{route('admin-enquiries-list')}}" class="nav-link {{ request()->is('admin/enquiries*') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p> Enquiry </p>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>
