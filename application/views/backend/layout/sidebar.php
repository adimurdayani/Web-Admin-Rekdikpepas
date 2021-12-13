<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

  <div class="h-100">

    <div class="sidebar-content">
      <div class="sidebar-icon-menu h-100" data-simplebar>
        <!-- LOGO -->
        <a href="<?= base_url()?>" class="logo">
          <span>
            <img src="<?= base_url()?>assets/images/logopuskesmas.png" alt="" height="28">
          </span>
        </a>
        <nav class="nav flex-column" id="two-col-sidenav-main">
          <a class="nav-link" href="#dashboard" data-toggle="tooltip" data-placement="right" title="Dashboard"
            data-trigger="hover">
            <i data-feather="home"></i>
          </a>
          <a class="nav-link" href="#apps" data-toggle="tooltip" data-placement="right" title="Modul"
            data-trigger="hover">
            <i data-feather="grid"></i>
          </a>
          <a class="nav-link" href="#setting" data-toggle="tooltip" data-placement="right" title="Setting"
            data-trigger="hover">
            <i data-feather="settings"></i>
          </a>

        </nav>
      </div>
      <!--- Sidemenu -->
      <div class="sidebar-main-menu">
        <div id="two-col-menu" class="h-100" data-simplebar>
          <div class="twocolumn-menu-item d-block" id="dashboard">
            <div class="title-box">
              <h5 class="menu-title">Dashboards</h5>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('dashboard')?>">Dashboard</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="twocolumn-menu-item" id="apps">
            <h5 class="menu-title">Modul</h5>
            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('backend/pengaduan')?>">Data Pengaduan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('backend/rekammedik')?>">Data Rekam Medik PKM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('backend/informasi')?>">Data Informasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('backend/register')?>">Data User Registrasi</a>
              </li>

            </ul>
          </div>

          <div class="twocolumn-menu-item" id="setting">
            <div class="title-box">
              <h5 class="menu-title">Setting</h5>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('backend/profile')?>">Profile</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
      <div class="clearfix"></div>
    </div>
    <!-- End Sidebar -->

  </div>
  <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->