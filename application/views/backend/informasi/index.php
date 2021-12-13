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
                  class="fe-add"></i>
                Tambah</a>

              <?= validation_errors('<div class="alert alert-danger" role="alert"> <i class="mdi mdi-block-helper mr-2"></i>','</div>')?>
              <?= $this->session->flashdata('message');?>

              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Email</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>


                <tbody>
                  <?php foreach($get_info  as $data):?>
                  <tr>
                    <td><?= $data['alamat']?></td>
                    <td><?= $data['kontak']?></td>
                    <td><?= $data['email']?></td>
                    <td><?= $data['created_at']?></td>
                    <td>
                      <a href="" class="badge badge-warning" data-target="#edit-modal<?= $data['id_info']?>"
                        data-toggle="modal"><i class="fe-edit" title="Edit"></i></a>
                      <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_info']?>"
                        data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                    </td>
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
        <form action="<?= base_url('backend/informasi')?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Informasi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-1" class="control-label">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control" cols="30"
                    rows="10"><?= set_value('alamat')?></textarea>
                  <?= form_error('nama', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-3" class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" id="field-3" placeholder="Enter Email"
                    value="<?= set_value('email')?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-2" class="control-label">Kontak</label>
                  <input type="number" class="form-control" name="kontak" id="field-2" placeholder="Enter kontak"
                    value="<?= set_value('kontak')?>">
                  <?= form_error('kontak', '<small class="text-danger">', '</small>')?>
                </div>
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
  <?php foreach($get_info as $edit):?>
  <div id="edit-modal<?= $edit['id_info']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= base_url('backend/informasi/edit')?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Update Informasi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body p-4">
            <input type="hidden" name="id_info" id="id_info" value="<?= $edit['id_info']?>">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-1" class="control-label">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control" cols="30"
                    rows="10"><?= $edit['alamat']?></textarea>
                  <?= form_error('nama', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-3" class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" id="field-3" placeholder="Enter Email"
                    value="<?= $edit['email']?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="field-2" class="control-label">Kontak</label>
                  <input type="number" class="form-control" name="kontak" id="field-2" placeholder="Enter kontak"
                    value="<?= $edit['kontak']?>">
                  <?= form_error('kontak', '<small class="text-danger">', '</small>')?>
                </div>
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
  <?php foreach($get_info as $hapus):?>
  <div id="hapus-modal<?= $hapus['id_info']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus Informasi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body p-4">
          <p>Apakah anda yakin ingin menghapus data yang dipilih?</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tidak</button>
          <a href="<?= base_url('backend/informasi/hapus/') . $hapus['id_info'];?>"
            class="btn btn-danger waves-effect waves-light">Hapus</a>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <?php endforeach;?>