<?php
   $NomorSurat = strtoupper($_POST['NomorSurat']);
   $Lampiran = ucwords($_POST['Lampiran']);
   $Perihal = ucwords($_POST['Perihal']);
   $Tanggal = $_POST['Tanggal'];
   $KonversiTanggal = date("d F Y", strtotime($Tanggal));
   $NamaSiswa = ucwords($_POST['NamaSiswa']);
   $TanggalPertemuan = $_POST['TanggalPertemuan'];
   $DateTranslate = date("l", strtotime($TanggalPertemuan));
   switch ($DateTranslate) {
      case 'Monday':
         $OutputDate = "Senin, " . date("d F Y", strtotime($TanggalPertemuan));
         break;
      case 'Tuesday':
         $OutputDate = "Selasa, " . date("d F Y", strtotime($TanggalPertemuan));
         break;
      case 'Wednesday':
         $OutputDate = "Rabu, " . date("d F Y", strtotime($TanggalPertemuan));
         break;
      case 'Thursday':
         $OutputDate = "Kamis, " . date("d F Y", strtotime($TanggalPertemuan));
         break;
      case 'Friday':
         $OutputDate = "Jum'at, " . date("d F Y", strtotime($TanggalPertemuan));
         break;
      case 'Saturday':
         $OutputDate = "Sabtu, " . date("d F Y", strtotime($TanggalPertemuan));
         break;
      case 'Sunday':
         $OutputDate = "Minggu, " . date("d F Y", strtotime($TanggalPertemuan));
         break;
      default:
         # code...
         break;
   }
   $PukulPertemuan = $_POST['PukulPertemuan'];
   $TempatPertemuan = ucwords($_POST['TempatPertemuan']);
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   <title>Surat Panggilan Orangtua dari <?php echo $NamaSiswa ?></title>
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

   <div class="card mt-0">
      <div class="card-content">
         <div class="container">
            <div class="row">
               <div class="col xl12 l12 m12 s12 center">
                  <div class="row">
                     <div class="col xl3 l3 m3 s3">
                        <img src="../../assets/images/logo/spadjer-logo.png" width="100%">
                     </div>
                     <div class="col xl9 l9 m9 s9">
                        <h5 style="font-size: 17px;">PEMERINTAH DAERAH KABUPATEN BONDOWOSO</h5>
                        <h5 style="font-size: 17px;">DINAS PENDIDIKAN BONDOWOSO</h5>
                        <h5 style="font-size: 17px;">SMP NEGERI 1 PUJER</h5>
                        <p style="font-size: 12px;">Jl.Mangli 70, Pujer, Kec. Pujer, Kab. Bondowoso, Jawa Timur 68271</p>
                        <p style="font-size: 12px;">NPSN: 20521806 NSS : 201052213501</p>
                        <p style="font-size: 12px;">Email: <a href="https://mail.google.com/" target="_blank">smpn1pujerbondowoso@gmail.com</a> Telp: 0332 7703174</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-1 mb-1">
            <div class="row">
               <div class="col xl12 l12 m12 s12 center">
                  <hr color="#777777">
               </div>
            </div>
         </div>
         <div class="container mt-1 mb-1">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <div class="row">
                     <div class="col xl7 l7 m7 s7">
                        <style>table.subtitle-table, tr, td{border: none; padding: 0;}</style>
                        <table class="subtitle-table">
                           <tr>
                              <td><strong>Nomor Surat</strong>&nbsp;</td>
                              <td><strong>:</strong></td>
                              <td>
                                 &nbsp;&nbsp;<strong><?php echo $NomorSurat ?></strong>
                              </td>
                           </tr>
                           <tr>
                              <td><strong>Lampiran</strong>&nbsp;</td>
                              <td><strong>:</strong></td>
                              <td>
                                 &nbsp;&nbsp;<strong><?php echo $Lampiran ?></strong>
                              </td>
                           </tr>
                           <tr>
                              <td><strong>Perihal</strong>&nbsp;</td>
                              <td><strong>:</strong></td>
                              <td>
                                 &nbsp;&nbsp;<strong><?php echo $Perihal ?></strong>
                              </td>
                           </tr>
                        </table>
                     </div>
                     <div class="col xl5 l5 m5 s5">
                        <table>
                           <tr>
                              <td class="right"><strong>Bondowoso, <?php echo date("d F Y") ?></strong></td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-5 mb-5">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <div class="row">
                     <div class="col xl10 l10 m10 s10">
                        <table>
                           <tr>
                              <td><strong>Kepada Yth,</strong></td>
                           </tr>
                           <tr>
                              <td>Orang tua/wali dari &nbsp; : &nbsp;<?php echo $NamaSiswa ?></td>
                           </tr>
                           <tr>
                              <td>Di tempat</td>
                           </tr>
                        </table>
                     </div>
                     <div class="col xl2 l2 m2 s2">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-1 mb-1">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <div class="row">
                     <div class="col xl12 l12 m12 s12">
                        <style>table.subtitle-table, tr, td{border: none;}</style>
                        <table class="subtitle-table">
                           <tr>
                              <td style="text-align: justify;">
                                 <span>&emsp;&emsp;Sesuai dengan isi pokok surat di atas, maka bersamaan dengan ini kami mengundang kepada orang tua/wali murid dari <strong><?php echo $NamaSiswa ?></strong> kiranya dapat hadir ke sekolah, bahwa siswa bapak/ibu telah melakukan tindakan pelanggaran berat Dengan demikian, melalui surat ini kami harap orang tua/wali murid dari <strong><?php echo $NamaSiswa ?></strong> dapat hadir ke sekolah pada.</span>
                              </td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-4 mb-4">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <div class="row">
                     <div class="col xl1 l1 m1 s1"></div>
                     <div class="col xl11 l11 m11 s11">
                        <style>table.subtitle-table, tr, td{border: none;}</style>
                        <table class="subtitle-table">
                           <tr>
                              <td></td>
                              <td width="20%">Hari, Tanggal</td>
                              <td>:</td>
                              <td>&nbsp;<?php echo $OutputDate ?></td>
                           </tr>
                           <tr>
                              <td></td>
                              <td>Pukul</td>
                              <td>:</td>
                              <td>&nbsp;<?php echo $PukulPertemuan ?> WIB</td>
                           </tr>
                           <tr>
                              <td></td>
                              <td>Tempat</td>
                              <td>:</td>
                              <td>&nbsp;<?php echo $TempatPertemuan ?></td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-1 mb-1">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <div class="row">
                     <div class="col xl12 l12 m12 s12">
                        <style>table.subtitle-table, tr, td{border: none;}</style>
                        <table class="subtitle-table">
                           <tr>
                              <td style="text-align: justify;">
                                 <span>&emsp;&emsp;Mengingat sangat pentingnya hal ini,dimohon pengertian untuk kehadiran bapak/ibu wali dari <?php echo $NamaSiswa ?>. Demikian surat pemberitahuan ini kami buat. Terimakasih atas perhatian serta mohon kerjasamanya. Terimakasih.</span>
                              </td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-6 mb-2">
            <div class="row">
               <div class="col xl7 l7 m7 s7">

               </div>
               <div class="col xl5 l5 m5 s5">
                  <div class="row">
                     <div class="col xl12 l12 m12 s12">
                        <style>table.subtitle-table, tr, td{border: none;}</style>
                        <table class="subtitle-table">
                           <tr>
                              <td class="center">
                                 <span>
                                    Guru Bimbingan Konseling
                                 </span>
                              </td>
                           </tr>
                           <tr>
                              <td height="66">
                                 
                              </td>
                           </tr>
                           <tr>
                              <td class="center">
                                 <span>
                                    Putri Cahyani, S.Kom.
                                 </span>
                                 <small>NIP:100278763284286424</small>
                              </td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<script>
   window.print();
</script>
<?php include 'components/closing-page.php'; ?>