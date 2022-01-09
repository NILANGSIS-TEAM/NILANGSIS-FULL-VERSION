<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php require 'process/autogenerate-code.php'; ?>
<?php include 'process/insert-data.php'; ?>
<!-- BEGIN: Page Main-->
<div id="main">
   <div class="row">
      <div class="content-wrapper-before gradient-45deg-red-pink"></div>
      <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
         <!-- Search for small screen-->
         <div class="container animated fadeIn">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Registrasi Tim Monitoring</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item">
                        <a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a href="user-registration">Registrasi Pengguna</a>
                     </li>
                     <li class="breadcrumb-item active">Registrasi Tim Monitoring
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
                  <h4 class="card-title">Tambah Data Tim Monitoring Pelanggaran Siswa</h4>
                  <form method="POST" autocomplete="OFF">
                     <div class="row">
                        <input name="KodeUSR" type="hidden" class="validate" value="<?php echo GenerateCodeUSR() ?>" readonly>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">person_outline</i>
                           <select name="NIP">
                              <option value="" disabled selected>- Pilih Pegawai -</option>
                              <?php
                                 require '../../configs/connection.php';
                                 
                                 $GetTablePG = mysqli_query($CONN, "SELECT * FROM pegawai ORDER BY NamaGR ASC");
                                 while ($GetData = mysqli_fetch_array($GetTablePG)) {
                                    echo "
                                       <option value='$GetData[NIP]'>$GetData[NamaGR]</option>
                                    ";
                                 }
                              ?>
                           </select>
                           <label>Pegawai</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">verified_user</i>
                           <input type="text" class="validate" name="Username" placeholder="Example : UserNilangsis_01" maxlength="35" oninput="this.value = this.value.replace(/[ ]/, '')">
                           <label>Username</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">lock_outline</i>
                           <input type="password" class="validate" name="Password" placeholder="Silahkan masukan password" maxlength="35">
                           <label>Password</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">lock_outline</i>
                           <input type="password" class="validate" name="RtyPassword" placeholder="Ulangi kembali password Anda" maxlength="35">
                           <label>Retype Password</label>
                        </div>
                        <div class="input-field col s12 mt-4">
                           <i class="material-icons prefix">recent_actors</i>
                           <select name="KodeLU">
                              <option value="" disabled selected>- Pilih Level User -</option>
                              <?php
                                 require '../../configs/connection.php';
                                 
                                 $GetTableLU = mysqli_query($CONN, "SELECT * FROM level_user");
                                 while ($GetData = mysqli_fetch_array($GetTableLU)) {
                                    echo "
                                       <option value='$GetData[KodeLU]'>$GetData[LevelUSR]</option>
                                    ";
                                 }
                              ?>
                           </select>
                           <label>Pegawai</label>
                        </div>
                        <div class="input-field col s12 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right" name="insert-into-users">
                              <i class="material-icons right">add</i>
                              Tambah
                           </button>
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
<?php include 'components/footer.php'; ?>
<?php include 'components/closing-page.php'; ?>