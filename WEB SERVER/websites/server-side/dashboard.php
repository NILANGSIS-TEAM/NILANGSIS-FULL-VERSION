<?php include 'components/starting-page.php'; require 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php require 'process/visualisasi-data.php'; ?>
<div id="main">
   <div class="row">
      <div class="content-wrapper-before gradient-45deg-red-pink"></div>
      <div class="col xl12 l12 m12 s12">
         <div class="container">
            <div class="section" id="materialize-sparkline">
               <div class="row">
                  <div class="col xl12 l12 m12 s12 animate fadeRight">
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title mb-0">
                              Visualiasi Master Data Sistem Informasi Nilangsis
                              <i class="material-icons float-right grey-text text-darken-1">people_outline</i>
                           </h4>
                           <p class="medium-small mb-1">Total master data Nilangsis SMP Negeri 1 Pujer</p>
                           <div class="row">
                              <div class="col xl6 l6 m6 s12">
                                 <div class="card padding-4 animated fadeIn">
                                    <div class="row">
                                       <div class="col s5 m5">
                                          <h5 class="mb-0"><?php CountDataPegawai(); ?></h5>
                                          <p class="no-margin">Pegawai</p>
                                          <p class="mb-0 pt-8">Total : <?php CountDataPegawai(); ?> Pegawai</p>
                                       </div>
                                       <div class="col s7 m7 right-align">
                                          <i class="material-icons background-round mt-5 mb-5 gradient-45deg-indigo-light-blue gradient-shadow white-text">supervisor_account</i>
                                          <p class="mb-0">
                                             <a href="data-pegawai" style="color: #777777;">Lihat data</a>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl6 l6 m6 s12">
                                 <div class="card padding-4 animated fadeIn">
                                    <div class="row">
                                       <div class="col s5 m5">
                                          <h5 class="mb-0"><?php CountDataSiswa(); ?></h5>
                                          <p class="no-margin">Siswa</p>
                                          <p class="mb-0 pt-8">Total : <?php CountDataSiswa(); ?> Siswa</p>
                                       </div>
                                       <div class="col s7 m7 right-align">
                                          <i class="material-icons background-round mt-5 mb-5 gradient-45deg-green-teal gradient-shadow white-text">supervisor_account</i>
                                          <p class="mb-0">
                                             <a href="data-siswa" style="color: #777777;">Lihat data</a>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl6 l6 m6 s12">
                                 <div class="card padding-4 animated fadeIn">
                                    <div class="row">
                                       <div class="col s5 m5">
                                          <h5 class="mb-0"><?php CountDataTimMonitoring(); ?></h5>
                                          <p class="no-margin">Tim Monitoring</p>
                                          <p class="mb-0 pt-8">Total : <?php CountDataTimMonitoring(); ?> Orang</p>
                                       </div>
                                       <div class="col s7 m7 right-align">
                                          <i class="material-icons background-round mt-5 mb-5 gradient-45deg-amber-amber gradient-shadow white-text">verified_user</i>
                                          <p class="mb-0">
                                             <a href="data-tim-monitoring" style="color: #777777;">Lihat data</a>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl6 l6 m6 s12">
                                 <div class="card padding-4 animated fadeIn">
                                    <div class="row">
                                       <div class="col s5 m5">
                                          <h5 class="mb-0"><?php CountDataPelanggaranSiswa(); ?></h5>
                                          <p class="no-margin">Pelanggaran</p>
                                          <p class="mb-0 pt-8">Total : <?php CountDataPelanggaranSiswa(); ?> Pelanggaran</p>
                                       </div>
                                       <div class="col s7 m7 right-align">
                                          <i class="material-icons background-round mt-5 mb-5 gradient-45deg-red-pink gradient-shadow white-text">new_releases</i>
                                          <p class="mb-0">
                                             <a href="data-histori-pelanggaran-siswa" style="color: #777777;">Lihat data</a>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col xl12 l12 m12 s12 animate fadeLeft">
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title mb-0">Visualiasi Data Monitoring Pelanggaran Siswa
                              <i class="material-icons float-right grey-text text-darken-1">info_outline</i>
                           </h4>
                           <p class="medium-small mb-1">Grafik monitoring pelanggaran berdasarkan tingkat kelas</p>
                           <div class="row">
                              <div class="col xl4 l4 m4 s12 animated fadeIn">
                                 <div class="ct-chart card z-depth-2 border-radius-6">
                                    <div class="card-content">
                                       <div class="row">
                                          <div class="col s12">
                                             <h4 class="card-title">Pelanggaran Kelas VII</h4>
                                          </div>
                                          <div class="col s12 display-flex blue-text accent-2">
                                             <div id="sales-bar-2"></div>
                                             <p class="mt-4">
                                                <i class="material-icons dp48 vertical-align-bottom">supervisor_account</i>
                                                <?php CountPelanggaranKelasVII(); ?> Siswa
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl4 l4 m4 s12 animated fadeIn">
                                 <div class="ct-chart card z-depth-2 border-radius-6">
                                    <div class="card-content">
                                       <div class="row">
                                          <div class="col s12">
                                             <h4 class="card-title truncate">Pelanggaran Kelas VIII</h4>
                                          </div>
                                          <div class="col s12 display-flex">
                                             <div id="sales-bar-3"></div>
                                             <p class="mt-4 light-green-text">
                                                <i class="material-icons dp48 vertical-align-bottom">supervisor_account</i>
                                                <?php CountPelanggaranKelasVIII(); ?> Siswa
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl4 l4 m4 s12 animated fadeIn">
                                 <div class="ct-chart card z-depth-2 border-radius-6">
                                    <div class="card-content">
                                       <div class="row">
                                          <div class="col s12">
                                             <h4 class="card-title">Pelanggaran Kelas IX</h4>
                                          </div>
                                          <div class="col s12 display-flex amber-text">
                                             <div id="sales-bar-4"></div>
                                             <p class="mt-4">
                                                <i class="material-icons dp48 vertical-align-bottom">supervisor_account</i>
                                                <?php CountPelanggaranKelasIX(); ?> Siswa
                                             </p>
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
               <div class="row">
                  <div class="col xl12 l12 m12 s12 animate fadeRight">
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title mb-0">
                              Top 3 Siswa Pelanggar Tertinggi di Sekolah
                              <i class="material-icons float-right grey-text text-darken-1">important_devices</i>
                           </h4>
                           <p class="medium-small mb-1">Siswa dengan jumlah pelanggaran tertinggi di sekolah</p>
                           <div class="row animated fadeIn">
                              <?php CountTopPelanggaranSekolah(); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col xl12 l12 m12 s12 animate fadeLeft">
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title mb-0">
                              Top 3 Siswa Pelanggar Tertinggi di Tingkat Kelas
                              <i class="material-icons float-right grey-text text-darken-1">important_devices</i>
                           </h4>
                           <p class="medium-small mb-1">Siswa dengan pelanggaran tertinggi dalam tingkat kelas</p>
                           <div class="row">
                              <div class="col s12 m12 animated fadeIn">
                                 <div class="card recent-buyers-card">
                                    <div class="card-content">
                                       <h4 class="card-title mb-0">Siswa Tingkat Kelas VII</h4>
                                       <ul class="collection mb-0">
                                          <?php CountTopPelanggaranKelasVII(); ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col s12 m6 animated fadeIn">
                                 <div class="card recent-buyers-card">
                                    <div class="card-content">
                                       <h4 class="card-title mb-0">Siswa Tingkat Kelas VIII</h4>
                                       <ul class="collection mb-0">
                                          <?php CountTopPelanggaranKelasVIII(); ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col s12 m6 animated fadeIn">
                                 <div class="card recent-buyers-card">
                                    <div class="card-content">
                                       <h4 class="card-title mb-0">Siswa Tingkat Kelas IX</h4>
                                       <ul class="collection mb-0">
                                          <?php CountTopPelanggaranKelasIX(); ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col xl6 l6 m6 s12 animate fadeLeft">
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title mb-0">
                              Top 5 Pelanggaran Tata Tertib Siswa di Sekolah
                              <i class="material-icons float-right grey-text text-darken-1">event_busy</i>
                           </h4>
                           <p class="medium-small mb-1">Pelanggaran tata tertib sekolah yang sering dilakukan siswa</p>
                           <div class="row">
                              <div class="col s12 m12 animated fadeIn">
                                 <div class="card recent-buyers-card">
                                    <div class="card-content">
                                       <h4 class="card-title mb-0">Pelanggaran Terfavorit</h4>
                                       <ul class="collection mb-0">
                                          <?php CountTopPelanggaranTerfavorit(); ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col xl6 l6 m6 s12 animate fadeLeft">
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title mb-0">
                              Top 5 Petugas Monitoring Teraktif di Sekolah
                              <i class="material-icons float-right grey-text text-darken-1">person_outline</i>
                           </h4>
                           <p class="medium-small mb-1">Petugas monitoring dengan jumlah laporan tertinggi</p>
                           <div class="row">
                              <div class="col s12 m12 animated fadeIn">
                                 <div class="card recent-buyers-card">
                                    <div class="card-content">
                                       <h4 class="card-title mb-0"> Petugas Monitoring Teraktif</h4>
                                       <ul class="collection mb-0">
                                          <?php CountPetugasMonitoringTeraktif(); ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php include 'components/intro-page.php'; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   require '../../configs/connection.php';
   $NIP = $_SESSION['NIP'];
   $GetTable = mysqli_query($CONN, "SELECT * FROM pegawai WHERE NIP = '$NIP'");
   $GetData = mysqli_fetch_array($GetTable);
   echo "
      <script>
         setTimeout(function() {
            M.toast({
               html: 'Hello, $GetData[NamaGR]'
            })
         }, 2800)
      </script>
   ";
?>
<?php include 'components/footer.php'; ?>
<?php include 'components/closing-page.php'; ?>