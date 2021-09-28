 <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="http://lpdb.id" class="page-logo-link press-scale-down d-flex align-items-center position-relative" target="_blank" style="margin-left:30px">
                            <span><img src="<?= base_url('assets/img/horizontal_130x58.png')?>" alt="SIAB" aria-roledescription="logo"></span>
                            <span class="page-logo-text mr-1"></span>
                            <!-- <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span> -->
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav" role="navigation">
                        <div class="nav-filter">
                            <div class="position-relative">
                                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                    <i class="fal fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info-card">
                            <img src="<?= base_url('assets/img/demo/avatars/avatar-admin.png')?>" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                            <div class="info-card-text">
                                <a href="#" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        Dr. Codex Lantern
                                    </span>
                                </a>
                                <span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>
                            </div>
                            <img src="<?= base_url('assets/img/card-backgrounds/cover-2-lg.png')?>" class="cover" alt="cover">
                            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                                <i class="fal fa-angle-down"></i>
                            </a>
                        </div>
                        <ul id="js-nav-menu" class="nav-menu">
                            <li class="active open">
                                <a href="<?= base_url('dashboard'); ?>" title="Application Intel" data-filter-tags="application intel">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-title">Menu Utama</li>
                            <li>
                                <a href="#" title="UI Components" data-filter-tags="ui components">
                                    <i class="fal fa-window"></i>
                                    <span class="nav-link-text" data-i18n="nav.ui_components">Management Master</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?= base_url('pegawai'); ?> " title="Alerts" data-filter-tags="ui components alerts">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_alerts">Master Kegiatan Output</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Administrator</li>
                            <li>
                                <a href="#" title="Plugins" data-filter-tags="plugins">
                                    <i class="fal fa-shield-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.plugins">Maintenance user</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#" title="Plugins FAQ" data-filter-tags="plugins plugins faq">
                                            <span class="nav-link-text" data-i18n="nav.plugins_plugins_faq">Hak Akses</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="filter-message js-filter-message bg-success-600"></div>
                    </nav>
                    <!-- END PRIMARY NAVIGATION -->
                </aside>
                <!-- END Left Aside -->
        <div class="page-content-wrapper">
        <!-- BEGIN Page Header -->
        <header class="page-header" role="banner">
            <!-- we need this logo when user switches to nav-function-top -->
            <div class="page-logo">
                <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                    <img src="<?= base_url('assets/img/logo.png')?>" alt="sipegi" aria-roledescription="logo">

                </a>
            </div>
            <!-- DOC: nav menu layout change shortcut -->
            <div class="hidden-md-down dropdown-icon-menu position-relative">
                <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                    <i class="ni ni-menu"></i>
                </a>
                <!-- <ul>
                    <li>
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                            <i class="ni ni-lock-nav"></i>
                        </a>
                    </li>
                </ul> -->
            </div>
            <!-- DOC: mobile button appears during mobile width -->
            <div class="hidden-lg-up">
                <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                    <i class="ni ni-menu"></i>
                </a>
            </div>
            <!-- <div class="search">
                <form class="app-forms hidden-xs-down" role="search" action="page_search.html" autocomplete="off">
                    <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
                    <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                        <i class="fal fa-times"></i>
                    </a>
                </form>
            </div> -->
            <div class="ml-auto d-flex">
                <!-- activate app search icon (mobile) -->
                <div class="hidden-sm-up">
                    <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                        <i class="fal fa-search"></i>
                    </a>
                </div>
                <!-- date today -->
                <div class="hidden-md-down">
                    <a href="#" class="header-icon" data-toggle="modal" data-target="#">
                        <span class="js-get-date"></span>
                    </a>
                </div>
                <!-- app user menu -->
                <div>

                    <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                        <img src="<?= base_url('assets/img/demo/avatars/avatar-admin.png')?>" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                        <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                <span class="mr-2">
                                    <img src="<?= base_url('assets/img/demo/avatars/avatar-admin.png')?>" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                </span>
                                <div class="info-card-text">
                                    <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                    <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="#" class="dropdown-item" data-action="app-reset">
                            <span data-i18n="drpdwn.reset_layout">My Profile</span>
                        </a>
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                            <span data-i18n="drpdwn.settings">Settings</span>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item fw-500 pt-3 pb-3" href="page_login-alt.html">
                            <span data-i18n="drpdwn.page-logout">Logout</span>
                            <span class="float-right fw-n">&commat;codexlantern</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- END Page Header -->