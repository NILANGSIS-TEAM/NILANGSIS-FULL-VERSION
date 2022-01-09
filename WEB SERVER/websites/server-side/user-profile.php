<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php
   // Process select detail data from table pegawai
   $NIP = $_SESSION['NIP'];
   $GetTablePegawai = mysqli_query($CONN, "SELECT pegawai.*, jabatan.Jabatan
      FROM
         pegawai
      INNER JOIN
         jabatan
      ON
         pegawai.KodeJBT = jabatan.KodeJBT
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Data Diri User</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="user-profile">User Profile</a>
                     </li>
                     <li class="breadcrumb-item active">Data Diri User
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
                                                   <strong style="font-weight: 900;">Nomor Induk Pegawai (NIP)*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <strong style="font-weight: 900;">Nama Lengkap*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NIP'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NamaGR'] ?></span>
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
                                                   <strong style="font-weight: 900;">Jabatan Pegawai*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['TanggalLahir'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['Jabatan'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Status Hubungan*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6 mt-2">
                                                <h6>
                                                   <strong style="font-weight: 900;">Nomor Handphone*</strong>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['Status'] ?></span>
                                                </h6>
                                             </div>
                                             <div class="col m6">
                                                <h6>
                                                   <span><?php echo $GetData['NomorHP'] ?></span>
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
                                             <div class="col m12">
                                                <a href="form-edit-profile?NIP=<?php echo $NIP ?>" class="btn blue waves-effect waves-light right mt-3 mb-1">Edit Profile</a>
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