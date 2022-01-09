<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<!-- BEGIN: Page Main-->
<div id="main">
   <div class="row">
      <div class="content-wrapper-before gradient-45deg-red-pink"></div>
      <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
         <!-- Search for small screen-->
         <div class="container animated fadeIn">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Data Identitas Kelas</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="data-jabatan-pegawai">Identitas Kelas</a>
                     </li>
                     <li class="breadcrumb-item active">Data Identitas Kelas
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12">
         <div class="container">
            <div class="section section-data-tables">
               <div class="row">
                  <div class="col s12 animated fadeIn">
                     <div class="card">
                        <div class="card-content">
                           <div class="row">
                              <div class="col s12">
                                 <table id="page-length-option" class="highlight">
                                    <thead>
                                       <tr>
                                          <th>#No</th>
                                          <th>Kode Identitas Kelas</th>
                                          <th>Identitas Kelas</th>
                                          <th>OPSI</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php require 'process/select-data.php'; SelectDataIK(); ?>
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                          <th>#No</th>
                                          <th>Kode Identitas Kelas</th>
                                          <th>Identitas Kelas</th>
                                          <th>OPSI</th>
                                       </tr>
                                    </tfoot>
                                 </table>
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
      <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-bottom animated tada">
         <a class="btn-floating btn-large gradient-45deg-red-pink gradient-shadowtooltipped tooltipped" data-position="left" data-tooltip="Tambah data identitas kelas" href="form-input-identitas-kelas">
            <i class="material-icons">add</i>
         </a>
      </div>
   </div>
</div>
<!-- END: Page Main-->
<?php include 'components/footer.php'; ?>
<?php include 'components/closing-page.php'; ?>