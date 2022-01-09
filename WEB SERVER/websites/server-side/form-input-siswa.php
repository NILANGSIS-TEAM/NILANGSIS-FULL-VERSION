<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Form Input Siswa</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="form-input-siswa">Input Siswa</a>
                     </li>
                     <li class="breadcrumb-item active">Form Input Siswa
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
                  <h4 class="card-title">Tambah Data Siswa</h4>
                  <form method="POST" enctype="multipart/form-data" autocomplete="OFF">
                     <div class="row">
                        <div class="file-field input-field col s12 mt-1 mb-2">
                           <i class="material-icons prefix">assignment_ind</i>
                           <label>Foto Siswa (Frame 3x3 , Ukuran maksimal 600KB)*</label>
                        </div>
                        <div class="file-field input-field col s12">
                           <div id="file-upload" class="section">
                              <div class="row section">
                                 <div class="col s12 m12">
                                    <input type="file" id="input-file-now" class="dropify" data-default-file="" name="FotoSiswa">
                                 </div>
                              </div>
                           </div>
                           <div class="content-overlay"></div>
                        </div>
                        <div class="input-field col s12 mt-4">
                           <i class="material-icons prefix">verified_user</i>
                           <input type="text" class="validate" name="NIS" placeholder="Example : 0009822545" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="10">
                           <label>Nomor Induk Siswa (NIS)</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">person</i>
                           <input type="text" class="validate" name="NamaSW" placeholder="Masukan nama lengkap" oninput="this.value=this.value.replace(/[^a-zA-Z ]/, '')" maxlength="30" style="text-transform: capitalize;">
                           <label>Nama Siswa</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">mood</i>
                           <select name="JenisKelamin">
                              <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                           </select>
                           <label>Jenis Kelamin</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">location_city</i>
                           <input type="text" class="validate" name="TempatLahir" placeholder="Masukan tempat lahir" oninput="this.value=this.value.replace(/[^a-zA-Z,. ]/, '')" maxlength="20" style="text-transform: capitalize;">
                           <label>Tempat Lahir</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">today</i>
                           <input type="date" class="validate" name="TanggalLahir">
                           <label>Tanggal Lahir</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">filter_7</i>
                           <select name="Kelas">
                              <option value="" disabled selected>- Pilih Kelas -</option>
                              <option value="VII">VII</option>
                              <option value="VIII">VIII</option>
                              <option value="IX">IX</option>
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
                                 while ($GetData = mysqli_fetch_array($GetTableIK)) {
                                    echo "
                                       <option value='$GetData[KodeIK]'>$GetData[IdentitasKelas]</option>
                                    ";
                                 }
                              ?>
                           </select>
                           <label>Identitas Kelas</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">phone_in_talk</i>
                           <input type="text" class="validate" name="NomorHPSiswa" placeholder="Masukan nomor handphone siswa" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="13">
                           <label>Nomor Handphone Siswa</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-4">
                           <i class="material-icons prefix">phone_in_talk</i>
                           <input type="text" class="validate" name="NomorHPWali" placeholder="Masukan nomor handphone orang tua/wali" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="13">
                           <label>Nomor Handphone Orang Tua/Wali</label>
                        </div>
                        <div class="input-field col s12 mt-4">
                           <i class="material-icons prefix">edit_location</i>
                           <textarea class="materialize-textarea" name="Alamat" placeholder="Example : Jl. Remartadinata, Gg. Remaja No.50, Kec.Bondowoso, Bondowoso Kota" style="text-transform: capitalize;"></textarea>
                           <label>Alamat Tempat Tinggal</label>
                        </div>
                        <div class="input-field col s12 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right" name="insert-into-siswa">
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