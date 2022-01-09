<?php 
   require '../../configs/connection.php';

   // Process update data in table identitas_kelas
   if (isset($_POST['update-data-IK'])) {
      $KodeIK = $_POST['KodeIK'];
		$IdentitasKelas = strtoupper($_POST['IdentitasKelas']);
		$DontChange = strtoupper($_POST['DontChange']);

      if ($IdentitasKelas == $DontChange) {
         mysqli_query($CONN, "UPDATE identitas_kelas
            SET
               IdentitasKelas = '$DontChange'
            WHERE
               KodeIK = '$KodeIK'
         ");
         echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menyimpan Data',
							text: 'Data identitas kelas telah tersimpan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
               window.setTimeout(function() {
						window.location.replace('data-identitas-kelas');
					}, 2800);
				</script>
			";
      }
      else {
         $GetTableIK = mysqli_query($CONN, "SELECT IdentitasKelas FROM identitas_kelas WHERE IdentitasKelas = '$IdentitasKelas'");
         $GetDataIK = mysqli_fetch_array($GetTableIK);
   
         if ($IdentitasKelas == "") {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Data tidak boleh kosong!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                        timer: 2800
                     });
                  }, 40);
               </script>
            ";
         }
         else if ($IdentitasKelas == $GetDataIK['IdentitasKelas']) {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Data identitas kelas ini sudah ada!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                        timer: 2800
                     });
                  }, 40);
               </script>
            ";
         }
         else {
           mysqli_query($CONN, "UPDATE identitas_kelas
               SET
                  IdentitasKelas = '$IdentitasKelas'
               WHERE
                  KodeIK = '$KodeIK'
            ");
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Berhasil Update Data',
                        text: 'Perubahan data identitas kelas berhasil disimpan',
                        icon: 'success',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                     });
                  }, 40);
                  window.setTimeout(function() {
                     window.location.replace('data-identitas-kelas');
                  }, 2800);
               </script>
            ";
         }
      }
   }

   // Process update data in table siswa
   if (isset($_POST['update-data-siswa'])) {
      $NIS = $_POST['NIS'];
		$NamaSW = htmlspecialchars(trim(ucwords($_POST['NamaSW'])));
		$JenisKelamin = $_POST['JenisKelamin'];
		$TempatLahir = htmlspecialchars(trim(ucwords($_POST['TempatLahir'])));
		$TanggalLahir = $_POST['TanggalLahir'];
		$Kelas = $_POST['Kelas'];
		$KodeIK = $_POST['KodeIK'];
		$NomorHPSiswa = $_POST['NomorHPSiswa'];
		$NomorHPWali = $_POST['NomorHPWali'];
		$Alamat = htmlspecialchars(trim(ucwords($_POST['Alamat'])));
      // Get URL untuk mengembalikan nilai ke halaman editing
      $URLEditing .= "NIS=";
      $URLEditing .= $NIS;

      if ($NamaSW == "" || $JenisKelamin == "" || $TempatLahir == "" || $TanggalLahir == "" || $Kelas == "" || $KodeIK == "" || $NomorHPSiswa == "" || $NomorHPWali == "" || $Alamat == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Update Data',
							text: 'Silahkan lengkapi seluruh data!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-edit-siswa?$URLEditing');
					}, 2800);
				</script>
			";
		}
      else if (!preg_match("/^[a-zA-Z ]*$/", $NamaSW)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan nama siswa wajib berupa huruf!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-siswa?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if (!preg_match("/^[a-zA-Z ]*$/", $TempatLahir)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan tempat lahir wajib berupa huruf!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-siswa?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if (!preg_match("/^[0-9]*$/", $NomorHPSiswa)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan nomor HP wajib berupa angka!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-siswa?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if (!preg_match("/^[0-9]*$/", $NomorHPWali)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan nomor HP wajib berupa angka!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-siswa?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else {
         mysqli_query($CONN, "UPDATE siswa
            SET
               NamaSW = '$NamaSW',
               JenisKelamin = '$JenisKelamin',
               TempatLahir = '$TempatLahir',
               TanggalLahir = '$TanggalLahir',
               Kelas = '$Kelas',
               KodeIK = '$KodeIK',
               NomorHPSiswa = '$NomorHPSiswa',
               NomorHPWali = '$NomorHPWali',
               Alamat = '$Alamat'
            WHERE
               NIS = '$NIS'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Update Data',
                     text: 'Perubahan data siswa berhasil disimpan',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                     timer: 2800
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('data-siswa');
               }, 2800);
            </script>
         ";
      }
   }

   // Process update data in table jabatan
   if (isset($_POST['update-data-jabatan'])) {
      $KodeJBT = $_POST['KodeJBT'];
		$Jabatan = htmlspecialchars(trim(ucwords($_POST['Jabatan'])));
      $DontChangeJBT = ucwords($_POST['DontChangeJBT']);

      if ($Jabatan == $DontChangeJBT) {
         mysqli_query($CONN, "UPDATE jabatan
            SET
               Jabatan = '$DontChangeJBT'
            WHERE
               KodeJBT = '$KodeJBT'
         ");
         echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menyimpan Data',
							text: 'Data jabatan telah tersimpan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
               window.setTimeout(function() {
						window.location.replace('data-jabatan-pegawai');
					}, 2800);
				</script>
			";
      }
      else {
         $GetTableJBT = mysqli_query($CONN, "SELECT Jabatan FROM jabatan WHERE Jabatan = '$Jabatan'");
         $GetDataJBT = mysqli_fetch_array($GetTableJBT);
   
         if ($Jabatan == "") {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Data tidak boleh kosong!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                        timer: 2800
                     });
                  }, 40);
               </script>
            ";
         }
         else if (!preg_match("/^[a-zA-Z ]*$/", $Jabatan)) {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Inputan jabatan wajib berupa huruf!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                        timer: 2800
                     });
                  }, 40);
               </script>
            ";
         }
         else if ($Jabatan == $GetDataJBT['Jabatan']) {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Data jabatan ini sudah ada!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                        timer: 2800
                     });
                  }, 40);
               </script>
            ";
         }
         else {
            mysqli_query($CONN, "UPDATE jabatan
               SET
                  Jabatan = '$Jabatan'
               WHERE
                  KodeJBT = '$KodeJBT'
            ");
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Berhasil Update Data',
                        text: 'Perubahan data jabatan berhasil disimpan',
                        icon: 'success',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                     });
                  }, 40);
                  window.setTimeout(function() {
                     window.location.replace('data-jabatan-pegawai');
                  }, 2800);
               </script>
            ";
         }
      }
   }

   // Process update data in table pegawai
   if (isset($_POST['update-data-pegawai'])) {
      $NIP = $_POST['NIP'];
		$NamaGR = htmlspecialchars(trim($_POST['NamaGR']));
		$JenisKelamin = $_POST['JenisKelamin'];
		$TempatLahir = htmlspecialchars(trim(ucwords($_POST['TempatLahir'])));
		$TanggalLahir = $_POST['TanggalLahir'];
		$KodeJBT = $_POST['KodeJBT'];
		$Status = $_POST['Status'];
		$NomorHP = $_POST['NomorHP'];
		$Alamat = htmlspecialchars(trim(ucwords($_POST['Alamat'])));
      // Get URL untuk mengembalikan nilai ke halaman editing
      $URLEditing .= "NIP=";
      $URLEditing .= $NIP;

      if ($NamaGR == "" || $JenisKelamin == "" || $TempatLahir == "" || $TanggalLahir == "" || $KodeJBT == "" || $Status == "" || $NomorHP == "" || $Alamat == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Update Data',
							text: 'Silahkan lengkapi seluruh data!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-edit-pegawai?$URLEditing');
					}, 2800);
				</script>
			";
		}
      else if (!preg_match("/^[a-zA-Z,. ]*$/", $NamaGR)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan nama pegawai wajib berupa huruf!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-pegawai?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if (!preg_match("/^[a-zA-Z ]*$/", $TempatLahir)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan tempat lahir wajib berupa huruf!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-pegawai?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if (!preg_match("/^[0-9]*$/", $NomorHP)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan nomor HP wajib berupa angka!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-pegawai?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else {
         mysqli_query($CONN, "UPDATE pegawai
            SET
               NamaGR = '$NamaGR',
               JenisKelamin = '$JenisKelamin',
               TempatLahir = '$TempatLahir',
               TanggalLahir = '$TanggalLahir',
               KodeJBT = '$KodeJBT',
               Status = '$Status',
               NomorHP = '$NomorHP',
               Alamat = '$Alamat'
            WHERE
               NIP = '$NIP'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Update Data',
                     text: 'Perubahan data pegawai berhasil disimpan',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                     timer: 2800
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('data-pegawai');
               }, 2800);
            </script>
         ";
      }
   }

   // Process update data user profile in table pegawai
   if (isset($_POST['update-user-profile'])) {
      $NIP = $_POST['NIP'];
		$NamaGR = htmlspecialchars(trim($_POST['NamaGR']));
		$JenisKelamin = $_POST['JenisKelamin'];
		$TempatLahir = htmlspecialchars(trim(ucwords($_POST['TempatLahir'])));
		$TanggalLahir = $_POST['TanggalLahir'];
		$KodeJBT = $_POST['KodeJBT'];
		$Status = $_POST['Status'];
		$NomorHP = $_POST['NomorHP'];
		$Alamat = htmlspecialchars(trim(ucwords($_POST['Alamat'])));
      // Get URL untuk mengembalikan nilai ke halaman editing
      $URLEditing .= "NIP=";
      $URLEditing .= $NIP;

      if ($NamaGR == "" || $JenisKelamin == "" || $TempatLahir == "" || $TanggalLahir == "" || $KodeJBT == "" || $Status == "" || $NomorHP == "" || $Alamat == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menyimpan Data',
							text: 'Tidak boleh ada data kosong!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-edit-profile?$URLEditing');
					}, 2800);
				</script>
			";
		}
      else if (!preg_match("/^[a-zA-Z,. ]*$/", $NamaGR)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan nama pegawai wajib berupa huruf!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-profile?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if (!preg_match("/^[a-zA-Z ]*$/", $TempatLahir)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan tempat lahir wajib berupa huruf!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-profile?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if (!preg_match("/^[0-9]*$/", $NomorHP)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Inputan nomor HP wajib berupa angka!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('form-edit-profile?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else {
         mysqli_query($CONN, "UPDATE pegawai
            SET
               NamaGR = '$NamaGR',
               JenisKelamin = '$JenisKelamin',
               TempatLahir = '$TempatLahir',
               TanggalLahir = '$TanggalLahir',
               KodeJBT = '$KodeJBT',
               Status = '$Status',
               NomorHP = '$NomorHP',
               Alamat = '$Alamat'
            WHERE
               NIP = '$NIP'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Menyimpan Data',
                     text: 'Perubahan data profile berhasil disimpan',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                     timer: 2800
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('user-profile');
               }, 2800);
            </script>
         ";
      }
   }

   // Process update data in table users
   if (isset($_POST['update-data-user'])) {
      $KodeUSR = $_POST['KodeUSR'];
		$NIP = $_POST['NIP'];
		$Username = htmlspecialchars(trim($_POST['Username']));
		$KodeLU = $_POST['KodeLU'];
      // Get URL untuk mengembalikan nilai primary ke form edit
      $URLEditing .= "KodeUSR=";
      $URLEditing .= $KodeUSR;

      if (empty($Username)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Update Data',
                     text: 'Username tidak boleh kosong!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('edit-user-registration?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else {
         mysqli_query($CONN, "UPDATE users
            SET
               NIP = '$NIP',
               Username = '$Username',
               KodeLU = '$KodeLU'
            WHERE
               KodeUSR = '$KodeUSR'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Update Data',
                     text: 'Perubahan data user berhasil disimpan',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                     timer: 2800
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('data-tim-monitoring');
               }, 2800);
            </script>
         ";
      }
   }

   // Process reset data password in table users
   if (isset($_POST['ubah-password-user'])) {
      $KodeUSR = $_POST['KodeUSR'];
		$NIP = $_POST['NIP'];
		$Username = htmlspecialchars(trim($_POST['Username']));
		$Password = trim($_POST['Password']);
		$ConfirmPassword = trim($_POST['ConfirmPassword']);
      // Get URL untuk mengembalikan nilai primary ke form edit
      $URLEditing .= "KodeUSR=";
      $URLEditing .= $KodeUSR;

      if (empty($Password) || empty($ConfirmPassword)) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Ubah Password',
                     text: 'Silahkan lengkapi seluruh password!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('reset-password?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else if ($ConfirmPassword !== $Password) {
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Gagal Ubah Password',
                     text: 'Mohon sesuaikan nilai kedua password!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('reset-password?$URLEditing');
               }, 2800);
            </script>
         ";
      }
      else {
         $FinalPassword = password_hash($Password, PASSWORD_DEFAULT);
         mysqli_query($CONN, "UPDATE users
            SET
               NIP = '$NIP',
               Username = '$Username',
               Password = '$FinalPassword'
            WHERE
               KodeUSR = '$KodeUSR'
         ");
         echo "
            <style>.select-wrapper{display: none;}</style>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Berhasil Ubah Password',
                     text: 'Perubahan password user berhasil disimpan',
                     icon: 'success',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
                     timer: 2800
                  });
               }, 40);
               window.setTimeout(function() {
                  window.location.replace('data-tim-monitoring');
               }, 2800);
            </script>
         ";
      }
   }
   
   // Process update data in table tipe_pelanggaran
   if (isset($_POST['update-data-TP'])) {
      $KodeTP = $_POST['KodeTP'];
      $TipePelanggaran = htmlspecialchars(trim(ucwords($_POST['TipePelanggaran'])));
		$KodeLP = $_POST['KodeLP'];
		$DontChange = ucwords($_POST['DontChange']);
      // Get URL untuk mengembalikan nilai primary ke form edit
      $URLEditing .= "KodeTP=";
      $URLEditing .= $KodeTP;

      if ($TipePelanggaran == $DontChange) {
         mysqli_query($CONN, "UPDATE tipe_pelanggaran
            SET
               TipePelanggaran = '$DontChange',
               KodeLP = '$KodeLP'
            WHERE
               KodeTP = '$KodeTP'
         ");
         echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menyimpan Data',
							text: 'Data tipe pelanggaran telah tersimpan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
               window.setTimeout(function() {
						window.location.replace('data-tipe-pelanggaran');
					}, 2800);
				</script>
			";
      }
      else {
         $GetTableTP = mysqli_query($CONN, "SELECT TipePelanggaran FROM tipe_pelanggaran WHERE TipePelanggaran = '$TipePelanggaran'");
         $GetDataTP = mysqli_fetch_array($GetTableTP);
   
         if ($TipePelanggaran == "") {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Data tidak boleh kosong!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false
                     });
                  }, 40);
                  window.setTimeout(function() {
                     window.location.replace('form-edit-tipe-pelanggaran?$URLEditing');
                  }, 2800);
               </script>
            ";
         }
         else if (!preg_match("/^[a-zA-Z ]*$/", $TipePelanggaran)) {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Inputan tipe pelanggaran wajib berupa huruf!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false
                     });
                  }, 40);
                  window.setTimeout(function() {
                     window.location.replace('form-edit-tipe-pelanggaran?$URLEditing');
                  }, 2800);
               </script>
            ";
         }
         else if ($TipePelanggaran == $GetDataTP['TipePelanggaran']) {
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Gagal Update Data',
                        text: 'Data tipe pelanggaran ini sudah ada!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false
                     });
                  }, 40);
                  window.setTimeout(function() {
                     window.location.replace('form-edit-tipe-pelanggaran?$URLEditing');
                  }, 2800);
               </script>
            ";
         }
         else {
            mysqli_query($CONN, "UPDATE tipe_pelanggaran
               SET
                  TipePelanggaran = '$TipePelanggaran',
                  KodeLP = '$KodeLP'
               WHERE
                  KodeTP = '$KodeTP'
            ");
            echo "
               <style>.select-wrapper{display: none;}</style>
               <script>
                  setTimeout(function() {
                     Swal.fire({
                        title: 'Berhasil Update Data',
                        text: 'Perubahan data tipe pelanggaran berhasil disimpan',
                        icon: 'success',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false,
                     });
                  }, 40);
                  window.setTimeout(function() {
                     window.location.replace('data-tipe-pelanggaran');
                  }, 2800);
               </script>
            ";
         }
      }
   }

   // // Process update data in table histori_pelanggaran
   // if (isset($_POST['update-HIS'])) {
   //    $KodeHIS = $_POST['KodeHIS'];
	// 	$NIP = $_POST['NIP'];
	// 	$NIS = $_POST['NIS'];
	// 	$KodeTP = $_POST['KodeTP'];
	// 	$BuktiPelanggaran = $_POST['BuktiPelanggaran'];
	// 	$TanggalKejadian = $_POST['TanggalKejadian'];
	// 	$Pukul = $_POST['Pukul'];

   //    mysqli_query($CONN, "UPDATE histori_pelanggaran
   //       SET
   //          NIP = '$NIP',
   //          NIS = '$NIS',
   //          KodeTP = '$KodeTP',
   //          BuktiPelanggaran = '$BuktiPelanggaran',
   //          TanggalKejadian = '$TanggalKejadian',
   //          Pukul = '$Pukul'
   //       WHERE
   //          KodeHIS = '$KodeHIS'
   //    ");
      
   //    echo "
   //       <script>

   //       </script>
   //    ";
   // }
?>