<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php include 'process/update-data.php'; ?>
<?php
   $KodeUSR = $_GET['KodeUSR'];
   $GetTableUsers = mysqli_query($CONN, "SELECT users.*, pegawai.*, level_user.*
      FROM
         users
      INNER JOIN
         pegawai ON users.NIP = pegawai.NIP
      INNER JOIN
         level_user ON users.KodeLU = level_user.KodeLU
      WHERE
         KodeUSR = '$KodeUSR'
   ");
   $GetData = mysqli_fetch_array($GetTableUsers);
?>
<!-- BEGIN: Page Main-->
<div id="main">
   <div class="row">
      <div class="content-wrapper-before gradient-45deg-red-pink"></div>
      <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
         <!-- Search for small screen-->
         <div class="container animated fadeIn">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Edit Data User Tim Monitoring</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item">
                        <a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a href="user-registration">Registrasi Pengguna</a>
                     </li>
                     <li class="breadcrumb-item active">Edit Data User Tim Monitoring
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12">
         <div class="container animated fadeIn">
            <div id="validation" class="card card card-default scrollspy">
               <div class="card-content">
                  <h4 class="card-title">Edit Data User Tim Monitoring Pelanggaran Siswa</h4>
                  <form method="POST" autocomplete="OFF">
                     <div class="row">
                        <input name="KodeUSR" type="hidden" class="validate" value="<?php echo $GetData['KodeUSR'] ?>" readonly>
                        <div class="input-field col s6 mt-4">
                           <i class="material-icons prefix">person_outline</i>
                           <select name="NIP">
                              <option value="<?php echo $GetData['NIP'] ?>"><?php echo $GetData['NamaGR'] ?></option>
                           </select>
                           <label>Nama Pemilik Akun</label>
                        </div>
                        <div class="input-field col s6 mt-4">
                           <i class="material-icons prefix">verified_user</i>
                           <input type="text" class="validate" name="Username" placeholder="Example : UserNilangsis_01" maxlength="35" oninput="this.value = this.value.replace(/[ ]/, '')" value="<?php echo $GetData['Username'] ?>">
                           <label>Username</label>
                        </div>
                        <div class="input-field col s12 mt-4">
                           <i class="material-icons prefix">recent_actors</i>
                           <select name="KodeLU">
                              <?php
                                 $GetTableLU = mysqli_query($CONN, "SELECT * FROM level_user");
                                 while ($GetDataLU = mysqli_fetch_array($GetTableLU)) {
                                    if ($GetData['KodeLU'] == $GetDataLU['KodeLU']) {
                                       $Selected = "selected";
                                    }
                                    else {
                                       $Selected = "";
                                    }
                                    echo "
                                       <option value='$GetDataLU[KodeLU]' $Selected>$GetDataLU[LevelUSR]</option>
                                    ";
                                 }
                              ?>
                           </select>
                           <label>Level User</label>
                        </div>
                        <div class="input-field col s12 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right" name="update-data-user">
                              <i class="material-icons right">cloud_upload</i>
                              Update
                           </button>
                           <a href="data-tim-monitoring" class="btn grey darken-2 waves-effect waves-light right mr-2">
                              <i class="material-icons right">cancel</i>
                              Batal
                           </a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="content-overlay"></div>
      </div>
   </div>
</div>
<!-- END: Page Main-->
<!-- BEGIN: Footer-->
<footer class="page-footer footer footer-fixed footer-dark gradient-45deg-red-pink gradient-shadow navbar-border navbar-shadow">
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
<?php include 'components/closing-page.php'; ?>