<?php
   if (isset($_POST['search-page'])) {
      $GetSearching = strtolower($_POST['search-page']);
      if (empty($GetSearching)) {
         $GetSearching = "";
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Data Kosong',
                     text: 'Silahkan masukkan kata kunci pencarian!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                     timer: 2800
                  });
               }, 40);
            </script>
         ";
      }
      // Keywords pencarian dashboard
      else if ($GetSearching == "home" || $GetSearching == "halaman utama" || $GetSearching == "beranda" || $GetSearching == "dashboard" || $GetSearching == "data" || $GetSearching == "visualiasi data" || $GetSearching == "data monitoring pelanggaran siswa" || $GetSearching == "monitoring pelanggaran siswa" || $GetSearching == "monitoring pelanggaran" || $GetSearching == "monitoring" || $GetSearching == "top pelanggaran" || $GetSearching == "siswa ternakal") {
         header("location:dashboard");
      }
      // Keywords pencarian data pegawai
      else if ($GetSearching == "data pegawai" || $GetSearching == "data guru" || $GetSearching == "kepala sekolah" || $GetSearching == "pegawai" || $GetSearching == "guru" || $GetSearching == "staff tu" || $GetSearching == "edit pegawai" || $GetSearching == "edit guru" || $GetSearching == "detail pegawai" || $GetSearching == "detail guru" || $GetSearching == " hapus pegawai" || $GetSearching == "hapus guru") {
         header("location:data-pegawai");
      }
      // Keywords pencarian data siswa
      else if ($GetSearching == "data siswa" || $GetSearching == "siswa siswi" || $GetSearching == "siswa" || $GetSearching == "siswi" || $GetSearching == "data murid" || $GetSearching == "murid" || $GetSearching == "edit siswa" || $GetSearching == "edit murid" || $GetSearching == "detail siswa" || $GetSearching == "detail murid" || $GetSearching == "hapus siswa" || $GetSearching == "hapus murid") {
         header("location:data-siswa");
      }
      // Keywords pencarian data tipe pelanggaran
      else if ($GetSearching == "data pelanggaran" || $GetSearching == "edit data pelanggaran" || $GetSearching == "edit pelanggaran" || $GetSearching == "tipe pelanggaran" || $GetSearching == "pelanggaran") {
         header("location:data-tipe-pelanggaran");
      }
      // Keywords pencarian data pelanggaran siswa
      else if ($GetSearching == "data pelanggaran siswa" || $GetSearching == "pelanggaran siswa" || $GetSearching == "histori pelanggaran siswa" || $GetSearching == "histori pelanggaran" || $GetSearching == "riwayat pelanggaran siswa" || $GetSearching == "riwayat pelanggaran" || $GetSearching == "hapus pelanggaran siswa" || $GetSearching == "hapus pelanggaran" || $GetSearching == "detail pelanggaran siswa" || $GetSearching == "detail pelanggaran") {
         header("location:data-histori-pelanggaran-siswa");
      }
      // Keywords pencarian data jabatan pegawai
      else if ($GetSearching == "data jabatan pegawai" || $GetSearching == "data jabatan" || $GetSearching == "edit jabatan pegawai" || $GetSearching == "edit jabatan") {
         header("location:data-jabatan-pegawai");
      }
      // Keywords pencarian data identitas kelas
      else if ($GetSearching == "data identitas kelas" || $GetSearching == "identitas kelas" || $GetSearching == "kelas" || $GetSearching == "abjad kelas" || $GetSearching == "urutan kelas" || $GetSearching == "edit kelas" || $GetSearching == "edit identitas kelas") {
         header("location:data-identitas-kelas");
      }
      // Keywords pencarian data tim monitoring
      else if ($GetSearching == "data tim monitoring" || $GetSearching == "tim monitoring" || $GetSearching == "data pengguna" || $GetSearching == "data user" || $GetSearching == "pengguna" || $GetSearching == "user" || $GetSearching == "data petugas monitoring" || $GetSearching == "petugas monitoring" || $GetSearching == "administrator" || $GetSearching == "admin") {
         header("location:data-tim-monitoring");
      }
      // Keywords pencarian form registrasi tim monitoring
      else if ($GetSearching == "registrasi tim monitoring" || $GetSearching == "register tim monitoring" || $GetSearching == "pendaftaran tim monitoring" || $GetSearching == "registrasi petugas monitoring" || $GetSearching == "register petugas monitoring" || $GetSearching == "pendaftaran petugas monitoring" || $GetSearching == "registrasi pengguna" || $GetSearching == "register pengguna" || $GetSearching == "pendaftaran pengguna" || $GetSearching == "registrasi user" || $GetSearching == "register user" || $GetSearching == "pendaftaran user") {
         header("location:user-registration");
      }
      // Keywords pencarian form input pegawai
      else if ($GetSearching == "form input pegawai" || $GetSearching == "input pegawai" || $GetSearching == "tambah data pegawai" || $GetSearching == "tambah pegawai" || $GetSearching == "form input guru" || $GetSearching == "input guru" || $GetSearching == "tambah data guru" || $GetSearching == "tambah guru") {
         header("location:form-input-pegawai");
      }
      // Keywords pencarian form input siswa
      else if ($GetSearching == "form input siswa" || $GetSearching == "input siswa" || $GetSearching == "tambah data siswa" || $GetSearching == "tambah siswa" || $GetSearching == "form input murid" || $GetSearching == "input murid" || $GetSearching == "tambah data murid" || $GetSearching == "tambah murid") {
         header("location:form-input-siswa");
      }
      // Keywords pencarian form input tipe pelanggaran
      else if ($GetSearching == "form input pelanggaran" || $GetSearching == "input pelanggaran" || $GetSearching == "tambah data pelanggaran" || $GetSearching == "tambah pelanggaran") {
         header("location:form-input-tipe-pelanggaran");
      }
      // Keywords pencarian form input pelanggaran siswa
      else if ($GetSearching == "form input pelanggaran siswa" || $GetSearching == "input pelanggaran siswa" || $GetSearching == "tambah data pelanggaran siswa" || $GetSearching == "tambah pelanggaran siswa") {
         header("location:form-filter-pelanggaran");
      }
      // Keywords pencarian form input jabatan pegawai
      else if ($GetSearching == "form input jabatan pegawai" || $GetSearching == "input jabatan pegawai" || $GetSearching == "tambah data jabatan pegawai" || $GetSearching == "tambah jabatan pegawai") {
         header("location:form-input-jabatan");
      }
      // Keywords pencarian form input identitas kelas
      else if ($GetSearching == "form input identitas kelas" || $GetSearching == "input identitas kelas" || $GetSearching == "tambah data identitas kelas" || $GetSearching == "tambah identitas kelas" || $GetSearching == "form input urutan kelas" || $GetSearching == "input urutan kelas" || $GetSearching == "tambah data urutan kelas" || $GetSearching == "tambah urutan kelas" || $GetSearching == "form input abjad kelas" || $GetSearching == "input abjad kelas" || $GetSearching == "tambah data abjad kelas" || $GetSearching == "tambah abjad kelas") {
         header("location:form-input-identitas-kelas");
      }
      // Keywords pencarian report pelanggaran siswa
      else if ($GetSearching == "report data pelanggaran siswa" || $GetSearching == "report pelanggaran siswa" || $GetSearching == "print data pelanggaran siswa" || $GetSearching == "print pelanggaran siswa" || $GetSearching == "laporan data pelanggaran siswa" || $GetSearching == "laporan pelanggaran siswa") {
         header("location:report-data-pelanggaran-siswa");
      }
      // Keywords pencarian report evaluasi kedisiplinan siswa
      else if ($GetSearching == "report data evaluasi kedisiplinan siswa" || $GetSearching == "report evaluasi desiplinan siswa" || $GetSearching == "print data evaluasi desiplinan siswa" || $GetSearching == "print evaluasi desiplinan siswa" || $GetSearching == "laporan data evaluasi desiplinan siswa" || $GetSearching == "laporan evaluasi desiplinan siswa" || $GetSearching == "evaluasi desiplinan siswa") {
         header("location:report-evaluasi-kedisiplinan-siswa");
      }
      // Keywords pencarian print surat panggilan orang tua/wali siswa
      else if ($GetSearching == "cetak surat panggilan orang tua" || $GetSearching == "print surat panggilan orang tua" || $GetSearching == "cetak surat panggilan" || $GetSearching == "print surat panggilan" || $GetSearching == "surat panggilan orang tua" || $GetSearching == "surat panggilan siswa" || $GetSearching == "surat panggilan") {
         header("location:surat-panggilan");
      }
      // Keywords pencarian halaman user account
      else if ($GetSearching == "akun user" || $GetSearching == "user akun" || $GetSearching == "user account") {
         header("location:user-account");
      }
      // Keywords pencarian halaman user profile
      else if ($GetSearching == "profil user" || $GetSearching == "user profil" || $GetSearching == "user profile") {
         header("location:user-profile");
      }
      // Keywords pencarian halaman dokumentasi pengguna
      else if ($GetSearching == "dokumentasi nilangsis" || $GetSearching == "dokumentasi penggunaan nilangsis" || $GetSearching == "dokumentasi penggunaan aplikasi" || $GetSearching == "cara menggunakan nilangsis" || $GetSearching == "cara menggunakan aplikasi" || $GetSearching == "dokumentasi" || $GetSearching == "documentation") {
         header("location:documentation");
      }
      // Keywords pencarian halaman about nilangsis
      else if ($GetSearching == "nilangsis" || $GetSearching == "profil nilangsis" || $GetSearching == "tentang nilangsis" || $GetSearching == "about nilangsis" || $GetSearching == "tentang" || $GetSearching == "about") {
         header("location:about-nilangsis");
      }
      // Jika input pencari tidak sesuai dengan kata kunci
      else {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Data Not Found',
                     text: 'Data yang Anda cari tidak ditemukan!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                     timer: 2800
                  });
               }, 40);
            </script>
         ";
      }
   }
?>