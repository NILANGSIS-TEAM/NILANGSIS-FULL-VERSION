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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Report Detail Pelanggaran Siswa</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="report-detail-pelanggaran-siswa">Detail Pelanggaran</a>
                     </li>
                     <li class="breadcrumb-item active">Report Detail Pelanggaran Siswa
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12">
         <div class="container animated fadeIn">
            <div class="section">
               <div class="card">
                  <div class="card-content">
                     <div class="row">
                        <div class="col m12 mt-1">
                           <form method="GET" autocomplete="OFF">
                              <div class="row">
                                 <div class="input-field col xl5 l5 m12 s12">
                                    <i class="material-icons prefix">filter_7</i>
                                    <select name="Kelas" required>
                                       <option value="" disabled selected>- Pilih Kelas -</option>
                                       <option value="VII">VII</option>
                                       <option value="VIII">VIII</option>
                                       <option value="IX">IX</option>
                                    </select>
                                    <label>Kelas</label>
                                 </div>
                                 <div class="input-field col xl5 l5 m12 s12">
                                    <i class="material-icons prefix">format_shapes</i>
                                    <select name="KodeIK" required>
                                       <option value="" disabled selected>- Pilih Identitas Kelas -</option>
                                       <?php
                                          require '../../configs/connection.php';
                                          
                                          $GetTableIK = mysqli_query($CONN, "SELECT * FROM identitas_kelas");
                                          while ($GetDataIK = mysqli_fetch_array($GetTableIK)) {
                                             echo "
                                                <option value='$GetDataIK[KodeIK]'>$GetDataIK[IdentitasKelas]</option>
                                             ";
                                          }
                                       ?>
                                    </select>
                                    <label>Identitas Kelas</label>
                                 </div>
                                 <div class="col xl2 l2 m12 s12 mt-1">
                                    <button type="submit" class="btn red darken-1 waves-effect wafes-light mt-6">
                                       GET
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col m12 mt-2">
                           <table class="striped" id="tbl_exporttable_to_xls">
                              <thead>
                                 <tr class="grey lighten-4">
                                    <th colspan="8">
                                       <h5 class="center">EVALUASI KEDISIPLINAN PRILAKU SISWA</h5>
                                    </th>
                                 </tr>
                                 <tr>
                                    <th class="center">#No</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Total Pelanggaran</th>
                                    <th class="center">Opsi*</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php require 'process/select-data.php'; ReportDetailDataPelanggaran(); ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th class="center">#No</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Total Pelanggaran</th>
                                    <th class="center">Opsi*</th>
                                 </tr>
                              </tfoot>
                           </table>
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