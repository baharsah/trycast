     <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Public Access
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Looking Glass</p>
                </a>
              </li>
            </ul>
          </li> 
          <?php if($session === NULL):?>
          <li class="nav-item">
            <a href="<?=base_url('auth/login')?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Login
                <span class="right badge badge-success">Auth</span>
              </p>
            </a>
          </li>
          <?php else: ?>
            <li class="nav-item">
            <a href="<?=base_url('dash/profile/'.\Config\Services::session()->username)?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('dash/mrtg')?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Server MRTG
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
                <?php endif ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->