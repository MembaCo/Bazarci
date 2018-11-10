<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 9.11.2018
 * Time: 14:31
 */
?>

<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
    <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                <a class="navbar-brand brand-logo" href="#"><img src="<?php echo base_url(); ?>template/images/logo.svg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="<?php echo base_url(); ?>template/images/logo-mini.svg" alt="logo"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
                <form class="search-field d-none d-md-flex" action="#">
                    <div class="form-group mb-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="ara...">
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">

                   <!--<li class="nav-item dropdown d-none d-lg-flex nav-language">
                        <div class="nav-link">
                  <span class="dropdown-toggle btn btn-sm" id="languageDropdown" data-toggle="dropdown">Türkçe
                    <i class="flag-icon flag-icon-tr ml-2"></i>
                  </span>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                                <a class="dropdown-item font-weight-medium">
                                    French
                                    <i class="flag-icon flag-icon-fr ml-2"></i>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font-weight-medium">
                                    Espanol
                                    <i class="flag-icon flag-icon-es ml-2"></i>
                                </a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font-weight-medium">
                                    Arabic
                                    <i class="flag-icon flag-icon-sa ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </li>-->

                   <!--<li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-envelope mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <div class="dropdown-item">
                                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                                </p>
                                <span class="badge badge-info badge-pill float-right">View all</span>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                                        <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        The meeting is cancelled
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                                        <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        New product launch
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                </div>
                                <div class="preview-item-content flex-grow">
                                    <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                                        <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                    </h6>
                                    <p class="font-weight-light small-text">
                                        Upcoming board meeting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>-->

                   <!-- <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item py-3">
                                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                                </p>
                                <span class="badge badge-pill badge-info float-right">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="icon-exclamation mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="icon-bubble mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Profil</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        Özel Mesaj
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="icon-user-following mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Yeni Mesaj</h6>
                                    <p class="font-weight-light small-text mb-0">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li> -->

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="https://via.placeholder.com/39x39" alt="profile"/>
                            <span class="nav-profile-name">Session Kullanıcı</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="icon-settings text-primary mr-2"></i>
                                Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">
                                <i class="icon-logout text-primary mr-2"></i>
                                Çıkış
                            </a>
                        </div>
                    </li>
                </ul>

                <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu text-dark"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="nav-bottom">
        <div class="container">
            <ul class="nav page-navigation">

                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>arkaofis" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Kontrol Paneli</span></a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="link-icon icon-screen-tablet"></i><span class="menu-title">Ürünler</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Kategoriler</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Ürünler</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Özellikler</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Filtreler</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Seçenekler</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="link-icon icon-people"></i><span class="menu-title">Kullanıcılar</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Yönericiler</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Satıcılar</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Müşteriler</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Kullanıcı Grupları</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="link-icon icon-pie-chart"></i><span class="menu-title">Raporlar</span><i class="menu-arrow"></i></a>
                    <div class="submenu">
                        <ul class="submenu-item">
                            <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Rapor 1</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Rapor 2</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Rapor 3</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Rapor 4</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="link-icon icon-wrench"></i><span class="menu-title">Site Ayarları</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>