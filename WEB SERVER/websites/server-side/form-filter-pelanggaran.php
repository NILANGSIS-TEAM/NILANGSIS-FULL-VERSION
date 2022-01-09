<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php require 'process/autogenerate-code.php'; ?>
<!-- BEGIN: Page Main-->
<div id="main">
   <div class="row">
      <div class="content-wrapper-before gradient-45deg-red-pink"></div>
      <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
         <!-- Search for small screen-->
         <div class="container animated fadeIn">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Form Filter Pelanggaran</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="form-filter-pelanggaran">Input Pelanggaran Siswa</a>
                     </li>
                     <li class="breadcrumb-item active">Form Filter Pelanggaran
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
                  <h4 class="card-title">Filter Data Siswa</h4>
                  <form action="form-input-pelanggaran-siswa" method="GET">
                     <div class="row">
                        <div class="input-field col xl6 l6 m12 s12 mt-3">
                           <i class="material-icons prefix">filter_7</i>
                           <select name="Kelas" required>
                              <option value="">- Pilih Kelas -</option>
                              <option value="VII">VII</option>
                              <option value="VIII">VIII</option>
                              <option value="IX">IX</option>
                           </select>
                           <label>Kelas</label>
                        </div>
                        <div class="input-field col xl6 l6 m12 s12 mt-3">
                           <i class="material-icons prefix">format_shapes</i>
                           <select name="KodeIK" required>
                              <option value="">- Pilih Identitas Kelas -</option>
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
                        <div class="input-field col s12 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right">
                              <i class="material-icons right">autorenew</i>
                              Filter
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
<!-- BEGIN: Footer-->
<footer class="page-footer footer footer-fixed footer-dark gradient-45deg-red-pink gradient-shadow navbar-border navbar-shadow">
   <div class="footer-copyright">
      <div class="container">
         <span>
            Copyright &copy; 2021 <a href="dashboard"> TIF B Bondowoso </a> - <a href="dashboard">
               NILANGSIS </a> IT-Team.
         </span>
         <span class="right hide-on-small-only">
            Supported by <a href="https://polije.ac.id/" target="_blank">Politeknik Negeri Jember</a>
         </span>
      </div>
   </div>
</footer>
<!-- END: Footer-->
<?php include 'components/closing-page.php'; ?>