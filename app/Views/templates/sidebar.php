  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
      <img src="<?= base_url('assets/admin-lte/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Import | Yogyakarta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/1200px-User_font_awesome.svg.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <?php if(session()->log): ?>
            <a href="<?= base_url(); ?>" class=""><?= session()->nama ?></a> <span class="bg-success p-1 rounded">Logged</span>
            <?php else: ?>
            <a href="<?= base_url(); ?>" class=""></a> <span class="bg-danger p-1 rounded">Not Logged</span>
            <?php endif ?>
          </div>
        </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-header">VISUALISASI</li>

          <li class="nav-item">
            <a href="<?= base_url(); ?>" class="nav-link <?= ($active==='visualisasi') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-arrow-down"></i>
              <p>
                Visualisasi Import
              </p>
            </a>
          </li>

          <?php if(session()->log) : ?>
          <li class="nav-header">Dashboard</li>

            <li class="nav-item">
              <a href="<?= base_url('dashboard/dataImport'); ?>" class="nav-link <?= ($active==='data import') ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Data Import
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('dashboard/inputDataImport'); ?>" class="nav-link <?= ($active==='input data import') ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-plus"></i>
                <p>
                  Input Data Import
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('dashboard/editDataImport'); ?>" class="nav-link <?= ($active==='edit data import') ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Ubah Data Import
                </p>
              </a>
            </li>
          
          <?php endif ?>
          
          <li class="nav-header">Option</li>
          <?php if(session()->log): ?>
            <li class="nav-item">
              <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="<?= base_url('auth/login'); ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Login
                </p>
              </a>
            </li>
          <?php endif ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>