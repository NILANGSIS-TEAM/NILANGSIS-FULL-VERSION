<!-- BEGIN: Header-->
<?php require '../../configs/connection.php'; ?>
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
                        <?php
                        $NIP = $_SESSION['NIP'];
                        $GetTablePG = mysqli_query($CONN, "SELECT FotoPegawai FROM pegawai WHERE NIP = '$NIP'");
                        $GetDataFT = mysqli_fetch_array($GetTablePG);
                        ?>
                        <img src="../../assets/images/pegawai/<?php echo $GetDataFT['FotoPegawai'] ?>" alt="avatar"><i></i>
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
               <?php
               $GetTableHIS = mysqli_query($CONN, "SELECT histori_pelanggaran.*, siswa.*, tipe_pelanggaran.*, identitas_kelas.* FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS INNER JOIN tipe_pelanggaran ON histori_pelanggaran.KodeTP = tipe_pelanggaran.KodeTP INNER JOIN identitas_kelas ON siswa.KodeIK = identitas_kelas.KodeIK ORDER BY KodeHIS DESC LIMIT 3");
               while ($GetData = mysqli_fetch_array($GetTableHIS)) {
                  echo "
                        <li>
                           <a class='black-text' href='data-histori-pelanggaran-siswa'>
                              <span class='material-icons icon-bg-circle red small'>assignment_ind</span> $GetData[NamaSW] Kelas $GetData[Kelas]-$GetData[IdentitasKelas]
                           </a>
                           <time class='media-meta grey-text darken-2' datetime='2015-06-12T20:50:48+08:00'>Melakukan <span style='text-transform: lowercase;'>pelanggaran $GetData[TipePelanggaran]</span></time>
                        </li>
                     ";
               }
               ?>
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
<script src="../../assets/vendors/alerts/sweetalert2.all.min.js"></script>