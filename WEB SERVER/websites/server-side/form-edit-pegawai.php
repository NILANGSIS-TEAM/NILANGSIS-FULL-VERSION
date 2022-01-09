<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php include 'process/update-data.php'; ?>
<?php 
   $NIP = $_GET['NIP'];
   $GetTablePegawai = mysqli_query($CONN, "SELECT pegawai.*, jabatan.Jabatan
      FROM
         pegawai
      INNER JOIN
         jabatan ON pegawai.KodeJBT = jabatan.KodeJBT
      WHERE
         NIP = '$NIP'
   ");
   $GetData = mysqli_fetch_array($GetTablePegawai);
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Form Edit Data Pegawai</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="data-pegawai">Data Pegawai</a>
                     </li>
                     <li class="breadcrumb-item active">Form Edit Data Pegawai
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
                           <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="../../assets/images/pegawai/<?php echo $GetData['FotoPegawai'] ?>" width="100%">
                        </div>
                        <div class="col xl10 l10 m12 s12">
                           <h4 class="mt-2">
                              <span><?php echo $GetData['NamaGR'] ?></span>
                           </h4>
                        </div>
                        <div class="input-field col s12 mt-6">
                           <i class="material-icons prefix">verified_user</i>
                           <input type="text" class="validate" name="NIP" placeholder="Example : 198609262015051001" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="18" value="<?php echo $GetData['NIP']; ?>" readonly>
                           <label>Nomor Induk Pegawai (NIP)</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">person</i>
                           <input type="text" class="validate" name="NamaGR" placeholder="Example : Juandi Kurniawan, S.Pd" oninput="this.value=this.value.replace(/[^a-zA-Z,. ]/, '')" maxlength="40" value="<?php echo $GetData['NamaGR']; ?>" style="text-transform: capitalize;">
                           <label>Nama Pegawai</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">mood</i>
                           <select name="JenisKelamin">
                              <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
                              <option value="Laki-laki" <?php if ($GetData['JenisKelamin'] == 'Laki-laki') {echo "selected"; } ?>>Laki-laki</option>
                              <option value="Perempuan" <?php if ($GetData['JenisKelamin'] == 'Perempuan') {echo "selected"; } ?>>Perempuan</option>
                           </select>
                           <label>Jenis Kelamin</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">satellite</i>
                           <input type="text" class="validate" name="TempatLahir" placeholder="Masukan tempat lahir" oninput="this.value=this.value.replace(/[^a-zA-Z,. ]/, '')" maxlength="20" value="<?php echo $GetData['TempatLahir']; ?>" style="text-transform: capitalize;">
                           <label>Tempat Lahir</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">today</i>
                           <input type="date" class="validate" name="TanggalLahir" value="<?php echo $GetData['TanggalLahir']; ?>">
                           <label>Tanggal Lahir</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">perm_contact_calendar</i>
                           <select name="KodeJBT">
                              <option value="" disabled selected>- Pilih Jabatan -</option>
                              <?php
                                 $GetTableJBT = mysqli_query($CONN, "SELECT * FROM jabatan");
                                 while ($GetDataJBT = mysqli_fetch_array($GetTableJBT)) {
                                    if ($GetData['KodeJBT'] == $GetDataJBT['KodeJBT']) {
													$GetSelected = "selected";
												}
												else {
													$GetSelected = "";
												}
												echo "
													<option value='$GetDataJBT[KodeJBT]' $GetSelected>$GetDataJBT[Jabatan]</option>
												";
                                 }
                              ?>
                           </select>
                           <label>Jabatan Pegawai</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">supervisor_account</i>
                           <select name="Status">
                              <option value="" disabled selected>- Pilih Status -</option>
                              <option value="Belum Menikah" <?php if ($GetData['Status'] == 'Belum Menikah') {echo "selected";} ?>>Belum Menikah</option>
                              <option value="Kawin" <?php if ($GetData['Status'] == 'Kawin') {echo "selected";} ?>>Kawin</option>
                              <option value="Cerai Hidup" <?php if ($GetData['Status'] == 'Cerai Hidup') {echo "selected";} ?>>Cerai Hidup</option>
                              <option value="Cerai Mati" <?php if ($GetData['Status'] == 'Cerai Mati') {echo "selected";} ?>>Cerai Mati</option>
                           </select>
                           <label>Status Hubungan</label>
                        </div>
                        <div class="input-field col s12 mt-4">
                           <i class="material-icons prefix">phone_in_talk</i>
                           <input type="text" class="validate" name="NomorHP" placeholder="Masukan nomor handphone valid" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="13" value="<?php echo $GetData['NomorHP'] ?>">
                           <label>Nomor Handphone</label>
                        </div>
                        <div class="input-field col s12 mt-4">
                           <i class="material-icons prefix">edit_location</i>
                           <textarea class="materialize-textarea" name="Alamat" placeholder="Example : Jl. Remartadinata, Gg. Remaja No.50, Kec.Bondowoso, Bondowoso Kota" style="text-transform: capitalize;"><?php echo $GetData['Alamat'] ?></textarea>
                           <label>Alamat Tempat Tinggal</label>
                        </div>
                        <div class="input-field col s12 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right" name="update-data-pegawai">
                              <i class="material-icons right">cloud_upload</i>
                              Update
                           </button>
                           <a href="data-pegawai" class="btn grey darken-2 waves-effect waves-light right mr-2">
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