<?php include 'process/session-page.php'; ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <title>Report Data Pelanggaran Siswa</title>
   <link rel="apple-touch-icon" href="../../assets/images/favicon/apple-touch-icon-152x152.png">
   <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/logo/title-logo.png">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/vendors.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/vendors/data-tables/css/select.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/pages/data-tables.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/themes/vertical-modern-menu-template/materialize.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/themes/vertical-modern-menu-template/style.min.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/custom/custom.css">
   <link rel="stylesheet" type="text/css" href="../../assets/css/custom/nilangsis-style.css">
</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
   <div style="padding: 18px;" class="red">
      <h5 class="center white-text" style="font-weight: bolder;">DATA PELANGGARAN SISWA SMP NEGERI 1 PUJER</h5>
   </div>
   <table class="striped" id="tbl_exporttable_to_xls">
      <thead>
         <tr>
            <th>No</th>
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
   </table>
<!-- END: Page Main-->
<script>
   window.print();
</script>
<?php include 'components/closing-page.php'; ?>