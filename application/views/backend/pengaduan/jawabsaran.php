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

      <!-- Right Sidebar -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card-box">
            <div class="mt-4">
              <form action="" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" value="<?= $get_pengaduan['nama']?>" disabled>
                  <input type="hidden" name="id" id="id" value="<?= $get_pengaduan['id']?>">
                  <input type="hidden" name="user_id" id="user_id" value="<?= $get_pengaduan['user_id']?>">
                </div>

                <div class="form-group">
                  <textarea id="summernote-basic5" name="jawaban_saran" class="form-control"></textarea>
                </div>

                <div class="form-group m-b-0">
                  <div class="text-right">
                    <button class="btn btn-primary waves-effect waves-light" type="submit"> <span>Send</span> <i
                        class="mdi mdi-send ml-2"></i> </button>
                  </div>
                </div>

              </form>
            </div> <!-- end card-->

            <div class="clearfix"></div>
          </div>

        </div> <!-- end Col -->

      </div><!-- End row -->

    </div> <!-- container -->

  </div> <!-- content -->