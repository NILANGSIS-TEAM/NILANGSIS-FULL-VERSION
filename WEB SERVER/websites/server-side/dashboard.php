<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <meta name="description" content="NILANGSIS (Monitoring Pelanggaran Siswa) merupakan aplikasi pengolahan data pelanggaran tata tertib siswa yang dibangun berbasis website dan mobile.">
   <meta name="keywords" content="NILANGSIS, Nilangsis, Monitoring Pelanggaran Siswa">
   <meta name="author" content="Nilangsis">
   <title>NILANGSIS | Monitoring Pelanggaran Siswa</title>
   <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/logo/title-logo.png">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/vendors.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/animate-css/animate.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/chartist-js/chartist.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/chartist-js/chartist-plugin-tooltip.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/css/select.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/dropify/css/dropify.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/pages/data-tables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/themes/vertical-modern-menu-template/materialize.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/themes/vertical-modern-menu-template/style.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/pages/dashboard-modern.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/pages/intro.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/pages/charts-sparkline.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/custom/custom.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/custom/nilangsis-style.css">
</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
   <!-- BEGIN: Header-->
   <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed">
         <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-red-pink no-shadow">
            <div class="nav-wrapper">
               <div class="header-search-wrapper hide-on-med-and-down">
                  <form method="POST">
                     <i class="material-icons">search</i>
                     <input class="header-search-input z-depth-2" type="text" name="search-page" placeholder="Explore Nilangsis..." data-search="template-list" autocomplete="OFF" style="text-transform: Capitalize;">
                     <ul class="search-list collection display-none"></ul>
                     <?php include 'process/search-keywords.php'; ?>
                  </form>
               </div>
               <ul class="navbar-list right">
                  <li class="hide-on-med-and-down">
                     <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                        <i class="material-icons">settings_overscan</i>
                     </a>
                  </li>
                  <li>
                     <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown">
                        <i class="material-icons">notifications_none
                           <small class="notification-badge light-blue">3</small>
                        </i>
                     </a>
                  </li>
                  <li>
                     <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown">
                        <span class="avatar-status avatar-online">
                           <img src="../../assets/images/pegawai/file-foto.ektensi" alt="avatar"><i></i>
                        </span>
                     </a>
                  </li>
               </ul>
               <!-- notifications-dropdown -->
               <ul class="dropdown-content" id="notifications-dropdown">
                  <li>
                     <h6>Notifications<span class="new badge blue">3</span></h6>
                  </li>
                  <li class="divider"></li>
                  <li>
                     <a class="black-text" href="data-histori-pelanggaran-siswa">
                        <span class="material-icons icon-bg-circle red small">assignment_ind</span> Nama Siswa Pelanggar
                     </a>
                     <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">Melakukan <span style="text-transform: lowercase;">pelanggaran (ambil pelanggaran yang dilakukan)</span></time>
                  </li>
               </ul>
               <!-- profile-dropdown-->
               <ul class="dropdown-content" id="profile-dropdown">
                  <li>
                     <a class="grey-text text-darken-1" href="user-account">
                        <i class="material-icons">laptop_mac</i> Account
                     </a>
                  </li>
                  <li>
                     <a class="grey-text text-darken-1" href="user-profile">
                        <i class="material-icons">person_outline</i> Profile
                     </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                     <a class="grey-text text-darken-1" id="btn-logout">
                        <i class="material-icons">logout</i> Logout
                     </a>
                  </li>
               </ul>
            </div>
            <nav class="display-none search-sm">
               <div class="nav-wrapper">
                  <form id="navbarForm">
                     <div class="input-field search-input-sm">
                        <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                        <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label>
                        <i class="material-icons search-sm-close">close</i>
                        <ul class="search-list collection search-list-sm display-none"></ul>
                     </div>
                  </form>
               </div>
            </nav>
         </nav>
      </div>
   </header>
   <!-- END: Header-->
   <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
         <a class="brand-logo" href="dashboard">
            <span class="logo-text hide-on-med-and-down">NILANG'<span>SIS</span></span>
         </a>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
         <li class="bold">
            <a class="waves-effect waves-cyan" href="dashboard">
               <i class="material-icons">widgets</i>
               <span class="menu-title">Dashboard</span>
            </a>
         </li>
         <li class="navigation-header">
            <a class="navigation-header-text">Nilangsis Data</a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
         </li>
         <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
               <i class="material-icons">supervisor_account</i>
               <span class="menu-title">Master Data</span>
            </a>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                  <li>
                     <a href="data-pegawai">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Data Pegawai</span>
                     </a>
                  </li>
                  <li>
                     <a href="data-siswa">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Data Siswa</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
               <i class="material-icons">event_busy</i>
               <span class="menu-title">Data Pelanggaran</span>
            </a>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                  <li>
                     <a href="data-tipe-pelanggaran">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Tipe Pelanggaran</span>
                     </a>
                  </li>
                  <li>
                     <a href="data-histori-pelanggaran-siswa">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Pelanggaran Siswa</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
               <i class="material-icons">event_note</i>
               <span class="menu-title">Data Identitas</span>
            </a>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                  <li>
                     <a href="data-jabatan-pegawai">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Jabatan Pegawai</span>
                     </a>
                  </li>
                  <li>
                     <a href="data-identitas-kelas">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Identitas Kelas</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
               <i class="material-icons">insert_emoticon</i>
               <span class="menu-title">Data Pengguna</span>
            </a>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                  <li>
                     <a href="data-tim-monitoring">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Tim Monitoring</span>
                     </a>
                  </li>
                  <li>
                     <a href="user-registration">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Registrasi Pengguna</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="navigation-header">
            <a class="navigation-header-text">Nilangsis Form</a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
         </li>
         <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
               <i class="material-icons">supervisor_account</i>
               <span class="menu-title">Master Form</span>
            </a>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                  <li>
                     <a href="form-input-pegawai">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Input Pegawai</span>
                     </a>
                  </li>
                  <li>
                     <a href="form-input-siswa">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Input Siswa</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
               <i class="material-icons">event_busy</i>
               <span class="menu-title">Form Pelanggaran</span>
            </a>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                  <li>
                     <a href="form-input-tipe-pelanggaran">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Input Tipe Pelanggaran</span>
                     </a>
                  </li>
                  <li>
                     <a href="form-filter-pelanggaran">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Input Pelanggaran Siswa</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
               <i class="material-icons">event_note</i>
               <span class="menu-title">Form Identitas</span>
            </a>
            <div class="collapsible-body">
               <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                  <li>
                     <a href="form-input-jabatan">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Input Jabatan Pegawai</span>
                     </a>
                  </li>
                  <li>
                     <a href="form-input-identitas-kelas">
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>Input Identitas Kelas</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="navigation-header">
            <a class="navigation-header-text">Nilangsis Report</a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" href="report-data-pelanggaran-siswa">
               <i class="material-icons">restore</i>
               <span class="menu-title">Pelanggaran Siswa</span>
            </a>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" href="report-evaluasi-kedisiplinan-siswa">
               <i class="material-icons">face</i>
               <span class="menu-title">Evaluasi Kedisiplinan</span>
            </a>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" href="surat-panggilan">
               <i class="material-icons">error_outline</i>
               <span class="menu-title">Surat Panggilan</span>
            </a>
         </li>
         <li class="navigation-header">
            <a class="navigation-header-text">User Setting</a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" href="user-account">
               <i class="material-icons">lock_outline</i>
               <span class="menu-title">User Account</span>
            </a>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" href="user-profile">
               <i class="material-icons">person_outline</i>
               <span class="menu-title">User Profile</span>
            </a>
         </li>
         <li class="navigation-header">
            <a class="navigation-header-text">Lain-lain</a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" href="documentation">
               <i class="material-icons">help_outline</i>
               <span class="menu-title">Documentation</span>
            </a>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" href="about-nilangsis">
               <i class="material-icons">info_outline</i>
               <span class="menu-title">About Nilangsis</span>
            </a>
         </li>
         <li class="bold">
            <a class="waves-effect waves-cyan" id="side-logout">
               <i class="material-icons">logout</i>
               <span class="menu-title">Logout</span>
            </a>
         </li>
      </ul>
      <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only red darken-1" data-target="slide-out">
         <i class="material-icons">menu</i>
      </a>
   </aside>
   <!-- END: SideNav-->
   <!--/ START INTRO-->
   <div id="intro">
      <div class="row">
         <div class="col s12">
            <div id="img-modal" class="modal white">
               <div class="modal-content">
                  <div class="bg-img-div"></div>
                  <p class="modal-header right modal-close">
                     <span class="right">
                        <i class="material-icons right-align" style="font-size: 20px;">clear</i>
                     </span>
                  </p>
                  <div class="carousel carousel-slider center intro-carousel">
                     <div class="carousel-item slide-1">
                        <img src="../../assets/images/gallery/intro-slide-2.png" class="responsive-img animated fadeInUp slide-1-img">
                        <h5 class="dark-text mt-6 center animated fadeInUp" style="color: #c62828;">Welcome to Nilangsis</h5>
                        <p class="intro-step-text animated fadeInUp">
                           Sistem informasi NILANG'SIS (Monitoring Pelanggaran Siswa) merupakan aplikasi pengolahan data pelanggaran tata tertib siswa yang dibangun berbasis website dan mobile. Sistem informasi ini dibangun khusus untuk memonitoring kedisiplinan tindakan maupun prilaku siswa di sekolah.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--/ END INTRO-->
   <div id="main">
      <div class="row">
         <div class="content-wrapper-before gradient-45deg-red-pink"></div>
         <div class="col xl12 l12 m12 s12">
            <div class="container">
               <div class="section" id="materialize-sparkline">
                  <!-- Visualisasi master data nilangsis -->
                  <div class="row">
                     <div class="col xl12 l12 m12 s12 animate fadeRight">
                        <div class="card">
                           <div class="card-content">
                              <h4 class="card-title mb-0">
                                 Visualiasi Master Data Sistem Informasi Nilangsis
                                 <i class="material-icons float-right grey-text text-darken-1">people_outline</i>
                              </h4>
                              <p class="medium-small mb-1">Total master data Nilangsis SMP Negeri 1 Pujer</p>
                              <div class="row">
                                 <div class="col xl6 l6 m6 s12">
                                    <div class="card padding-4 animated fadeIn">
                                       <div class="row">
                                          <div class="col s5 m5">
                                             <h5 class="mb-0">0</h5>
                                             <p class="no-margin">Pegawai</p>
                                             <p class="mb-0 pt-8">Total : 0 Pegawai</p>
                                          </div>
                                          <div class="col s7 m7 right-align">
                                             <i class="material-icons background-round mt-5 mb-5 gradient-45deg-indigo-light-blue gradient-shadow white-text">supervisor_account</i>
                                             <p class="mb-0">
                                                <a href="data-pegawai" style="color: #777777;">Lihat data</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col xl6 l6 m6 s12">
                                    <div class="card padding-4 animated fadeIn">
                                       <div class="row">
                                          <div class="col s5 m5">
                                             <h5 class="mb-0">0</h5>
                                             <p class="no-margin">Siswa</p>
                                             <p class="mb-0 pt-8">Total : 0 Siswa</p>
                                          </div>
                                          <div class="col s7 m7 right-align">
                                             <i class="material-icons background-round mt-5 mb-5 gradient-45deg-green-teal gradient-shadow white-text">supervisor_account</i>
                                             <p class="mb-0">
                                                <a href="data-siswa" style="color: #777777;">Lihat data</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col xl6 l6 m6 s12">
                                    <div class="card padding-4 animated fadeIn">
                                       <div class="row">
                                          <div class="col s5 m5">
                                             <h5 class="mb-0">0</h5>
                                             <p class="no-margin">Tim Monitoring</p>
                                             <p class="mb-0 pt-8">Total : 0 Orang</p>
                                          </div>
                                          <div class="col s7 m7 right-align">
                                             <i class="material-icons background-round mt-5 mb-5 gradient-45deg-amber-amber gradient-shadow white-text">verified_user</i>
                                             <p class="mb-0">
                                                <a href="data-tim-monitoring" style="color: #777777;">Lihat data</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col xl6 l6 m6 s12">
                                    <div class="card padding-4 animated fadeIn">
                                       <div class="row">
                                          <div class="col s5 m5">
                                             <h5 class="mb-0">0</h5>
                                             <p class="no-margin">Pelanggaran</p>
                                             <p class="mb-0 pt-8">Total : 0 Pelanggaran</p>
                                          </div>
                                          <div class="col s7 m7 right-align">
                                             <i class="material-icons background-round mt-5 mb-5 gradient-45deg-red-pink gradient-shadow white-text">new_releases</i>
                                             <p class="mb-0">
                                                <a href="data-histori-pelanggaran-siswa" style="color: #777777;">Lihat data</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- BEGIN: Footer-->
   <footer class="page-footer footer footer-static footer-dark gradient-45deg-red-pink gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
         <div class="container">
            <span>
               Copyright &copy; 2021 <a href="dashboard"> TIF B Bondowoso </a> - <a href="dashboard">
                  NILANGSIS </a> IT-Team.
            </span>
            <span class="right hide-on-small-only">
               Supported by <a href="https://polije.ac.id/" target="_blank">Politeknik Negeri Jember</a>
            </span>
         </div>
      </div>
   </footer>
   <!-- END: Footer-->
   <!-- BEGIN VENDOR JS-->
   <script src="../../assets/js/vendors.min.js"></script>
   <!-- BEGIN VENDOR JS-->
   <!-- BEGIN PAGE VENDOR JS-->
   <script src="../../assets/vendors/chartjs/chart.min.js"></script>
   <script src="../../assets/vendors/chartist-js/chartist.min.js"></script>
   <script src="../../assets/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
   <script src="../../assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
   <!-- END PAGE VENDOR JS-->
   <script src="../../assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
   <script src="../../assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
   <script src="../../assets/vendors/data-tables/js/dataTables.select.min.js"></script>
   <script src="../../assets/vendors/dropify/js/dropify.min.js"></script>
   <!-- BEGIN THEME  JS-->
   <script src="../../assets/js/plugins.min.js"></script>
   <script src="../../assets/js/search.min.js"></script>
   <script src="../../assets/js/custom/custom-script.min.js"></script>
   <script src="../../assets/js/scripts/customizer.min.js"></script>
   <!-- END THEME  JS-->
   <script src="../../assets/vendors/sparkline/jquery.sparkline.min.js"></script>
   <script src="../../assets/js/scripts/charts-sparklines.min.js"></script>
   <script src="../../assets/js/scripts/form-file-uploads.min.js"></script>
   <!-- BEGIN PAGE LEVEL JS-->
   <script src="../../assets/js/scripts/dashboard-modern.js"></script>
   <script src="../../assets/js/scripts/data-tables.min.js"></script>
   <script src="../../assets/vendors/alerts/sweetalert2.all.min.js"></script>
   <script src="../../assets/js/scripts/intro.min.js"></script>
   <!-- END PAGE LEVEL JS-->
   </script>
   </body>
</html>