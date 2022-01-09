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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Report Data Pelanggaran Siswa</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item"><a href="report-histori-pelanggaran-siswa">Histori Pelanggaran</a>
                     </li>
                     <li class="breadcrumb-item active">Report Data Pelanggaran Siswa
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col xl12 l12 m12 s12">
         <div class="container animated fadeIn">
            <div class="section">
               <div class="card">
                  <div class="card-content">
                     <div class="row">
                        <div class="col xl8 l8 m12 s12 mt-1">
                           <form method="GET" autocomplete="OFF">
                              <div class="row">
                                 <div class="col xl5 l5 m12 s12">
                                    <div class="input-field mt-4">
                                       <i class="material-icons prefix">today</i>
                                       <input type="date" class="validate" name="Start" required>
                                       <label>Start From*</label>
                                    </div>
                                 </div>
                                 <div class="col xl5 l5 m12 s12">
                                    <div class="input-field mt-4">
                                       <i class="material-icons prefix">today</i>
                                       <input type="date" class="validate" name="Finish" required>
                                       <label>Finish*</label>
                                    </div>
                                 </div>
                                 <div class="col xl2 l2 m6 s6 mt-1">
                                    <button type="submit" class="btn red darken-1 waves-effect wafes-light mt-7">
                                       GET
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col xl4 l4 m12 s12 mt-1">
                           <?php 
                              $DateStart = $_GET['Start'];
                              $DateFinish = $_GET['Finish'];
                              $ConversionDateStart = date("d-m-Y", strtotime($DateStart));
                              $ConversionDateFinish = date("d-m-Y", strtotime($DateFinish));
                           ?>
                           <a href="print-report-his?Start=<?php echo $ConversionDateStart ?>&Finish=<?php echo $ConversionDateFinish ?>" class="btn blue darken-1 waves-effect wafes-light mt-4 pl-8 pr-8 right" target="_blank">
                           <i class="material-icons left">picture_as_pdf</i>PDF</a>
                           <button class="btn green darken-1 waves-effect wafes-light mt-4 mr-4 pl-8 pr-8 right" onclick="ExportToExcel('xlsx')">
                              <i class="material-icons left">cloud_download</i>Excel
                           </button>
                        </div>
                        <div class="col xl12 l12 m12 s12 mt-2">
                           <table class="striped" id="tbl_exporttable_to_xls">
                              <thead>
                                 <tr class="grey lighten-4">
                                    <th colspan="8">
                                       <h5 class="center">DATA PELANGGARAN SISWA SMP NEGERI 1 PUJER</h5>
                                    </th>
                                 </tr>
                                 <tr>
                                    <th>#No</th>
                                    <th>Pelapor</th>
                                    <th>Siswa Pelanggar</th>
                                    <th>Pelanggaran</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php require 'process/select-data.php'; ReportDataPelanggaran(); ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th>#No</th>
                                    <th>Pelapor</th>
                                    <th>Siswa Pelanggar</th>
                                    <th>Pelanggaran</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
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
<script src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
   function ExportToExcel(type, fn, dl) {
      var elt = document.getElementById('tbl_exporttable_to_xls');
      var wb = XLSX.utils.table_to_book(elt, {
         sheet: "sheet1",
         dateNF: 'dd-mm-yyyy'
      });
      return dl ?
      XLSX.write(wb, {
         bookType: type,
         bookSST: true,
         type: 'base64'
      }) :
      XLSX.writeFile(wb, fn || ('Report Data Pelanggaran Siswa.' + (type || 'xlsx')));
   }
</script>
<?php include 'components/closing-page.php'; ?>