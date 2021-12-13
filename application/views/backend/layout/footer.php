<!-- Footer Start -->
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <script>
        document.write(new Date().getFullYear())
        </script> &copy; Dinas Kesehatan <a href="">REKDIKPAPES</a>
      </div>

    </div>
  </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="<?= base_url()?>assets/js/vendor.min.js"></script>

<!-- third party js -->
<script src="<?= base_url()?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Plugins js-->
<script src="<?= base_url()?>assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url()?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url()?>assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
</script>
<script src="<?= base_url()?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?= base_url()?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url()?>assets/libs/dropzone/min/dropzone.min.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="<?= base_url()?>assets/js/pages/datatables.init.js"></script>

<!-- Dashboard 2 init -->
<script src="<?= base_url()?>assets/js/pages/dashboard-2.init.js"></script>

<!-- App js-->
<script src="<?= base_url()?>assets/js/app.min.js"></script>

<script>
$(document).ready(function() {

  setInterval(function() {
    $.ajax({
      url: "<?= base_url('dashboard/get_notifikasi')?>",
      type: "POST",
      dataType: "json",
      data: {},
      success: function(data) {
        $("#total-regis").html(data.total_register);
        $("#nama").html(data.nama);
        $("#tanggal").html(data.tanggal);
        $(".pesan").html(data.msg);
      }
    });
  }, 1000), setInterval(function() {
    $.ajax({
      url: "<?= base_url('dashboard/get_notifikasi_pengaduan')?>",
      type: "POST",
      dataType: "json",
      data: {},
      success: function(data) {
        $("#total-pengaduan").html(data.total_pengaduan);
        $("#nama-pengadu").html(data.nama);
        $("#tanggal-pengadu").html(data.tanggal);
        $(".pesan-pengadu").html(data.msg);
      }
    });
  }, 1000)

})
</script>

</body>

</html>