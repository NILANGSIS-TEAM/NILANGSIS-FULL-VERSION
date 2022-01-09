<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php include 'process/update-data.php'; ?>
<?php 
   $NIS = $_GET['NIS'];
   $GetTableSiswa = mysqli_query($CONN, "SELECT siswa.*, identitas_kelas.IdentitasKelas
      FROM
         siswa
      INNER JOIN
         identitas_kelas ON siswa.KodeIK = identitas_kelas.KodeIK
      WHERE
         NIS = '$NIS'
   ");
   $GetData = mysqli_fetch_array($GetTableSiswa);
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Form Edit Data Siswa</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="data-siswa">Data Siswa</a>
                     </li>
                     <li class="breadcrumb-item active">Form Edit Data Siswa
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 mt-3">
         <div class="container animated fadeIn">
            <div id="validation" class="card card card-default scrollspy border-radius-6">
               <div class="card-content">
                  <form method="POST" autocomplete="OFF">
                     <div class="row">
                        <div class="col xl2 l2 m12 s12">
                           <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="../../assets/images/siswa/<?php echo $GetData['FotoSiswa'] ?>" width="100%">
                        </div>
                        <div class="col xl10 l10 m12 s12">
                           <h4 class="mt-2">
                              <span><?php echo $GetData['NamaSW'] ?></span>
                           </h4>
                        </div>
                        <div class="input-field col s12 mt-6">
                           <i class="material-icons prefix">verified_user</i>
                           <input type="text" class="validate" name="NIS" value="<?php echo $GetData['NIS'] ?>" readonly>
                           <label>Nomor Induk Siswa (NIS)</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">person</i>
                           <input type="text" class="validate" name="NamaSW" placeholder="Masukan nama lengkap" oninput="this.value=this.value.replace(/[^a-zA-Z ]/, '')" maxlength="30" value="<?php echo $GetData['NamaSW'] ?>" style="text-transform: capitalize;">
                           <label>Nama Siswa</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">mood</i>
                           <select name="JenisKelamin">
                              <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
                              <option value="Laki-laki" <?php if ($GetData['JenisKelamin'] == 'Laki-laki') {echo "selected";} ?>>Laki-laki</option>
                              <option value="Perempuan" <?php if ($GetData['JenisKelamin'] == 'Perempuan') {echo "selected";} ?>>Perempuan</option>
                           </select>
                           <label>Jenis Kelamin</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">satellite</i>
                           <input type="text" class="validate" name="TempatLahir" placeholder="Masukan tempat lahir" oninput="this.value=this.value.replace(/[^a-zA-Z,. ]/, '')" maxlength="20" value="<?php echo $GetData['TempatLahir'] ?>" style="text-transform: capitalize;">
                           <label>Tempat Lahir</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">today</i>
                           <input type="date" class="validate" name="TanggalLahir" value="<?php echo $GetData['TanggalLahir'] ?>">
                           <label>Tanggal Lahir</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">filter_7</i>
                           <select name="Kelas">
                              <option value="" disabled selected>- Pilih Kelas -</option>
                              <option value="VII" <?php if ($GetData['Kelas'] == 'VII') {echo "selected";} ?>>VII</option>
                              <option value="VIII" <?php if ($GetData['Kelas'] == 'VIII') {echo "selected";} ?>>VIII</option>
                              <option value="IX" <?php if ($GetData['Kelas'] == 'IX') {echo "selected";} ?>>IX</option>
                           </select>
                           <label>Kelas</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">format_shapes</i>
                           <select name="KodeIK">
                              <option value="" disabled selected>- Pilih Identitas Kelas -</option>
                              <?php
                                 require '../../configs/connection.php';
                                 
                                 $GetTableIK = mysqli_query($CONN, "SELECT * FROM identitas_kelas");
                                 while ($GetDataIK = mysqli_fetch_array($GetTableIK)) {
                                    if ($GetData['KodeIK'] == $GetDataIK['KodeIK']) {
													$GetSelected = "selected";
												}
												else {
													$GetSelected = "";
												}
												echo "
													<option value='$GetDataIK[KodeIK]' $GetSelected>$GetDataIK[IdentitasKelas]</option>
												";
                                 }
                              ?>
                           </select>
                           <label>Identitas Kelas</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">phone_in_talk</i>
                           <input type="text" class="validate" name="NomorHPSiswa" placeholder="Masukan nomor handphone siswa" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="13" value="<?php echo $GetData['NomorHPSiswa'] ?>">
                           <label>Nomor Handphone Siswa</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">phone_in_talk</i>
                           <input type="text" class="validate" name="NomorHPWali" placeholder="Masukan nomor handphone orang tua/wali" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="13" value="<?php echo $GetData['NomorHPWali'] ?>">
                           <label>Nomor Handphone Orang Tua/Wali</label>
                        </div>
                        <div class="input-field col s12 mt-4">
                           <i class="material-icons prefix">edit_location</i>
                           <textarea class="materialize-textarea" name="Alamat" placeholder="Example : Jl. Remartadinata, Gg. Remaja No.50, Kec.Bondowoso, Bondowoso Kota" style="text-transform: capitalize;"><?php echo $GetData['Alamat'] ?></textarea>
                           <label>Alamat Tempat Tinggal</label>
                        </div>
                        <div class="input-field col s12 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right" name="update-data-siswa">
                              <i class="material-icons right">cloud_upload</i>
                              Update
                           </button>
                           <a href="data-siswa" class="btn grey darken-2 waves-effect waves-light right mr-2">
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
<?php include 'components/footer.php'; ?>
<?php include 'components/closing-page.php'; ?>