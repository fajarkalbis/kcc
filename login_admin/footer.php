  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Kalbis For Future
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Kalbis Career Center</a>.</strong> All rights reserved.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="../core/bower_components/ckeditor/ckeditor.js"></script>
<script src="../core/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../core/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../core/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../core/dist/js/adminlte.min.js"></script>
<script src="../core/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>
  $(function () {
      $('.timepicker').timepicker({
      showInputs: false
    })
       $('.select2').select2()
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
      
      
  })
</script>
	 </body>
</html>