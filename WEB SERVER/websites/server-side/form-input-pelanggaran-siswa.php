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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Form Input Pelanggaran Siswa</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="form-input-pelanggaran-siswa">Input Pelanggaran Siswa</a>
                     </li>
                     <li class="breadcrumb-item active">Form Input Pelanggaran Siswa
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
                  <h4 class="card-title">Tambah Data Pelanggaran Siswa</h4>
                  <form method="POST" enctype="multipart/form-data" autocomplete="OFF">
                     <input type="hidden" name="GetKelas" value="<?php echo $_GET['Kelas'] ?>">
                     <input type="hidden" name="GetIK" value="<?php echo $_GET['KodeIK'] ?>">
                     <div class="row">
                        <input name="KodeHIS" type="hidden" class="validate" value="<?php GenerateCodeHIS() ?>" readonly>
                        <div class="input-field col s6 mt-4">
                           <?php
                              $Username = $_SESSION['Username'];
                              $GetDataTable = mysqli_query($CONN, "SELECT users.*, pegawai.* FROM users INNER JOIN pegawai ON users.NIP = pegawai.NIP WHERE Username = '$Username'");
                              $GetDataPelapor = mysqli_fetch_array($GetDataTable);
                           ?>
                           <i class="material-icons prefix">verified_user</i>
                           <select name="NIP">
                              <option value="<?php echo $GetDataPelapor['NIP'] ?>" readonly selected><?php echo $GetDataPelapor['NamaGR'] ?></option>
                           </select>
                           <label>Pelapor Pelanggaran</label>
                        </div>
                        <div class="input-field col s6 mt-4">
                           <i class="material-icons prefix">school</i>
                           <select name="NIS">
                              <option value="" disabled selected>- Pilih Siswa -</option>
                              <?php
                                 $Kelas = $_GET['Kelas'];
                                 $KodeIK = $_GET['KodeIK'];
                                 $GetTableSiswa = mysqli_query($CONN, "SELECT * FROM siswa WHERE Kelas = '$Kelas' AND KodeIK = '$KodeIK' ORDER BY NamaSW ASC");
                                 while ($GetData = mysqli_fetch_array($GetTableSiswa)) {
                                    echo "
                                       <option value='$GetData[NIS]'>$GetData[NamaSW]</option>
                                    ";
                                 }
                              ?>
                           </select>
                           <label>Siswa Pelanggar</label>
                        </div>
                        <div class="input-field col s6 mt-4">
                           <?php
                              $GetDataIK = mysqli_query($CONN, "SELECT IdentitasKelas FROM identitas_kelas WHERE KodeIK = '$KodeIK'");
                              $GetIK = mysqli_fetch_array($GetDataIK);
                           ?>
                           <i class="material-icons prefix">person</i>
                           <input type="text" class="validate" value="<?php echo "$Kelas $GetIK[IdentitasKelas]" ?>" readonly>
                           <label>Kelas</label>
                        </div>
                        <div class="input-field col s6 mt-4">
                           <i class="material-icons prefix">report_problem</i>
                           <select name="KodeTP">
                              <option value="" disabled selected>- Pilih Pelanggaran - </option>
                              <?php
                                 $GetTableTP = mysqli_query($CONN, "SELECT * FROM tipe_pelanggaran");
                                 while ($GetDataTP = mysqli_fetch_array($GetTableTP)) {
                                    echo "
                                       <option value='$GetDataTP[KodeTP]'>$GetDataTP[TipePelanggaran]</option>
                                    ";
                                 }
                              ?>
                           </select>
                           <label>Pelanggaran yang Dilakukan</label>
                        </div>
                        <div class="file-field input-field col s12 mt-4 mb-2">
                           <i class="material-icons prefix">report</i>
                           <label>Bukti Pelanggaran (Foto)*</label>
                        </div>
                        <div class="file-field input-field col s12">
                           <div id="file-upload" class="section">
                              <div class="row section">
                                 <div class="col s12">
                                    <input type="file" id="input-file-now" class="dropify" data-default-file="" name="BuktiPelanggaran">
                                 </div>
                              </div>
                           </div>
                           <div class="content-overlay"></div>
                        </div>
                        <div class="input-field col s6 mt-4">
                           <i class="material-icons prefix">event</i>
                           <input type="text" class="validate" name="TanggalKejadian" value="<?php echo date("d-m-Y") ?>" readonly>
                           <label>Tanggal Kejadian</label>
                        </div>
                        <div class="input-field col s6 mt-4">
                           <i class="material-icons prefix">access_alarm</i>
                           <input type="time" class="validate" name="Pukul" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i') ?>" readonly>
                           <label>Pukul</label>
                        </div>
                        <div class="input-field col s12 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right" name="insert-into-HIS">
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