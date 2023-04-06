 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="index3.html" class="brand-link">
         <img src="<?php echo e(asset('adminlte/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
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
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p> Dashboard <i class="right fas fa-angle-left"></i> </p>
                     </a>
                 </li>
                 
                 <li class="nav-item">
                    <a href="<?php echo e(route('service-list')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p> Services </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p> SC Details <i class="fas fa-angle-left right"></i> </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add SC Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                           <a href="pages/layout/top-nav.html" class="nav-link">
                               <i class="far fa-circle nav-icon"></i>
                               <p>Manage SC Details</p>
                           </a>
                       </li>
                    </ul>
                </li>
                <li class="nav-item">
                     <a href="pages/widgets.html" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p> Enquiry </p>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>
<?php /**PATH C:\xampp\htdocs\oldagehome\resources\views/admin/layouts/partials/sidebar.blade.php ENDPATH**/ ?>