<?php include 'components/starting-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
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
                                          <h5 class="mb-0">0</h5>
                                          <p class="no-margin">Pegawai</p>
                                          <p class="mb-0 pt-8">Total : 0 Pegawai</p>
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
                                          <h5 class="mb-0">0</h5>
                                          <p class="no-margin">Siswa</p>
                                          <p class="mb-0 pt-8">Total : 0 Siswa</p>
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
                                          <h5 class="mb-0">0</h5>
                                          <p class="no-margin">Tim Monitoring</p>
                                          <p class="mb-0 pt-8">Total : 0 Orang</p>
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
                                          <h5 class="mb-0">0</h5>
                                          <p class="no-margin">Pelanggaran</p>
                                          <p class="mb-0 pt-8">Total : 0 Pelanggaran</p>
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
               <?php include 'components/intro-page.php'; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'components/footer.php'; ?>
<?php include 'components/closing-page.php'; ?>