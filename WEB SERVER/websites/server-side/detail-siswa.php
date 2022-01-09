<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php
   // Process select detail data from table siswa
   $NIS = $_GET['NIS'];
   $GetTableSiswa = mysqli_query($CONN, "SELECT siswa.*, identitas_kelas.IdentitasKelas
      FROM
         siswa
      INNER JOIN
         identitas_kelas
      ON
         siswa.KodeIK = identitas_kelas.KodeIK
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Detail Siswa</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="data-siswa">Data Siswa</a>
                     </li>
                     <li class="breadcrumb-item active">Detail Siswa
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12">
         <div class="container">
            <div class="section">
               <div class="row">
                  <div class="col s12 m12 animated fadeIn">
                     <!-- Total Transaction -->
                           <div class="row">
                              <div class="col s12 m12 mt-1">
                                 <div class="card-panel border-radius-6 mt-3">
                                    <div class="row">
                                       <div class="col m2">
                                          <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="../../assets/images/siswa/<?php echo $GetData['FotoSiswa'] ?>" width="100%">
                                       </div>
                                       <div class="col m8">
                                          <h4 class="mt-2">
                                             <span><?php echo $GetData['NamaSW'] ?></span>
                                          </h4>
                                       </div>
                                       <div class="col m2">
                                          <a href="form-edit-siswa?NIS=<?php echo $NIS ?>" class="btn blue waves-effect waves-light right mt-10">Edit Data</a>
                                       </div>
                                       <div class="col m12 mt-2">
                                          <div class="row">
                                             <div class="col m6">
                                                <h6>
                                                   <strong style="font-weight: 900;">Nomor Induk Siswa (NIS)*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <strong style="font-weight: 900;">Nama Lengkap*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NIS'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NamaSW'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Jenis Kelamin*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Tempat Lahir*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['JenisKelamin'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['TempatLahir'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Tanggal Lahir*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Kelas*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['TanggalLahir'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo "$GetData[Kelas] $GetData[IdentitasKelas]" ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Nomor Handphone Siswa*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Nomor Handphone Orangtua/Wali*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NomorHPSiswa'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NomorHPWali'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m12 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Alamat Tempat Tinggal*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m12">
                                                <h6>
                                                   <span><?php echo $GetData['Alamat'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m12 mt-3 mb-1">
                                                <a href="data-siswa" class="btn waves-effect wafes-light grey darken-2">
                                                   Kembali
                                                </a>
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
         <div class="content-overlay"></div>
      </div>
   </div>
</div>
<!-- END: Page Main-->
<?php include 'components/footer.php'; ?>
<?php include 'components/closing-page.php'; ?>