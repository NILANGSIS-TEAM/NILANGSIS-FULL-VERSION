<?php
   // Visualisasi data jumlah pegawai SMP Negeri 1 Pujer
   function CountDataPegawai() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT COUNT(NIP) AS CountData FROM pegawai");
      $GetData = mysqli_fetch_array($GetTable);
      $GetCount = $GetData['CountData'];
      echo $GetCount;
   }
   // Visualisasi data jumlah siswa SMP Negeri 1 Pujer
   function CountDataSiswa() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT COUNT(NIS) AS CountData FROM siswa");
      $GetData = mysqli_fetch_array($GetTable);
      $GetCount = $GetData['CountData'];
      echo $GetCount;
   }
   // Visualisasi data jumlah tim monitoring pelanggaran siswa SMP Negeri 1 Pujer
   function CountDataTimMonitoring() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT COUNT(KodeUSR) AS CountData FROM users");
      $GetData = mysqli_fetch_array($GetTable);
      $GetCount = $GetData['CountData'];
      echo $GetCount;
   }
   // Visualisasi data jumlah tim monitoring pelanggaran siswa SMP Negeri 1 Pujer
   function CountDataPelanggaranSiswa() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT COUNT(KodeHIS) AS CountData FROM histori_pelanggaran");
      $GetData = mysqli_fetch_array($GetTable);
      $GetCount = $GetData['CountData'];
      echo $GetCount;
   }
   // Visualisasi data grafik jumlah pelanggaran siswa kelas VII
   function CountPelanggaranKelasVII() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.KodeHIS, histori_pelanggaran.NIS, siswa.Kelas, COUNT(KodeHIS) AS CountData FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS WHERE Kelas = 'VII'");
      $GetData = mysqli_fetch_array($GetTable);
      $GetCount = $GetData['CountData'];
      echo $GetCount;
   }
   // Visualisasi data grafik jumlah pelanggaran siswa kelas VIII
   function CountPelanggaranKelasVIII() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.KodeHIS, histori_pelanggaran.NIS, siswa.Kelas, COUNT(KodeHIS) AS CountData FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS WHERE Kelas = 'VIII'");
      $GetData = mysqli_fetch_array($GetTable);
      $GetCount = $GetData['CountData'];
      echo $GetCount;
   }
   // Visualisasi data grafik jumlah pelanggaran siswa kelas IX
   function CountPelanggaranKelasIX() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.KodeHIS, histori_pelanggaran.NIS, siswa.Kelas, COUNT(KodeHIS) AS CountData FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS WHERE Kelas = 'IX'");
      $GetData = mysqli_fetch_array($GetTable);
      $GetCount = $GetData['CountData'];
      echo $GetCount;
   }
   // Visualisasi data top global pelanggaran sekolah
   function CountTopPelanggaranSekolah() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.NIS, histori_pelanggaran.KodeTP, siswa.NamaSW, siswa.FotoSiswa, siswa.Kelas, COUNT(KodeTP) AS JumlahPelanggaran FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS GROUP BY NIS ORDER BY JumlahPelanggaran DESC LIMIT 3");
      while($GetData = mysqli_fetch_array($GetTable)) {
         echo "
            <div class='col s12 m6 l4 mt-1'>
               <div class='card-panel border-radius-6 mt-10'>
                  <a>
                     <img class='responsive-img border-radius-8 z-depth-4 image-n-margin' src='../../assets/images/siswa/$GetData[FotoSiswa]' alt=''>
                  </a>
                  <h6 class='mt-6'>
                     <span>$GetData[NamaSW]</span>
                  </h6>
                  <span>Terbukti telah melakukan pelanggaran tata tertib di sekolah sebanyak total $GetData[JumlahPelanggaran]x pelanggaran</span>
               </div>
            </div>
         ";
      }
   }
   // Visualisasi data top pelanggaran siswa kelas VII
   function CountTopPelanggaranKelasVII() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.NIS, histori_pelanggaran.KodeTP, siswa.NamaSW, siswa.FotoSiswa, siswa.Kelas, COUNT(KodeTP) AS JumlahPelanggaran FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS WHERE Kelas = 'VII' GROUP BY NIS ORDER BY JumlahPelanggaran DESC LIMIT 3");
      while ($GetData = mysqli_fetch_array($GetTable)) {
         echo "
            <li class='collection-item avatar'>
               <img src='../../assets/images/siswa/$GetData[FotoSiswa]' class='circle'>
               <p class='font-weight-600'>$GetData[NamaSW]</p>
               <p class='medium-small'>Telah melakukan total pelanggaran sebanyak $GetData[JumlahPelanggaran]x</p>
               <span class='secondary-content red-text'>
                  <i class='material-icons'>star_border</i>
               </span>
            </li>
         ";
      }
   }
   // Visualisasi data top pelanggaran siswa kelas VIII
   function CountTopPelanggaranKelasVIII() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.NIS, histori_pelanggaran.KodeTP, siswa.NamaSW, siswa.FotoSiswa, siswa.Kelas, COUNT(KodeTP) AS JumlahPelanggaran FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS WHERE Kelas = 'VIII' GROUP BY NIS ORDER BY JumlahPelanggaran DESC LIMIT 3");
      while ($GetData = mysqli_fetch_array($GetTable)) {
         echo "
            <li class='collection-item avatar'>
               <img src='../../assets/images/siswa/$GetData[FotoSiswa]' class='circle'>
               <p class='font-weight-600'>$GetData[NamaSW]</p>
               <p class='medium-small'>Telah melakukan total pelanggaran sebanyak $GetData[JumlahPelanggaran]x</p>
               <span class='secondary-content red-text'>
                  <i class='material-icons'>star_border</i>
               </span>
            </li>
         ";
      }
   }
   // Visualisasi data top pelanggaran siswa kelas IX
   function CountTopPelanggaranKelasIX() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.NIS, histori_pelanggaran.KodeTP, siswa.NamaSW, siswa.FotoSiswa, siswa.Kelas, COUNT(KodeTP) AS JumlahPelanggaran FROM histori_pelanggaran INNER JOIN siswa ON histori_pelanggaran.NIS = siswa.NIS WHERE Kelas = 'IX' GROUP BY NIS ORDER BY JumlahPelanggaran DESC LIMIT 3");
      while ($GetData = mysqli_fetch_array($GetTable)) {
         echo "
            <li class='collection-item avatar'>
               <img src='../../assets/images/siswa/$GetData[FotoSiswa]' class='circle'>
               <p class='font-weight-600'>$GetData[NamaSW]</p>
               <p class='medium-small'>Telah melakukan total pelanggaran sebanyak $GetData[JumlahPelanggaran]x</p>
               <span class='secondary-content red-text'>
                  <i class='material-icons'>star_border</i>
               </span>
            </li>
         ";
      }
   }
   // Visualisasi data top pelanggaran yang sering dilakukan siswa
   function CountTopPelanggaranTerfavorit() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.NIS, histori_pelanggaran.KodeTP, tipe_pelanggaran.TipePelanggaran, COUNT(NIS) AS JumlahPelanggaran FROM histori_pelanggaran INNER JOIN tipe_pelanggaran ON histori_pelanggaran.KodeTP = tipe_pelanggaran.KodeTP GROUP BY KodeTP ORDER BY JumlahPelanggaran DESC LIMIT 5");
      while ($GetData = mysqli_fetch_array($GetTable)) {
         echo "
            <li class='collection-item avatar'>
               <img src='../../assets/images/logo/icon-pelanggaran-awd.png' class='circle'>
               <p class='font-weight-600'>$GetData[TipePelanggaran]</p>
               <p class='medium-small'>Dilakukan sebanyak total $GetData[JumlahPelanggaran]x oleh siswa</p>
               <span class='secondary-content red-text'>
                  <i class='material-icons'>event_busy</i>
               </span>
            </li>
         ";
      }
   }
   // Visualisasi data petugas monitoring teraktif
   function CountPetugasMonitoringTeraktif() {
      require '../../configs/connection.php';
      $GetTable = mysqli_query($CONN, "SELECT histori_pelanggaran.NIP, histori_pelanggaran.NIS, pegawai.NamaGR, pegawai.FotoPegawai, COUNT(NIS) AS JumlahPelanggaran FROM histori_pelanggaran INNER JOIN pegawai ON histori_pelanggaran.NIP = pegawai.NIP GROUP BY NIP ORDER BY JumlahPelanggaran DESC LIMIT 5");
      while ($GetData = mysqli_fetch_array($GetTable)) {
         echo "
            <li class='collection-item avatar'>
               <img src='../../assets/images/pegawai/$GetData[FotoPegawai]' class='circle'>
               <p class='font-weight-600'>$GetData[NamaGR]</p>
               <p class='medium-small'>Merekap pelanggaran siswa sebanyak $GetData[JumlahPelanggaran]x</p>
               <span class='secondary-content red-text'>
                  <i class='material-icons'>person_outline</i>
               </span>
            </li>
         ";
      }
   }
?>