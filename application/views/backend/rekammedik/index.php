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
                    <th class="text-center">Aksi</th>
                    <th class="text-center">No. RM</th>
                    <th class="text-center">Tgl Lahir</th>
                    <th class="text-center">Diagnosa</th>
                    <th class="text-center">Jenis Obat</th>
                    <th class="text-center">No. Jaminan Kesehatan</th>
                    <th class="text-center">Tanggal Update</th>
                  </tr>
                </thead>


                <tbody>
                  <?php foreach($get_rekammedik as $data):?>
                  <tr>
                    <td>
                      <a href="" class="badge badge-warning" data-target="#edit-modal<?= $data['id_rekam']?>"
                        data-toggle="modal"><i class="fe-edit" title="Edit"></i></a>
                      <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_rekam']?>"
                        data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                    </td>
                    <td><?= $data['no_rm']?></td>
                    <td><?= $data['tgl_lahir']?></td>
                    <td><?= $data['diagnosa']?></td>
                    <td><?= $data['jenis_obat']?></td>
                    <td><?= word_limiter($data['no_jaminan'],5)?></td>
                    <td><?= $data['created_at']?></td>
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="<?= base_url('backend/rekammedik')?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Rekam Medik</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-1" class="control-label">No. Rekam Medik</label>
                  <input type="text" class="form-control" name="no_rm" id="field-1" placeholder="Enter no. rekam medik"
                    value="<?= set_value('no_rm')?>">
                  <?= form_error('no_rm', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="field-2" class="control-label">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir" id="field-2" placeholder="Enter tanggal lahir"
                value="<?= set_value('tgl_lahir')?>">
              <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>')?>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-3" class="control-label">Diagnosa</label>
                  <textarea name="diagnosa" id="summernote-basic1" class="form-control" cols="30"
                    rows="5"><?= set_value('diagnosa')?></textarea>
                  <?= form_error('diagnosa', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-4" class="control-label">Jenis Obat</label>
                  <textarea name="jenis_obat" id="summernote-basic2" class="form-control" cols="30"
                    rows="5"><?= set_value('jenis_obat')?></textarea>
                  <?= form_error('jenis_obat', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="field-5" class="control-label">No. Jaminan Kesehatan</label>
              <input type="number" class="form-control" name="no_jaminan" id="field-5"
                placeholder="Enter jaminan kesehatan">
              <?= form_error('no_jaminan', '<small class="text-danger">', '</small>')?>
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
  <?php foreach($get_rekammedik as $edit):?>
  <div id="edit-modal<?= $edit['id_rekam']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="<?= base_url('backend/rekammedik/edit')?>" method="POST">
          <div class="modal-header">
            <h4 class="modal-title">Update Rekam Medik</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body p-4">

            <input type="hidden" name="id_rekam" id="id_rekam" value="<?= $edit['id_rekam']?>">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-1" class="control-label">No. Rekam Medik</label>
                  <input type="text" class="form-control" name="no_rm" id="field-1" placeholder="Enter no. rekam medik"
                    value="<?= $edit['no_rm']?>">
                  <?= form_error('no_rm', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="field-2" class="control-label">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir" id="field-2" placeholder="Enter tanggal lahir"
                value="<?= $edit['tgl_lahir']?>">
              <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>')?>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-3" class="control-label">Diagnosa</label>
                  <textarea name="diagnosa" id="summernote-basic3" class="form-control" cols="20"
                    rows="5"><?= $edit['diagnosa']?></textarea>
                  <?= form_error('diagnosa', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="field-4" class="control-label">Jenis Obat</label>
                  <textarea name="jenis_obat" id="summernote-basic4" class="form-control" cols="30"
                    rows="5"><?= $edit['jenis_obat']?></textarea>
                  <?= form_error('jenis_obat', '<small class="text-danger">', '</small>')?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="field-5" class="control-label">No. Jaminan Kesehatan</label>
              <input type="number" class="form-control" name="no_jaminan" id="field-5"
                placeholder="Enter jaminan kesehatan" value="<?= $edit['no_jaminan']?>">
              <?= form_error('no_jaminan', '<small class="text-danger">', '</small>')?>
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
  <?php foreach($get_rekammedik as $hapus):?>
  <div id="hapus-modal<?= $hapus['id_rekam']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Hapus Rekam Medik</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body p-4">

          <p>Apakah anda yakin ingin menghapus data tersebut?</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url('backend/rekammedik/hapus/') . $hapus['id_rekam']?>"
            class="btn btn-danger waves-effect waves-light">Hapus</a>
        </div>
      </div>
    </div>
  </div><!-- /.modal -->
  <?php endforeach;?>