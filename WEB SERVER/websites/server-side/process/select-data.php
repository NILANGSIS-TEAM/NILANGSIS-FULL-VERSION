<?php
	// Process select data from table identitas_kelas
   function SelectDataIK() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $GetTableIK = mysqli_query($CONN, "SELECT * FROM identitas_kelas");
      while ($GetData = mysqli_fetch_array($GetTableIK)) {
      ?>
         <tr>
            <td><?php echo $NumberTable++; ?></td>
            <td><?php echo $GetData['KodeIK'] ?></td>
            <td><?php echo $GetData['IdentitasKelas'] ?></td>
            <td>
               <a href="form-edit-identitas-kelas?KodeIK=<?php echo $GetData['KodeIK'] ?>">
                  <button type="button" style="background: none; border: none; width: 7%;">
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Edit Data" style="cursor: pointer; color: #ffca28;">event_note</i>
                  </button>
               </a>
               <button id="delete-<?php echo $GetData['KodeIK'] ?>" style="display: none; background: none; border: none; width: 7%;">
                  <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Hapus Data" style="cursor: pointer; color: #ef5350;">delete_outline</i>
               </button>
            </td>
         </tr>
         <script>
            var button = document.querySelector('#delete-<?php echo $GetData['KodeIK'] ?>');
            button.onclick = function() {
               Swal.fire({
                  title: 'Konfirmasi Penghapusan',
                  text: "Apakah Anda yakin ingin menghapus data ini?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
               }).then((result) => {
                  if (result.isConfirmed) {
                     document.location.href = 'process/delete-data.php?KodeIK=<?php echo $GetData['KodeIK'] ?>';
                  }
               })
            }
         </script>
   <?php
      }
   }

	// Process select data from table siswa
   function SelectDataSiswa() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $GetTableSiswa = mysqli_query($CONN, "SELECT siswa.*, identitas_kelas.IdentitasKelas FROM siswa INNER JOIN identitas_kelas ON siswa.KodeIK = identitas_kelas.KodeIK ORDER BY Kelas DESC");
      while ($GetData = mysqli_fetch_array($GetTableSiswa)) {
      ?>
         <tr>
            <td><?php echo $NumberTable++ ?></td>
            <td><?php echo $GetData['NIS']?></td>
            <td><?php echo $GetData['NamaSW']?></td>
            <td><?php echo $GetData['JenisKelamin']?></td>
            <td><?php echo "$GetData[Kelas] $GetData[IdentitasKelas]" ?></td>
            <td>
               <a href="detail-siswa?NIS=<?php echo $GetData['NIS'] ?>">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Detail Data <?php echo $GetData['NamaSW'] ?>" style="cursor: pointer; color: #42a5f5;">assignment_ind</i>
                  </span>
               </a>
               <a href="form-edit-siswa?NIS=<?php echo $GetData['NIS'] ?>">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Edit Data <?php echo $GetData['NamaSW'] ?>" style="cursor: pointer; color: #ffca28;">event_note</i>
                  </span>
               </a>
               <button id="delete-<?php echo $GetData['NIS'] ?>" style="background: none; border: none; margin-left: -7px; width: 4%;">
                  <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Hapus Data <?php echo $GetData['NamaSW'] ?>" style="cursor: pointer; color: #ef5350;">delete_outline</i>
               </button>
            </td>
         </tr>
         <script>
            var button = document.querySelector("#delete-<?php echo $GetData['NIS'] ?>");
            button.onclick = function() {
               Swal.fire({
                  title: 'Konfirmasi Penghapusan',
                  text: "Apakah Anda yakin ingin menghapus data ini?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
               }).then((result) => {
                  if (result.isConfirmed) {
                     document.location.href = 'process/delete-data.php?NIS=<?php echo $GetData['NIS'] ?>';
                  }
               })
            }
         </script>
   <?php
      }
   }

	// Process select data from table jabatan
   function SelectDataJabatan() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $GetTableJabatan = mysqli_query($CONN, "SELECT * FROM jabatan");
      while ($GetData = mysqli_fetch_array($GetTableJabatan)) {
      ?>
         <tr>
            <td><?php echo $NumberTable++; ?></td>
            <td><?php echo $GetData['KodeJBT'] ?></td>
            <td><?php echo $GetData['Jabatan'] ?></td>
            <td>
               <a href="form-edit-jabatan?KodeJBT=<?php echo $GetData['KodeJBT'] ?>">
                  <button style="background: none; border: none; width: 7%;">
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Edit Data" style="cursor: pointer; color: #ffca28;">event_note</i>
                  </button>
               </a>
               <button id="delete-<?php echo $GetData['KodeJBT'] ?>" style="display: none; background: none; border: none; width: 7%;">
                  <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Hapus Data" style="cursor: pointer; color: #ef5350;">delete_outline</i>
               </button>
            </td>
         </tr>
         <script>
            var button = document.querySelector('#delete-<?php echo $GetData['KodeJBT'] ?>');
            button.onclick = function() {
               Swal.fire({
                  title: 'Konfirmasi Penghapusan',
                  text: "Apakah Anda yakin ingin menghapus data ini?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
               }).then((result) => {
                  if (result.isConfirmed) {
                     document.location.href = 'process/delete-data.php?KodeJBT=<?php echo $GetData['KodeJBT'] ?>';
                  }
               })
            }
         </script>
   <?php
      }
   }

	// Process select data from table pegawai
   function SelectDataPegawai() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $GetTablePegawai = mysqli_query($CONN, "SELECT pegawai.*, jabatan.Jabatan FROM pegawai INNER JOIN jabatan ON pegawai.KodeJBT = jabatan.KodeJBT ORDER BY NamaGR ASC");
      while ($GetData = mysqli_fetch_array($GetTablePegawai)) {
      ?>
         <tr>
            <td><?php echo $NumberTable++ ?></td>
            <td><?php echo $GetData['NIP'] ?></td>
            <td><?php echo $GetData['NamaGR'] ?></td>
            <td><?php echo $GetData['JenisKelamin'] ?></td>
            <td><?php echo $GetData['Jabatan'] ?></td>
            <td>
               <a href="detail-pegawai?NIP=<?php echo $GetData['NIP'] ?>">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Detail Data <?php echo $GetData['NamaGR'] ?>" style="cursor: pointer; color: #42a5f5;">assignment_ind</i>
                  </span>
               </a>
               <a href="form-edit-pegawai?NIP=<?php echo $GetData['NIP'] ?>">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Edit Data <?php echo $GetData['NamaGR'] ?>" style="cursor: pointer; color: #ffca28;">event_note</i>
                  </span>
               </a>
               <button id="delete-<?php echo $GetData['NIP'] ?>" style="background: none; border: none; margin-left: -7px; width: 4%; display: none;">
                  <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Hapus Data <?php echo $GetData['NamaGR'] ?>" style="cursor: pointer; color: #ef5350;">delete_outline</i>
               </button>
            </td>
         </tr>
         <script>
            var button = document.querySelector("#delete-<?php echo $GetData['NIP'] ?>");
            button.onclick = function() {
               Swal.fire({
                  title: 'Konfirmasi Penghapusan',
                  text: "Apakah Anda yakin ingin menghapus data ini?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
               }).then((result) => {
                  if (result.isConfirmed) {
                     document.location.href = 'process/delete-data.php?NIP=<?php echo $GetData['NIP'] ?>';
                  }
               })
            }
         </script>
   <?php
      }
   }

	// Process select data from table users
   function SelectDataUsers() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $GetTableUsers = mysqli_query($CONN, "SELECT users.*, pegawai.NamaGR, level_user.LevelUSR FROM users INNER JOIN pegawai ON users.NIP = pegawai.NIP INNER JOIN level_user ON users.KodeLU = level_user.KodeLU");
      while ($GetData = mysqli_fetch_array($GetTableUsers)) {
      ?>
         <tr>
            <td><?php echo $NumberTable++ ?></td>
            <td><?php echo $GetData['NamaGR'] ?></td>
            <td><?php echo $GetData['Username'] ?></td>
            <td><?php echo $GetData['LevelUSR'] ?></td>
            <td>
               <a href="reset-password?KodeUSR=<?php echo $GetData['KodeUSR'] ?>">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Reset Password <?php echo $GetData['Username'] ?>" style="cursor: pointer; color: #42a5f5;">assignment_late</i>
                  </span>
               </a>
               <a href="edit-user-registration?KodeUSR=<?php echo $GetData['KodeUSR'] ?>">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Edit User <?php echo $GetData['Username'] ?>" style="cursor: pointer; color: #ffca28;">event_note</i>
                  </span>
               </a>
               <button id="delete-<?php echo $GetData['KodeUSR'] ?>" style="background: none; border: none; margin-left: -7px; width: 4%;">
                  <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Hapus User <?php echo $GetData['Username'] ?>" style="cursor: pointer; color: #ef5350;">delete_outline</i>
               </button>
            </td>
         </tr>
         <script>
            var button = document.querySelector("#delete-<?php echo $GetData['KodeUSR'] ?>");
            button.onclick = function() {
               Swal.fire({
                  title: 'Konfirmasi Penghapusan',
                  text: "Apakah Anda yakin ingin menghapus data ini?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
               }).then((result) => {
                  if (result.isConfirmed) {
                     document.location.href = 'process/delete-data.php?KodeUSR=<?php echo $GetData['KodeUSR'] ?>';
                  }
               })
            }
         </script>
   <?php
      }
   }

	// Process select data from table tipe_pelanggaran
   function SelectDataTP() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $GetTableTP = mysqli_query($CONN, "SELECT tipe_pelanggaran.*, level_pelanggaran.* FROM tipe_pelanggaran INNER JOIN level_pelanggaran ON tipe_pelanggaran.KodeLP = level_pelanggaran.KodeLP ORDER BY TipePelanggaran ASC");
      while ($GetData = mysqli_fetch_array($GetTableTP)) {
         echo "
            <tr>
               <td>" . $NumberTable++ . "</td>
               <td>$GetData[TipePelanggaran]</td>
               <td>
                  <span class='chip' style='background-color: $GetData[ColorLevel];'>
                    <span style='color: $GetData[TextLevel];'>$GetData[LevelPelanggaran]</span>
                  </span>
               </td>
               <td>
                  <a href='form-edit-tipe-pelanggaran?KodeTP=$GetData[KodeTP]' class='tooltipped' data-position='left' data-tooltip='Edit Data'>
                     <span><i class='material-icons delete' style='cursor: pointer; color: #ffca28;'>event_note</i></span>
                  </a>
                  <a style='display: none;' class='tooltipped' data-position='left' data-tooltip='Hapus Data'>
                     <span><i class='material-icons delete' style='cursor: pointer; color: #ef5350;'>delete_outline</i></span>
                  </a>
               </td>
            </tr>
         ";
      }
   }

	// Process select data from table histori_pelanggaran
   function SelectDataHIS() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $GetTableHIS = mysqli_query($CONN, "SELECT histori_pelanggaran.*, pegawai.NamaGR, siswa.NamaSW, tipe_pelanggaran.*, level_pelanggaran.* FROM histori_pelanggaran INNER JOIN pegawai ON histori_pelanggaran.NIP = pegawai.NIP INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS LEFT JOIN tipe_pelanggaran ON histori_pelanggaran.KodeTP = tipe_pelanggaran.KodeTP LEFT JOIN level_pelanggaran ON tipe_pelanggaran.KodeLP = level_pelanggaran.KodeLP ORDER BY KodeHIS DESC");
      while ($GetData = mysqli_fetch_array($GetTableHIS)) {
      ?>
         <tr>
            <td><?php echo $NumberTable++ ?></td>
            <td><?php echo $GetData['NamaSW'] ?></td>
            <td>
               <span class='chip' style='background-color: <?php echo $GetData['ColorLevel'] ?>'>
                  <span style='color: <?php echo $GetData['TextLevel'] ?>'><?php echo $GetData['LevelPelanggaran'] ?></span>
               </span>
            </td>
            <td><?php echo $GetData['TanggalKejadian'] ?></td>
            <td><?php echo $GetData['Pukul'] ?></td>
            <td>
               <a href="detail-pelanggaran-siswa?KodeHIS=<?php echo $GetData['KodeHIS'] ?>">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Detail Pelanggaran <?php echo $GetData['NamaSW'] ?>" style="cursor: pointer; color: #42a5f5;">assignment_ind</i>
                  </span>
               </a>
               <a href="">
                  <span>
                     <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Edit Pelanggaran <?php echo $GetData['NamaSW'] ?>" style="cursor: pointer; color: #ffca28; display: none;">event_note</i>
                  </span>
               </a>
               <button id="delete-<?php echo $GetData['KodeHIS'] ?>" style="background: none; border: none; margin-left: -7px; width: 4%;">
                  <i class="material-icons delete tooltipped" data-position="left" data-tooltip="Hapus Pelanggaran <?php echo $GetData['NamaSW'] ?>" style="cursor: pointer; color: #ef5350;">delete_outline</i>
               </button>
            </td>
         </tr>
         <script>
            var button = document.querySelector("#delete-<?php echo $GetData['KodeHIS'] ?>");
            button.onclick = function() {
               Swal.fire({
                  title: 'Konfirmasi Penghapusan',
                  text: "Apakah Anda yakin ingin menghapus data ini?",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
               }).then((result) => {
                  if (result.isConfirmed) {
                     document.location.href = 'process/delete-data.php?KodeHIS=<?php echo $GetData['KodeHIS'] ?>';
                  }
               })
            }
         </script>
   <?php
      }
   }
   
   // Process select data report from table histori_pelanggaran
   function ReportDataPelanggaran() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $DateStart = $_GET['Start'];
      $DateFinish = $_GET['Finish'];
      $ConversionDateStart = date("d-m-Y", strtotime($DateStart));
      $ConversionDateFinish = date("d-m-Y", strtotime($DateFinish));
      $GetTableHIS = mysqli_query($CONN, "SELECT histori_pelanggaran.*, pegawai.NamaGR, siswa.NamaSW, tipe_pelanggaran.*, level_pelanggaran.* FROM histori_pelanggaran INNER JOIN pegawai ON histori_pelanggaran.NIP = pegawai.NIP INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS LEFT JOIN tipe_pelanggaran ON histori_pelanggaran.KodeTP = tipe_pelanggaran.KodeTP LEFT JOIN level_pelanggaran ON tipe_pelanggaran.KodeLP = level_pelanggaran.KodeLP WHERE TanggalKejadian BETWEEN '$ConversionDateStart' AND '$ConversionDateFinish'");
      while ($GetData = mysqli_fetch_array($GetTableHIS)) {
         echo "
            <tr>
               <td class='center'>" . $NumberTable++ . "</td>
               <td>$GetData[NamaGR]</td>
               <td>$GetData[NamaSW]</td>
               <td>$GetData[TipePelanggaran]</td>
               <td>$GetData[LevelPelanggaran]</td>
               <td>$GetData[TanggalKejadian]</td>
            </tr>
            <style>.blank-data{display: none;}</style>
         ";
      }
      echo "
         <tr class='blank-data'>
            <td class='center' colspan='7'>
               <h5>..::: BLANK :::..</h5>
            </td>
         </tr>
      ";
   }
   
   // Process select data report detail pelanggaran siswa from table histori_pelanggaran
   function ReportDetailDataPelanggaran() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $Kelas = $_GET['Kelas'];
      $KodeIK = $_GET['KodeIK'];
      $GetTableDE = mysqli_query($CONN, "SELECT histori_pelanggaran.NIS, histori_pelanggaran.KodeTP, siswa.NamaSW, siswa.JenisKelamin, siswa.Kelas, COUNT(KodeTP) AS JumlahPelanggaran FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS WHERE Kelas = '$Kelas' AND KodeIK = '$KodeIK' GROUP BY NIS ORDER BY JumlahPelanggaran DESC");
      while ($GetData = mysqli_fetch_array($GetTableDE)) {
         $GetDataIK = mysqli_query($CONN, "SELECT IdentitasKelas FROM identitas_kelas WHERE KodeIK = '$KodeIK'");
         $GetIK = mysqli_fetch_array($GetDataIK);
         echo "
            <tr>
               <td class='center'>" . $NumberTable++ . "</td>
               <td>$GetData[NamaSW]</td>
               <td>$GetData[JenisKelamin]</td>
               <td>$GetData[Kelas] $GetIK[IdentitasKelas]</td>
               <td>$GetData[JumlahPelanggaran] pelanggaran</td>
               <td class='center'>
                  <a href='print-evaluasi-siswa?NIS=$GetData[NIS]' target='_blank' class='btn wafes-effect wafes-light blue darken-1 pl-10 pr-10'>
                     <i class='material-icons left'>print</i>Print PDF
                  </a>
               </td>
            </tr>
            <style>.blank-data{display: none;}</style>
         ";
      }
      echo "
         <tr class='blank-data'>
            <td class='center' colspan='7'>
               <h5>..::: BLANK :::..</h5>
            </td>
         </tr>
      ";
   }
   
   // Process select data report detail pelanggaran siswa from table histori_pelanggaran
   function PrintDetailDataPelanggaran() {
      require '../../configs/connection.php';
      $NumberTable = 1;
      $NIS = $_GET['NIS'];
      $GetTableDE = mysqli_query($CONN, "SELECT histori_pelanggaran.*, tipe_pelanggaran.* FROM histori_pelanggaran INNER JOIN tipe_pelanggaran ON histori_pelanggaran.KodeTP = tipe_pelanggaran.KodeTP WHERE NIS = '$NIS'");
      while ($GetData = mysqli_fetch_array($GetTableDE)) {
         echo "
            <tr>
               <td class='center'>" . $NumberTable++ . "</td>
               <td>$GetData[TipePelanggaran]</td>
               <td>$GetData[TanggalKejadian]</td>
               <td>$GetData[Pukul]</td>
               <td>
                  <img src='../../assets/images/bukti-pelanggaran/$GetData[BuktiPelanggaran]' width='100%'>
               </td>
            </tr>
            <style>.blank-data{display: none;}</style>
         ";
      }
      echo "
         <tr class='blank-data'>
            <td class='center' colspan='7'>
               <h5>..::: BLANK :::..</h5>
            </td>
         </tr>
      ";
   }
?>