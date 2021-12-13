<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active"><?= $judul;?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul;?> </h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="card-box">
            <div class="row">
              <div class="col-6">
                <div class="avatar-sm bg-primary rounded">
                  <i class="fe-users avatar-title font-22 text-white"></i>
                </div>
              </div>
              <div class="col-6">
                <div class="text-right">
                  <h3 class="text-dark my-1"><span data-plugin="counterup"><?= $total_register;?></span> User</h3>
                  <p class="text-muted mb-1 text-truncate">User Registrasi</p>
                </div>
              </div>
            </div>
          </div> <!-- end card-box-->
        </div> <!-- end col -->

        <div class="col-md-6 col-xl-3">
          <div class="card-box">
            <div class="row">
              <div class="col-6">
                <div class="avatar-sm bg-success rounded">
                  <i class="fe-database avatar-title font-22 text-white"></i>
                </div>
              </div>
              <div class="col-6">
                <div class="text-right">
                  <h3 class="text-dark my-1"><span data-plugin="counterup"><?= $total_pengaduan;?></span> User</h3>
                  <p class="text-muted mb-1 text-truncate">Total Pengaduan</p>
                </div>
              </div>
            </div>
          </div> <!-- end card-box-->
        </div> <!-- end col -->

        <div class="col-md-6 col-xl-3">
          <div class="card-box">
            <div class="row">
              <div class="col-6">
                <div class="avatar-sm bg-warning rounded">
                  <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                </div>
              </div>
              <div class="col-6">
                <div class="text-right">
                  <h3 class="text-dark my-1"><span data-plugin="counterup"><?= $total_rekammedik;?></span> User</h3>
                  <p class="text-muted mb-1 text-truncate">Total Rekam Medik</p>
                </div>
              </div>
            </div>

          </div> <!-- end card-box-->
        </div> <!-- end col -->
      </div>
      <!-- end row -->

      <div class="row">

        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="card-widgets">
                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false"
                  aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
              </div>
              <h4 class="header-title mb-0">Data Pengaduan</h4>

              <div id="cardCollpase5" class="collapse pt-3 show">
                <div class="table-responsive">
                  <table class="table table-hover table-centered mb-0">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Saran</th>
                        <th>Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($get_pengaduan as $data):?>
                      <tr>
                        <td><?= $data['nama']?></td>
                        <td><?= $data['alamat']?></td>
                        <td><?= $data['saran']?></td>
                        <td><?= $data['created_at']?></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div> <!-- end table responsive-->
              </div> <!-- collapsed end -->
            </div> <!-- end card-body -->
          </div> <!-- end card-->
        </div> <!-- end col -->
      </div>
      <!-- end row -->

    </div> <!-- container -->

  </div> <!-- content -->