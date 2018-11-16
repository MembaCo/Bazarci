<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 14.11.2018
 * Time: 12:35
 */
?>
<!DOCTYPE html>
<?php if($enable_rtl) : ?>
<html dir="rtl">
<?php else : ?>
<html lang="en">
<?php endif; ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(isset($page_title)) : ?><?php echo $page_title ?> - <?php endif; ?><?php echo $this->settings->info->site_name ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <!-- SCRIPTS -->
    <script type="text/javascript">
        var global_base_url = "<?php echo site_url('/') ?>";
        var global_hash = "<?php echo $this->security->get_csrf_hash() ?>";
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.12/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.12/datatables.min.js"></script>

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <?php if(isset($datatable_lang) && !empty($datatable_lang)) : ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $.extend( true, $.fn.dataTable.defaults, {
                    "language": {
                        "url": "<?php echo $datatable_lang ?>"
                    }
                });
            });
        </script>
    <?php endif; ?>

    <!-- CODE INCLUDES -->
    <?php echo $cssincludes ?>

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
    <!-- Favicon: http://realfavicongenerator.net -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url() ?>assets/images/favicon/manifest.json">
    <link rel="mask-icon" href="<?php echo base_url() ?>assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
        <div class="nav-top flex-grow-1">
            <div class="container d-flex flex-row h-100 align-items-center">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                    <?php if($this->settings->info->logo_option) : ?><!-- logo ayarlarına bakıp getir -->
                        <a class="navbar-brand brand-logo" href="<?php echo site_url() ?>" title="<?php echo $this->settings->info->site_name ?>"><img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $this->settings->info->site_logo ?>" width="123" height="32"></a>
                    <?php else : ?>
                        <a class="navbar-brand brand-logo-mini" href="<?php echo site_url() ?>" title="<?php echo $this->settings->info->site_name ?>"><?php echo $this->settings->info->site_name ?></a>
                    <?php endif; ?>
                </div>

                <?php if($this->user->loggedin) : ?>
                <!-- Arama ve Dil Seçimi -->
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
                   <!-- Arama -->
                    <form class="search-field d-none d-md-flex" action="#">
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="search here...">
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                        <!-- Bildirim --><!-- Bildirm Yoksa Gizle -->buradayız
                        <?php if($this->user->info->noti_count > 0) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" onclick="load_notifications()" href="#" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="count"><?php echo $this->user->info->noti_count ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <!-- Bildirim Başlık -->
                                <a class="dropdown-item py-3">
                                    <p class="mb-0 font-weight-medium float-left">
                                        <?php echo lang("ctn_412") ?>
                                    </p>
                                    <span class="badge badge-pill badge-info float-right"><?php echo $this->user->info->noti_count ?></span>
                                </a>

                                <!-- Bildirim Scrool -->
                                <div id="notifications-scroll" >
                                    <div id="ajspinner_notification">
                                        <span class="glyphicon glyphicon-refresh" id="ajspinner_notification"></span>
                                    </div>
                                </div>
                                <!-- Bildirim İçerik -->

                                <div class="preview-item-content">
                                    <p class="font-weight-light">
                                        <center><a href="<?php echo site_url("arkaofis/bildirimler") ?>"><?php echo lang("ctn_414") ?></a></center>
                                    </p>
                                </div>

                            </div>
                        </li>
                        <?php endif; ?>

                        <!-- Profil -->
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="<?php echo base_url() ?><?php echo $this->settings->info->upload_path_relative ?>/<?php echo $this->user->info->avatar ?>" alt="profile"/>
                                <span class="nav-profile-name"><?php echo $this->user->info->username ?></span>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a href="<?php echo site_url("user_settings") ?>" class="dropdown-item">
                                    <i class="icon-settings text-primary mr-2"></i>
                                    <?php echo lang("ctn_156") ?>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo base_url("giris/logout/" . $this->security->get_csrf_hash()) ?>" class="dropdown-item">
                                    <i class="icon-logout text-primary mr-2"></i>
                                    <?php echo lang("ctn_149") ?>
                                </a>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="icon-menu text-dark"></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu -->
        <div class="nav-bottom">
            <div class="container">

                <?php if(isset($sidebar)) : ?>
                    <?php echo $sidebar ?>
                <?php endif; ?>
                <?php include(APPPATH . "views/layout/sidebar_links.php") ?>

            </div>
        </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <?php if($this->settings->info->install) : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info"><b>NOTICE</b> - <a href="<?php echo site_url("install") ?>">Great job on uploading all the files and setting up the site correctly! Let's now create the Admin account and set the default settings. Click here! This message will disappear once you have run the install process.</a></div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php $gl = $this->session->flashdata('globalmsg'); ?>
                <?php if(!empty($gl)) :?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert"><b><span class="glyphicon glyphicon-ok"></span></b> <?php echo $this->session->flashdata('globalmsg') ?></div>
                        </div>
                    </div>
                <?php endif; ?>


                <?php echo $content ?>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="w-100 clearfix">
                    <center><span class="pull-left"><?php echo lang("ctn_170") ?> <a href="http://www.membaco.com">Memba Co. IT</a> <?php echo $this->settings->info->site_name ?> V<?php echo $this->settings->version ?></span> <span class="pull-right"><?php echo lang("ctn_430") ?>: <a href="<?php echo site_url("members/index/1") ?>"><?php echo $this->settings->info->currently_online ?></a> - <a href="<?php echo site_url("home/change_language") ?>"><?php echo lang("ctn_171") ?></a></span></center>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo base_url();?>assets/js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
<script src="<?php echo base_url();?>assets/js/todolist.js"></script>
<!-- End custom js for this page-->


<!-- SCRIPTS -->
<script src="<?php echo base_url();?>assets/scripts/custom/global.js"></script>
<script src="<?php echo base_url();?>assets/scripts/libraries/jquery.nicescroll.min.js"></script>
<script type="text/javascript">
    $.widget.bridge('uitooltip', $.ui.tooltip);
</script>

<script type="text/javascript">
    $(document).ready(function() {
        // Get sidebar height
        resize_layout();
        var sb_h = $('.sidebar').height();
        var mc_h = $('#main-content').height();
        if(sb_h > mc_h) {
            $('#main-content').css("min-height", sb_h+50 + "px");
        }

        $('.nav-sidebar li').on('shown.bs.collapse', function () {
            $(this).find(".glyphicon-menu-right")
                .removeClass("glyphicon-menu-right")
                .addClass("glyphicon-menu-down");
            resize_layout();
        });
        $('.nav-sidebar li').on('hidden.bs.collapse', function () {
            $(this).find(".glyphicon-menu-down")
                .removeClass("glyphicon-menu-down")
                .addClass("glyphicon-menu-right");
            resize_layout();
        });

        function resize_layout()
        {
            var sb_h = $('.sidebar').height();
            var mc_h = $('#main-content').height();
            var w_h = $(window).height();
            if(sb_h > mc_h) {
                $('#main-content').css("min-height", sb_h+50 + "px");
            }
            if(w_h > mc_h) {
                $('#main-content').css("min-height", (w_h-(51+30)) +"px");
            }
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>

</html>