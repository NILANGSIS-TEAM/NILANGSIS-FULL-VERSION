<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<?php include 'process/update-data.php'; ?>
<?php
   $KodeIK = $_GET['KodeIK'];
   $GetTableIK = mysqli_query($CONN, "SELECT *
      FROM
         identitas_kelas
      WHERE
         KodeIK = '$KodeIK'
   ");
   $GetData = mysqli_fetch_array($GetTableIK);
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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Form Edit Identitas Kelas</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="data-identitas-kelas">Identitas Kelas</a>
                     </li>
                     <li class="breadcrumb-item active">Form Edit Identitas Kelas
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
                  <h4 class="card-title">Edit Data Identitas Kelas <?php echo $GetData['IdentitasKelas'] ?></h4>
                  <form method="POST" autocomplete="OFF">
                     <div class="row">
                        <input name="KodeIK" type="hidden" class="validate" value="<?php echo $GetData['KodeIK'] ?>" readonly>
                        <input name="DontChange" type="hidden" class="validate" value="<?php echo $GetData['IdentitasKelas'] ?>" readonly>
                        <div class="input-field col s12 mt-3 mb-2">
                           <i class="material-icons prefix">format_shapes</i>
                           <input type="text" class="validate" name="IdentitasKelas" placeholder="Example : A" maxlength="1" oninput="this.value = this.value.replace(/[^a-zA-Z]/, '')" style="text-transform: capitalize;" value="<?php echo $GetData['IdentitasKelas'] ?>">
                           <label>Identitas Kelas</label>
                        </div>
                        <div class="input-field col s12 mt-1 mb-2">
                           <button type="submit" class="btn gradient-45deg-red-pink waves-effect waves-light right" name="update-data-IK">
                              <i class="material-icons right">cloud_upload</i>
                              Update
                           </button>
                           <a href="data-identitas-kelas" class="btn grey darken-2 waves-effect waves-light right mr-2">
                              <i class="material-icons right">cancel</i>
                              Batal
                           </a>
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