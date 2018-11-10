<?php
$sis_adi	     =  $this->db->get_where('ayar',array('ayar_tip' => 'sis_adi'))->row()->ayar_deger;
$sis_baslik	     =  $this->db->get_where('ayar',array('ayar_tip' => 'sis_baslik'))->row()->ayar_deger;
?>
         <!-- ÜST BÖLÜM -->
<?php include 'ust.php'; ?>
         <!-- ÜST BÖLÜM SONU -->
<body>
<div class="container-scroller"><!-- CONTAINER -->
         <!-- CONTAINER BÖLÜM -->
         <!--UST MENU - LOGO-->
<?php include 'ustmenu.php'; ?>
         <!--UST MENU - LOGO SONU-->
    <!-- partial -->
<div class="container-fluid page-body-wrapper"> <!-- page-body-wrapper ends -->
<div class="main-panel">    <!-- main-panel -->
         <!--İÇERİK-->
<?php include 'icerik.php'; ?>
         <!--İÇERİK SON-->
         <!-- CONTAINER BÖLÜM SONU -->
         <!-- ALT BÖLÜM -->
<?php include 'alt.php'; ?>
         <!-- ALT BÖLÜM SONU -->
    <!-- partial -->
</div>    <!-- main-panel ends -->
</div>    <!-- page-body-wrapper ends -->
</div>    <!-- CONTAINER END -->
<!-- plugins:js -->
<script src="<?php echo base_url(); ?>template/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo base_url(); ?>template/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo base_url(); ?>template/js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url(); ?>template/js/dashboard.js"></script>
<script src="<?php echo base_url(); ?>template/js/todolist.js"></script>
<!-- End custom js for this page-->
</body>

</html>