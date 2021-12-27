<?php $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); $active = "active"; ?>
<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
   <div class="brand-sidebar">
      <a class="brand-logo" href="dashboard">
         <span class="logo-text hide-on-med-and-down">NILANG'<span>SIS</span></span>
      </a>
   </div>
   <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
      <li class="bold <?php if ($url_path == "/projects/nilangsis/websites/server-side/dashboard") {echo $active;} ?>">
         <a class="waves-effect waves-cyan <?php if ($url_path == "/projects/nilangsis/websites/server-side/dashboard") {echo $active;} ?>" href="dashboard">
            <i class="material-icons">widgets</i>
            <span class="menu-title">Dashboard</span>
         </a>
      </li>
      <li class="navigation-header">
         <a class="navigation-header-text">Nilangsis Data</a>
         <i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-pegawai"|| $url_path == "/projects/nilangsis/websites/server-side/data-siswa") {echo $active;} ?> bold">
         <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
            <i class="material-icons">supervisor_account</i>
            <span class="menu-title">Master Data</span>
         </a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-pegawai") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-pegawai") {echo $active;} ?>" href="data-pegawai">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Data Pegawai</span>
                  </a>
               </li>
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-siswa") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-siswa") {echo $active;} ?>" href="data-siswa">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Data Siswa</span>
                  </a>
               </li>
            </ul>
         </div>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-tipe-pelanggaran" || $url_path == "/projects/nilangsis/websites/server-side/data-histori-pelanggaran-siswa") {echo $active;} ?> bold">
         <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
            <i class="material-icons">event_busy</i>
            <span class="menu-title">Data Pelanggaran</span>
         </a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-tipe-pelanggaran") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-tipe-pelanggaran") {echo $active;} ?>" href="data-tipe-pelanggaran">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Tipe Pelanggaran</span>
                  </a>
               </li>
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-histori-pelanggaran-siswa") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-histori-pelanggaran-siswa") {echo $active;} ?>" href="data-histori-pelanggaran-siswa">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Pelanggaran Siswa</span>
                  </a>
               </li>
            </ul>
         </div>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-jabatan-pegawai" || $url_path == "/projects/nilangsis/websites/server-side/data-identitas-kelas") {echo $active;} ?> bold">
         <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
            <i class="material-icons">event_note</i>
            <span class="menu-title">Data Identitas</span>
         </a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-jabatan-pegawai") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-jabatan-pegawai") {echo $active;} ?>" href="data-jabatan-pegawai">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Jabatan Pegawai</span>
                  </a>
               </li>
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-identitas-kelas") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-identitas-kelas") {echo $active;} ?>" href="data-identitas-kelas">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Identitas Kelas</span>
                  </a>
               </li>
            </ul>
         </div>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-tim-monitoring" || $url_path == "/projects/nilangsis/websites/server-side/user-registration") {echo $active;} ?> bold">
         <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
            <i class="material-icons">insert_emoticon</i>
            <span class="menu-title">Data Pengguna</span>
         </a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-tim-monitoring") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/data-tim-monitoring") {echo $active;} ?>" href="data-tim-monitoring">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Tim Monitoring</span>
                  </a>
               </li>
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/user-registration") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/user-registration") {echo $active;} ?>" href="user-registration">
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
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-pegawai" || $url_path == "/projects/nilangsis/websites/server-side/form-input-siswa") {echo $active;} ?> bold">
         <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
            <i class="material-icons">supervisor_account</i>
            <span class="menu-title">Master Form</span>
         </a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-pegawai") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-pegawai") {echo $active;} ?>" href="form-input-pegawai">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Input Pegawai</span>
                  </a>
               </li>
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-siswa") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-siswa") {echo $active;} ?>" href="form-input-siswa">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Input Siswa</span>
                  </a>
               </li>
            </ul>
         </div>
      </li>
      <li class="<?php if ($url_path =="/projects/nilangsis/websites/server-side/form-input-tipe-pelanggaran" || $url_path == "/projects/nilangsis/websites/server-side/form-filter-pelanggaran") {echo $active;} ?> bold">
         <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
            <i class="material-icons">event_busy</i>
            <span class="menu-title">Form Pelanggaran</span>
         </a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-tipe-pelanggaran") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-tipe-pelanggaran") {echo $active;} ?>" href="form-input-tipe-pelanggaran">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Input Tipe Pelanggaran</span>
                  </a>
               </li>
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-filter-pelanggaran") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-filter-pelanggaran") {echo $active;} ?>" href="form-filter-pelanggaran">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Input Pelanggaran Siswa</span>
                  </a>
               </li>
            </ul>
         </div>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-jabatan" || $url_path == "/projects/nilangsis/websites/server-side/form-input-identitas-kelas") {echo $active;} ?> bold">
         <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
            <i class="material-icons">event_note</i>
            <span class="menu-title">Form Identitas</span>
         </a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-jabatan") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-jabatan") {echo $active;} ?>" href="form-input-jabatan">
                     <i class="material-icons">radio_button_unchecked</i>
                     <span>Input Jabatan Pegawai</span>
                  </a>
               </li>
               <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-identitas-kelas") {echo $active;} ?>">
                  <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/form-input-identitas-kelas") {echo $active;} ?>" href="form-input-identitas-kelas">
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
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/report-data-pelanggaran-siswa") {echo $active;} ?> bold">
         <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/report-data-pelanggaran-siswa") {echo $active;} ?> waves-effect waves-cyan" href="report-data-pelanggaran-siswa">
            <i class="material-icons">restore</i>
            <span class="menu-title">Pelanggaran Siswa</span>
         </a>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/report-evaluasi-kedisiplinan-siswa") {echo $active;} ?> bold">
         <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/report-evaluasi-kedisiplinan-siswa") {echo $active;} ?> waves-effect waves-cyan" href="report-evaluasi-kedisiplinan-siswa">
            <i class="material-icons">face</i>
            <span class="menu-title">Evaluasi Kedisiplinan</span>
         </a>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/surat-panggilan") {echo $active;} ?> bold">
         <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/surat-panggilan") {echo $active;} ?> waves-effect waves-cyan" href="surat-panggilan">
            <i class="material-icons">error_outline</i>
            <span class="menu-title">Surat Panggilan</span>
         </a>
      </li>
      <li class="navigation-header">
         <a class="navigation-header-text">User Setting</a>
         <i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/user-account") {echo $active;} ?> bold">
         <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/user-account") {echo $active;} ?> waves-effect waves-cyan" href="user-account">
            <i class="material-icons">lock_outline</i>
            <span class="menu-title">User Account</span>
         </a>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/user-profile") {echo $active;} ?> bold">
         <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/user-profile") {echo $active;} ?> waves-effect waves-cyan" href="user-profile">
            <i class="material-icons">person_outline</i>
            <span class="menu-title">User Profile</span>
         </a>
      </li>
      <li class="navigation-header">
         <a class="navigation-header-text">Lain-lain</a>
         <i class="navigation-header-icon material-icons">more_horiz</i>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/documentation") {echo $active;} ?> bold">
         <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/documentation") {echo $active;} ?> waves-effect waves-cyan" href="documentation">
            <i class="material-icons">help_outline</i>
            <span class="menu-title">Documentation</span>
         </a>
      </li>
      <li class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/about-nilangsis") {echo $active;} ?> bold">
         <a class="<?php if ($url_path == "/projects/nilangsis/websites/server-side/about-nilangsis") {echo $active;} ?> waves-effect waves-cyan" href="about-nilangsis">
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