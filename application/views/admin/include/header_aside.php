
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/admin/');?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/admin/');?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> The Account Sheet </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('login'); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
		  
		  <!--li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Resume
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="<?php echo base_url('add_resume'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Add Resume</p>
            </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo base_url('show_job'); ?>"  class="nav-link">
                  <i class="fa fa-list"></i>
                  <p>All Resume </p>
                </a>
              </li>
            </ul>
          </li-->
          
          <!--li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Portfolio
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="<?php echo base_url('portfolio'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Add Portfolio</p>
            </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo base_url('students'); ?>"  class="nav-link">
                  <i class="fa fa-list"></i>
                  <p>All Portfolio </p>
                </a>
              </li>
            </ul>
          </li-->
          
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
             </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="<?php echo base_url('view_profile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Add Profile</p>
            </a>
            <!--a href="<!?php echo base_url('profile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Add Profile</p>
            </a-->
            </li>
              <li class="nav-item">
                <a href="<?php echo base_url('notice'); ?>"  class="nav-link">
                  <i class="fa fa-list"></i>
                  <p>All Profile </p>
                </a>
              </li>
            </ul>
          </li>
          
		  <li class="nav-item">
            <a href="<?php echo base_url('setting'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p> Setting </p></a>
          </li>
		   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
