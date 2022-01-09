<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php
   // Process select detail data from table histori_pelanggaran
   $KodeHIS = $_GET['KodeHIS'];
   $GetTableHIS = mysqli_query($CONN, "
      SELECT
         histori_pelanggaran.*,
         pegawai.NamaGR,
         siswa.*,
         identitas_kelas.IdentitasKelas,
         tipe_pelanggaran.*,
         level_pelanggaran.*
      FROM
         histori_pelanggaran
         INNER JOIN pegawai ON histori_pelanggaran.NIP = pegawai.NIP
         INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS
         INNER JOIN identitas_kelas ON siswa.KodeIK = identitas_kelas.KodeIK
         INNER JOIN tipe_pelanggaran ON histori_pelanggaran.KodeTP = tipe_pelanggaran.KodeTP
         INNER JOIN level_pelanggaran ON tipe_pelanggaran.KodeLP = level_pelanggaran.KodeLP
      WHERE
         KodeHIS = '$KodeHIS'
   ");
   $GetData = mysqli_fetch_array($GetTableHIS);
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Detail Pelanggaran Siswa</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="data-siswa">Data Siswa</a>
                     </li>
                     <li class="breadcrumb-item active">Detail Pelanggaran Siswa
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
                                       <div class="col m10">
                                          <h4 class="mt-2">
                                             <span><?php echo $GetData['NamaSW'] ?></span>
                                          </h4>
                                       </div>
                                       <div class="col m12 mt-2">
                                          <div class="row">
                                             <div class="col m6">
                                                <h6>
                                                   <strong style="font-weight: 900;">Pelapor Pelanggaran*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <strong style="font-weight: 900;">Siswa Pelanggar*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NamaGR'] ?></span>
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
                                                   <strong style="font-weight: 900;">Kelas*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['JenisKelamin'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo "$GetData[Kelas] $GetData[IdentitasKelas]" ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Pelanggaran yang Dilakukan*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Status Pelanggaran*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['TipePelanggaran'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <span class="chip" style="background-color: <?php echo $GetData['ColorLevel'] ?>">
                                                   <span style="font-size: 14px; color: <?php echo $GetData['TextLevel'] ?>;">
                                                      <?php echo $GetData['LevelPelanggaran'] ?>
                                                   </span>
                                                </span>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Tanggal Kejadian*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Pukul*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['TanggalKejadian'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['Pukul'] ?> WIB</span>
                                                </h6>
                                             </div>
                                             <div class="col m12 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Bukti Pelanggaran*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m12">
                                                <img class="responsive-img border-radius-4 z-depth-2 mt-1" src="../../assets/images/bukti-pelanggaran/<?php echo $GetData['BuktiPelanggaran'] ?>" width="50%">
                                             </div>
                                             <div class="col m12 mt-3 mb-1">
                                                <a href="data-histori-pelanggaran-siswa" class="btn waves-effect wafes-light grey darken-2">
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