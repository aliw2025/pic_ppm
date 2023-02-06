 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
     <!-- Brand Logo -->
     <a href="{{route('index')}}" class="brand-link">
         <img src="{{ url('/resources/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">PPM</span>
     </a>
     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ url('/resources/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="{{ route('admin-panel') }}" class="d-block">Admin</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

                 <li class="nav-item ">
                     <a href="#" class="nav-link">
                         <p>
                             SLA
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         
                         {{-- <li class="nav-item">
                             <a href="{{ route('add-vendor') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add Vendor</p>
                             </a>
                         </li> --}}

                     </ul>
                 </li>
                 <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <p>
                            Service Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- <li class="nav-item">
                            <a href="{{ route('vendors') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Vendors</p>
                            </a>
                        </li> --}}
                        

                    </ul>
                </li>







             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
