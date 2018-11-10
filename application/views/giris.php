<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 10.11.2018
 * Time: 14:06
 */

$sis_adi	     =  $this->db->get_where('ayar',array('ayar_tip' => 'sis_adi'))->row()->ayar_deger;
$sis_baslik	     =  $this->db->get_where('ayar',array('ayar_tip' => 'sis_baslik'))->row()->ayar_deger;
?>
<!-- ÜST BÖLÜM -->
<?php include 'arkaofis/ust.php'; ?>
<!-- ÜST BÖLÜM SONU -->
<body>
<div class="container-scroller"><!-- CONTAINER -->
    <!-- CONTAINER BÖLÜM -->
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100 mx-auto">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="#">
                            <div class="form-group">
                                <label class="label">Kullanıcı Adı</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Kullanıcı Adı">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="icon-check"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Şifre</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="*********">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="icon-check"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Giriş</button>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked>
                                        Oturumumu Hatırla
                                    </label>
                                </div>
                                <a href="#" class="text-small forgot-password text-black">Şifremi Unuttum</a>
                            </div>
                            <div class="form-group">
                                <del><button class="btn btn-block g-login"><img class="mr-3" src="<?php echo base_url(); ?>template/images/file-icons/icon-google.svg" alt="">Google Hesabım ile Giriş Yap</button></del>
                                <del><button class="btn btn-block g-login"><img class="mr-3" src="<?php echo base_url(); ?>template/images/file-icons/facebook.png" alt="">Facebook Hesabım ile Giriş Yap</button></del>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Henüz Hesabınız Yok mu ?</span>
                                <a href="<?php echo base_url(); ?>kayit" class="text-black text-small">Yeni Hesap Oluştur</a>
                            </div>
                        </form>
                    </div>
                    <!--
                    <ul class="auth-footer">
                        <li><a href="#">Koşullar</a></li>
                        <li><a href="#">Yardım</a></li>
                        <li><a href="#">Koşullar</a></li>
                    </ul>
                    <p class="footer-text text-center">Copyright © 2018 <a href="http://www.membaco.com" target="_blank">Memba Co. IT</a>. All rights reserved.</p>
                    -->
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo base_url(); ?>template/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo base_url(); ?>template/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?php echo base_url(); ?>template/js/template.js"></script>
<!-- endinject -->
</body>

</html>
