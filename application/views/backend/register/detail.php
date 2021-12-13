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
                <li class="breadcrumb-item"><a href="<?= base_url('backend/register')?>">Register</a></li>
                <li class="breadcrumb-item active"><?= $judul;?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul;?></h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <!-- project card -->
          <div class="card d-block">
            <div class="card-body">
              <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
                  <i class='mdi mdi-dots-horizontal font-18'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="javascript:void(0);" class="dropdown-item">
                    <i class='mdi mdi-pencil-outline mr-1'></i>Edit
                  </a>
                  <div class="dropdown-divider"></div>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item text-danger">
                    <i class='mdi mdi-delete-outline mr-1'></i>Delete
                  </a>
                </div> <!-- end dropdown menu-->
              </div> <!-- end dropdown-->

              <div class="custom-control custom-checkbox float-left">
                <input type="checkbox" class="custom-control-input" id="completedCheck">
                <label class="custom-control-label" for="completedCheck">
                  Mark as completed
                </label>
              </div> <!-- end custom-checkbox-->
              <div class="clearfix"></div>

              <h4>Simple Admin Dashboard Template Design</h4>

              <div class="row">
                <div class="col-md-4">
                  <!-- assignee -->
                  <p class="mt-2 mb-1 text-muted">Register akun</p>
                  <div class="media">
                    <img src="<?= base_url()?>assets/images/users/user-9.jpg" alt="Arya S" class="rounded-circle mr-2"
                      height="24" />
                    <div class="media-body">
                      <h5 class="mt-1 font-size-14">
                        <?= $get_regis['nama']?>
                      </h5>
                    </div>
                  </div>
                  <!-- end assignee -->
                </div> <!-- end col -->

                <div class="col-md-4">
                  <!-- start due date -->
                  <p class="mt-2 mb-1 text-muted">Email Address</p>
                  <div class="media">
                    <i class='mdi mdi-email-alert-outline font-18 text-success mr-1'></i>
                    <div class="media-body">
                      <h5 class="mt-1 font-size-14">
                        <?= $get_regis['email']?>
                      </h5>
                    </div>
                  </div>
                  <!-- end due date -->
                </div>

                <div class="col-md-4">
                  <!-- start due date -->
                  <p class="mt-2 mb-1 text-muted">Tanggal Update</p>
                  <div class="media">
                    <i class='mdi mdi-calendar-month-outline font-18 text-success mr-1'></i>
                    <div class="media-body">
                      <h5 class="mt-1 font-size-14">
                        <?= $get_regis['created_at']?>
                      </h5>
                    </div>
                  </div>
                  <!-- end due date -->
                </div> <!-- end col -->
              </div> <!-- end row -->


              <h5 class="mt-3">Alamat:</h5>

              <p class="text-muted mb-4">
                <?= $get_regis['alamat']?>
                <br>
                <?= $get_regis['no_hp']?>
              </p>

            </div> <!-- end card-body-->

          </div> <!-- end card-->

        </div> <!-- end col -->

        <div class="col-xl-4 col-lg-5">

          <div class="card">
            <div class="card-body">
              <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown" aria-expanded="false">
                  <i class='mdi mdi-dots-horizontal font-18'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">
                    <i class='mdi mdi-attachment mr-1'></i>Attachment
                  </a>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">
                    <i class='mdi mdi-pencil-outline mr-1'></i>Edit
                  </a>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item">
                    <i class='mdi mdi-content-copy mr-1'></i>Mark as Duplicate
                  </a>
                  <div class="dropdown-divider"></div>
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item text-danger">
                    <i class='mdi mdi-delete-outline mr-1'></i>Delete
                  </a>
                </div> <!-- end dropdown menu-->
              </div> <!-- end dropdown-->

              <h5 class="card-title font-16 mb-3">Attachments</h5>

              <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone"
                data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                <div class="fallback">
                  <input name="file" type="file" />
                </div>

                <div class="dz-message needsclick">
                  <i class="h3 text-muted dripicons-cloud-upload"></i>
                  <h4>Drop files here or click to upload.</h4>
                </div>
              </form>

              <!-- Preview -->
              <div class="dropzone-previews mt-3" id="file-previews"></div>

              <!-- file preview template -->
              <div class="d-none" id="uploadPreviewTemplate">
                <div class="card mt-1 mb-0 shadow-none border">
                  <div class="p-2">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                      </div>
                      <div class="col pl-0">
                        <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                        <p class="mb-0" data-dz-size></p>
                      </div>
                      <div class="col-auto">
                        <!-- Button -->
                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                          <i class="dripicons-cross"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end file preview template -->


              <div class="card mb-1 shadow-none border">
                <div class="p-2">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="avatar-sm">
                        <span class="avatar-title badge-soft-primary text-primary rounded">
                          ZIP
                        </span>
                      </div>
                    </div>
                    <div class="col pl-0">
                      <a href="javascript:void(0);" class="text-muted font-weight-bold">Ubold-sketch-design.zip</a>
                      <p class="mb-0 font-12">2.3 MB</p>
                    </div>
                    <div class="col-auto">
                      <!-- Button -->
                      <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                        <i class="dripicons-download"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-1 shadow-none border">
                <div class="p-2">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="avatar-sm">
                        <span class="avatar-title badge-soft-primary text-primary rounded">
                          JPG
                        </span>
                      </div>
                    </div>
                    <div class="col pl-0">
                      <a href="javascript:void(0);" class="text-muted font-weight-bold">Dashboard-design.jpg</a>
                      <p class="mb-0 font-12">3.25 MB</p>
                    </div>
                    <div class="col-auto">
                      <!-- Button -->
                      <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                        <i class="dripicons-download"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-0 shadow-none border">
                <div class="p-2">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="avatar-sm">
                        <span class="avatar-title bg-secondary rounded">
                          .MP4
                        </span>
                      </div>
                    </div>
                    <div class="col pl-0">
                      <a href="javascript:void(0);" class="text-muted font-weight-bold">Admin-bug-report.mp4</a>
                      <p class="mb-0 font-12">7.05 MB</p>
                    </div>
                    <div class="col-auto">
                      <!-- Button -->
                      <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                        <i class="dripicons-download"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- end row -->

    </div> <!-- container -->

  </div> <!-- content -->