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
                <li class="breadcrumb-item"><a href="<?= base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $judul;?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul;?></h4>
          </div>
        </div>
      </div>
      <!-- end page title -->


      <div class="row">

        <!-- Right Sidebar -->
        <div class="col-12">
          <div class="card-box">
            <div class="btn-group">
              <h4>Pesan Pengaduan Masyarakat</h4>
            </div>
            <?= $this->session->flashdata('message');?>
            <div class="mt-3">
              <ul class="message-list">
                <?php foreach($get_pengaduan as $data):?>
                <li class="unread">
                  <div class="col-mail col-mail-1">
                    <a href="" class="btn btn-sm btn-light waves-effect" data-target="#hapus-modal<?= $data['id']?>"
                      data-toggle="modal"><i class="mdi mdi-delete-variant font-18"></i></a>
                    <a href="<?= base_url('backend/pengaduan/detail/') . $data['id']?>"
                      class="title"><?= $data['nama']?></a>
                  </div>
                  <div class="col-mail col-mail-2">
                    <a href="<?= base_url('backend/pengaduan/detail/') . $data['id']?>"
                      class="subject"><?= $data['nama']?> &nbsp;&ndash;&nbsp;
                      <span class="teaser"><?= $data['email']?>, <?= $data['judul_saran']?>.</span>
                    </a>
                    <small class="date" style="font-size: 6px;"><?= $data['created_at']?></small>
                  </div>
                </li>
                <?php endforeach;?>
              </ul>
            </div>
            <!-- end .mt-4 -->

            <div class="row">
              <div class="col-7 mt-1">
                Showing 1 - 20 of 289
              </div> <!-- end col-->
              <div class="col-5">
                <div class="btn-group float-right">
                  <button type="button" class="btn btn-light btn-sm"><i class="mdi mdi-chevron-left"></i></button>
                  <button type="button" class="btn btn-info btn-sm"><i class="mdi mdi-chevron-right"></i></button>
                </div>
              </div> <!-- end col-->
            </div>
            <!-- end row-->

            <div class="clearfix"></div>
          </div> <!-- end card-box -->

        </div> <!-- end Col -->
      </div><!-- End row -->

    </div> <!-- container -->

  </div> <!-- content -->

  <!-- sample modal content -->
  <?php foreach($get_pengaduan as $hapus):?>
  <div id="hapus-modal<?= $hapus['id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body p-4">
          <p>Apakah anda ingin menghapus data dengan nama <b>"<?= $hapus['nama']?>"</b></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url('backend/pengaduan/hapus/') . $hapus['id']?>"
            class="btn btn-danger waves-effect waves-light">Hapus</a>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <?php endforeach;?>