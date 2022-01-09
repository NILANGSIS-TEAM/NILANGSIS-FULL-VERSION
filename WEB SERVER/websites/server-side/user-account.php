<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php
   $KodeUSR = $_SESSION['KodeUSR'];
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Data Login User</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="user-acccount">User Account</a>
                     </li>
                     <li class="breadcrumb-item active">Data Login User
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
                                       <div class="col m3">
                                          <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="../../assets/images/pegawai/<?php echo $GetData['FotoPegawai'] ?>" width="100%">
                                       </div>
                                       <div class="col m9">
                                          <h4 class="mt-8">
                                             <span><?php echo $GetData['NamaGR'] ?></span>
                                          </h4>
                                       </div>
                                       <div class="col m12 mt-3">
                                          <div class="row">
                                             <div class="col m6">
                                                <h6>
                                                   <strong style="font-weight: 900;">Nama User*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <strong style="font-weight: 900;">Level User*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NamaGR'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['LevelUSR'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Username*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Password*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['Username'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span class="red-text text-darken-2">(Password terenkripsi secara otomatis)</span>
                                                </h6>
                                             </div>
                                             <div class="col m12 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Note*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m12">
                                                <h6>
                                                   <i>Jika Anda lupa password, silahkan kunjungi menu atau halaman data tim monitoring, kemudian lakukan reset password pada akun Anda maupun user terkait. Jika Anda ingin mereset password dan merubah, klik di <a href="reset-password?KodeUSR=<?php echo $KodeUSR ?>">sini</a> Terimakasih</i>
                                                </h6>
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