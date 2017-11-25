<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/excanvas.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/fullcalendar.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/matrix.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/matrix.dashboard.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.gritter.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/matrix.interface.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/matrix.chat.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.validate.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/matrix.form_validation.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.wizard.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/matrix.popover.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/matrix.tables.js"></script> 
<script src="<?php echo base_url();?>assets/tabulator-master/dist/js/tabulator.min.js"></script> 
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/wysihtml5-0.3.0.js"></script>
<script src="<?php echo base_url();?>assets/matrix-admin-package/HTML/js/bootstrap-wysihtml5.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

</script>
</body>
</html>