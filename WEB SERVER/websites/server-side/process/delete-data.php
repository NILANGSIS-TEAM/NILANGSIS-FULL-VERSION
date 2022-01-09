<link rel="stylesheet" type="text/css" href="../../../assets/css/themes/vertical-modern-menu-template/style.min.css">
<?php
   error_reporting(0);
   require '../../../configs/connection.php';
   session_start();

   // // Process delete data in table identitas_kelas
   // if ($KodeIK = $_GET['KodeIK']) {
   //    mysqli_query($CONN, "DELETE
   //       FROM
   //          identitas_kelas
   //       WHERE
   //          KodeIK = '$KodeIK'
   //    ");
   //    echo "
   //       <script>
   //          setTimeout(function() {
   //             Swal.fire({
   //                title: 'Berhasil Menghapus Data',
   //                text: 'Data identitas kelas berhasil dihapus',
   //                icon: 'success',
   //                padding: '0px 0px 30px 0px',
   //                showConfirmButton: false
   //             });
   //          },40);  
   //          window.setTimeout(function(){ 
   //             window.location.replace('../data-identitas-kelas');
   //          },2800);
   //       </script>
   //    ";
   // }

   // Process delete data in table siswa
   if ($NIS = $_GET['NIS']) {
      $GetTableSiswa = mysqli_query($CONN, "SELECT * FROM siswa WHERE NIS = '$NIS'");
      $GetData = mysqli_fetch_array($GetTableSiswa);
      $RemoveIMG = unlink("../../../assets/images/siswa/$GetData[FotoSiswa]");
      if ($RemoveIMG) {
         mysqli_query($CONN, "DELETE
            FROM
               siswa
            WHERE
               NIS = '$NIS'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Menghapus Data',
                     text: '$GetData[NamaSW] berhasil dihapus',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false
                  });
               },40);  
               window.setTimeout(function(){ 
                  window.location.replace('../data-siswa');
               },2800);
            </script>
         ";
      }
   }
   
   // // Process delete data in table jabatan
   // if ($KodeJBT = $_GET['KodeJBT']) {
   //    mysqli_query($CONN, "DELETE
   //       FROM
   //          jabatan
   //       WHERE
   //          KodeJBT = '$KodeJBT'
   //    ");
   //    echo "
   //       <script>
   //          setTimeout(function() { 
   //             Swal.fire({
   //                title: 'Berhasil Menghapus Data',
   //                text: 'Data jabatan berhasil dihapus',
   //                icon: 'success',
   //                padding: '0px 0px 30px 0px',
   //                showConfirmButton: false
   //             });
   //          },40);  
   //          window.setTimeout(function(){ 
   //             window.location.replace('../data-jabatan-pegawai');
   //          },2800);
   //       </script>
   //    ";
   // }

   // Process delete data in table pegawai
   // if ($NIP = $_GET['NIP']) {
   //    $GetTablePegawai = mysqli_query($CONN, "SELECT * FROM pegawai WHERE NIP = '$NIP'");
   //    $GetNamaGR = mysqli_fetch_array($GetTablePegawai);
   //    mysqli_query($CONN, "DELETE
   //       FROM
   //          pegawai
   //       WHERE
   //          NIP = '$NIP'
   //    ");
   //    echo "
   //       <style>.select-wrapper{display: none;}</style>
   //       <script>
   //          setTimeout(function() {
   //             Swal.fire({
   //                title: 'Berhasil Menghapus Data',
   //                text: '$GetNamaGR[NamaGR] berhasil dihapus',
   //                icon: 'success',
   //                padding: '0px 0px 30px 0px',
   //                showConfirmButton: false
   //             });
   //          },40);  
   //          window.setTimeout(function(){ 
   //             window.location.replace('../data-pegawai');
   //          },2800);
   //       </script>
   //    ";
   // }

   // Process delete data in table users
   if ($KodeUSR = $_GET['KodeUSR']) {
      $UserLogin = $_SESSION['KodeUSR'];
      $GetTableUSR = mysqli_query($CONN, "SELECT * FROM users WHERE KodeUSR = '$KodeUSR'");
      $GetUsername = mysqli_fetch_array($GetTableUSR);

      if ($KodeUSR == "USR01") {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Penghapusan Dilarang',
                     text: 'Data master server tidak boleh dihapus',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false
                  });
               },40);  
               window.setTimeout(function(){ 
                  window.location.replace('../data-tim-monitoring');
               },2800);
            </script>
         ";
      }
      else if ($KodeUSR == $UserLogin) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Penghapusan Gagal',
                     text: 'User login tidak bisa menghapus akunnya!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false
                  });
               },40);  
               window.setTimeout(function(){ 
                  window.location.replace('../data-tim-monitoring');
               },2800);
            </script>
         ";
      }
      else {
         mysqli_query($CONN, "DELETE
            FROM
               users
            WHERE
               KodeUSR = '$KodeUSR'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Menghapus Data',
                     text: 'Akun $GetUsername[Username] berhasil dihapus',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false
                  });
               },40);  
               window.setTimeout(function(){ 
                  window.location.replace('../data-tim-monitoring');
               },2800);
            </script>
         ";
      }
   }

   // Process delete data in table histori_pelanggaran
   if ($KodeHIS = $_GET['KodeHIS']) {
      $GetTableHIS = mysqli_query($CONN, "SELECT * FROM histori_pelanggaran WHERE KodeHIS = '$KodeHIS'");
      $GetData = mysqli_fetch_array($GetTableHIS);
      $RemoveIMG = unlink("../../../assets/images/bukti-pelanggaran/$GetData[BuktiPelanggaran]");
      if ($RemoveIMG) {
         mysqli_query($CONN, "DELETE
            FROM
               histori_pelanggaran
            WHERE
               KodeHIS = '$KodeHIS'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Menghapus Data',
                     text: 'Pelanggaran siswa terkait berhasil dihapus',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false
                  });
               },40);  
               window.setTimeout(function(){ 
                  window.location.replace('../data-histori-pelanggaran-siswa');
               },2800);
            </script>
         ";
      }
   }
?>
<script src="../../../assets/vendors/alerts/sweetalert2.all.min.js"></script>