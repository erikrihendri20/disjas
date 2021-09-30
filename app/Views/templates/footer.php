
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <span id="date-footer"></span> <a href="<?= base_url(); ?>">Import | Yogyakarta</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/admin-lte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin-lte/dist/js/adminlte.js'); ?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/raphael/raphael.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/jquery-mapael/jquery.mapael.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/jquery-mapael/maps/usa_states.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/admin-lte/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Datatables -->
<script src="<?= base_url('assets/admin-lte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin-lte/dist/js/demo.js'); ?>"></script>

<script>
    date = new Date()
    $('#date-footer').html(date.getFullYear())
    setTimeout(() => {
      $('#flash').css('display' , 'none')
    }, 1500);
</script>
<script src="<?= base_url('assets/my-assets/scripts/' . $script . '.js'); ?>"></script>
</body>
</html>
