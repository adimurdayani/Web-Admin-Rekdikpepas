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
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title">Tabel Data <?= $judul;?></h4>

              <a href="" class="btn btn-primary mb-3" data-target="#add-modal" data-toggle="modal"><i
                  class="fe-add"></i> Tambah User</a>

              <?= validation_errors('<div class="alert alert-danger" role="alert"> <i class="mdi mdi-block-helper mr-2"></i>','</div>')?>
              <?= $this->session->flashdata('message');?>

              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th class="text-center">Aksi</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">No. Telp</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Tanggal</th>
                  </tr>
                </thead>


                <tbody>
                  <?php foreach($get_regis as $data):?>
                  <tr>
                    <td class="text-center">
                      <a href="<?=base_url('backend/register/detail/') . $data['id_regis']?>"
                        class="badge badge-success"><i class="fe-eye" title="Detail"></i></a>
                      <a href="" class="badge badge-warning" data-target="#edit-modal<?= $data['id_regis']?>"
                        data-toggle="modal"><i class="fe-edit" title="Edit"></i></a>
                      <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_regis']?>"
                        data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                    </td>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['email']?></td>
                    <td><?= $data['no_hp']?></td>
                    <td class="text-center">
                      <?php if($data['status']  != 0):?>
                      <a href="" class="badge badge-success" data-target="#update-status<?= $data['id_regis']?>"
                        data-toggle="modal">aktif</a>
                      <?php else:?>
                      <a href="" class="badge badge-danger" data-target="#update-status<?= $data['id_regis']?>"
                        data-toggle="modal">tidak
                        aktif</a>
                      <?php endif;?>
                    </td>
                    <td class="text-center"><?= $data['created_at']?></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>

            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <!-- end row-->
    </div> <!-- container -->

  </div> <!-- content -->

  <!-- sample modal content -->
  <div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= base_url('backend/register')?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Tambah User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-1" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="field-1" placeholder="Enter nama"
                    value="<?= set_value('nama')?>">
                  <?= form_error('nama', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-2" class="control-label">Username</label>
                  <input type="text" class="form-control" name="username" id="field-2" placeholder="Enter username"
                    value="<?= set_value('username')?>">
                  <?= form_error('username', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-3" class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" id="field-3" placeholder="Enter Email"
                    value="<?= set_value('email')?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-4" class="control-label">Password</label>
                  <input type="password" class="form-control" name="password" id="field-4" placeholder="Enter Password">
                  <?= form_error('password', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-5" class="control-label">Konfirmasi Password</label>
                  <input type="password" class="form-control" name="conf_pass" id="field-5"
                    placeholder="Enter konfirmasi password">
                  <?= form_error('conf_pass', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="status" value="1" id="customCheck1" checked>
                <label class="custom-control-label" for="customCheck1">Active
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.modal -->


  <!-- sample modal content -->
  <?php foreach($get_regis as $edit):?>
  <div id="edit-modal<?= $edit['id_regis']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= base_url('backend/register/edit')?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Update User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body p-4">
            <input type="hidden" name="id_regis" id="id_regis" value="<?= $edit['id_regis']?>">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-1" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="field-1" placeholder="Enter nama"
                    value="<?= $edit['nama']?>">
                  <?= form_error('nama', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-2" class="control-label">Username</label>
                  <input type="text" class="form-control" name="username" id="field-2" placeholder="Enter username"
                    value="<?= $edit['username']?>">
                  <?= form_error('username', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-3" class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" id="field-3" placeholder="Enter Email"
                    value="<?= $edit['email']?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="status" value="1" id="customCheck1" checked>
                <label class="custom-control-label" for="customCheck1">Active
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-warning waves-effect waves-light">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.modal -->
  <?php endforeach;?>

  <!-- sample modal content -->
  <?php foreach($get_regis as $hapus):?>
  <div id="hapus-modal<?= $hapus['id_regis']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
          <a href="<?= base_url('backend/register/hapus/') . $hapus['id_regis']?>"
            class="btn btn-danger waves-effect waves-light">Hapus</a>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <?php endforeach;?>

  <!-- sample modal content -->
  <?php foreach($get_regis as $update):?>
  <div id="update-status<?= $update['id_regis']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= base_url('backend/register/updatestatus')?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Update Status User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="id_regis" id="id_regis" value="<?= $update['id_regis']?>">

            <div class="form-group mb-3">
              <label for="example-select">Status</label>
              <select class="form-control" name="status" id="example-select">
                <option value="0">Tidak aktif</option>
                <option value="1">Aktif</option>
              </select>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-warning waves-effect waves-light">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.modal -->
  <?php endforeach;?>