
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="http://digitalmaths.in/">DigitalMaths.in</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
 
</div>



<script src="<?php echo base_url('assets/admin/');?>plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?php echo base_url('assets/admin/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/chart.js/Chart.min.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/sparklines/sparkline.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/admin/');?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/admin/');?>plugins/daterangepicker/daterangepicker.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/summernote/summernote-bs4.min.js"></script>

<script src="<?php echo base_url('assets/admin/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="<?php echo base_url('assets/admin/');?>dist/js/adminlte.js"></script>

<script src="<?php echo base_url('assets/admin/');?>dist/js/pages/dashboard.js"></script>

<script src="<?php echo base_url('assets/admin/');?>dist/js/demo.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
