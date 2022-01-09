<?php
	require '../../configs/connection.php';

	// Process insert data into table identitas_kelas
	if (isset($_POST['insert-into-IK'])) {
		$KodeIK = $_POST['KodeIK'];
		$IdentitasKelas = strtoupper($_POST['IdentitasKelas']);

		$GetTableIK = mysqli_query($CONN, "SELECT IdentitasKelas FROM identitas_kelas WHERE IdentitasKelas = '$IdentitasKelas'");
		$GetDataIK = mysqli_fetch_array($GetTableIK);

		if ($IdentitasKelas == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
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
							title: 'Gagal Menambah Data',
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
			mysqli_query($CONN, "
				INSERT INTO identitas_kelas (
					KodeIK,
					IdentitasKelas
				)
				VALUES (
					'$KodeIK',
					'$IdentitasKelas'
				)
			");

			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menambah Data',
							text: 'Identitas kelas baru berhasil ditambahkan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('data-identitas-kelas');
					}, 2800);
				</script>
			";
		}
	}

	// Process insert data into table siswa
	if (isset($_POST['insert-into-siswa'])) {
		$NIS = $_POST['NIS'];
		$NamaSW = htmlspecialchars(trim(ucwords($_POST['NamaSW'])));
		// Get data foto siswa
		$FotoSiswa = htmlspecialchars(strtolower($_FILES['FotoSiswa']['name']));
		$SourceIMG = $_FILES['FotoSiswa']['tmp_name'];
		$InputCheck = $_FILES['FotoSiswa']['error'];
		$FileSize = $_FILES['FotoSiswa']['size'];
		$TransferLoc = "../../assets/images/siswa/";
		// Membatasi ekstensi pada inputan upload file
		$ValidExtension = ["jpg", "jpeg", "png"];
		$GetFileName = explode(".", $FotoSiswa);
		$GetExtFile = end($GetFileName);
		// Membuat nama file menjadi unik supaya tidak terduplikasi di database
		$SetUniqName = uniqid();
		$SetNewFileName .= strtolower($SetUniqName);
		$SetNewFileName .= "-";
		$SetNewFileName .= $FotoSiswa;
		// End >>>
		$JenisKelamin = $_POST['JenisKelamin'];
		$TempatLahir = htmlspecialchars(trim(ucwords($_POST['TempatLahir'])));
		$TanggalLahir = $_POST['TanggalLahir'];
		$Kelas = $_POST['Kelas'];
		$KodeIK = $_POST['KodeIK'];
		$NomorHPSiswa = $_POST['NomorHPSiswa'];
		$NomorHPWali = $_POST['NomorHPWali'];
		$Alamat = htmlspecialchars(trim(ucwords($_POST['Alamat'])));

		$GetTableSiswa = mysqli_query($CONN, "SELECT NIS FROM siswa WHERE NIS = '$NIS'");
		$GetDataSiswa = mysqli_fetch_array($GetTableSiswa);

		if ($NIS == "" || $NamaSW == "" || $JenisKelamin == "" || $TempatLahir == "" || $TanggalLahir == "" || $Kelas == "" || $KodeIK == "" || $NomorHPSiswa == "" || $NomorHPWali == "" || $Alamat == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Silahkan lengkapi seluruh data!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
					}, 2800);
				</script>
			";
		}
		else if (!preg_match("/^[0-9]*$/", $NIS)) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Inputan NIS wajib berupa angka!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan nama siswa wajib berupa huruf!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan tempat lahir wajib berupa huruf!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan nomor HP wajib berupa angka!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan nomor HP wajib berupa angka!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
					}, 2800);
				</script>
			";
		}
		else if ($InputCheck === 4) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Silahkan upload foto siswa!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
					}, 2800);
				</script>
			";
		}
		else if (!in_array($GetExtFile, $ValidExtension)) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Ekstensi File Dilarang',
							text: 'Silahkan upload file ekstensi (JPG, JPEG, PNG)!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
					}, 2800);
				</script>
			";
		}
		else if ($FileSize > 600000) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Ukuran file melebihi batas maksimal (600 KB)!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
					}, 2800);
				</script>
			";
		}
		else if ($NIS == $GetDataSiswa['NIS']) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Nomor Induk Siswa ini sudah terdaftar!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-siswa');
					}, 2800);
				</script>
			";
		}
		else {
			move_uploaded_file($SourceIMG, $TransferLoc.$SetNewFileName);
			mysqli_query($CONN, "
				INSERT INTO siswa (
					NIS,
					NamaSW,
					FotoSiswa,
					JenisKelamin,
					TempatLahir,
					TanggalLahir,
					Kelas,
					KodeIK,
					NomorHPSiswa,
					NomorHPWali,
					Alamat
				)
				VALUES (
					'$NIS',
					'$NamaSW',
					'$SetNewFileName',
					'$JenisKelamin',
					'$TempatLahir',
					'$TanggalLahir',
					'$Kelas',
					'$KodeIK',
					'$NomorHPSiswa',
					'$NomorHPWali',
					'$Alamat'
				)
			");

			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menambah Data',
							text: 'Data siswa baru berhasil ditambahkan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('data-siswa');
					}, 2800);
				</script>
			";
		}
	}

	// Process insert data into table jabatan
	if (isset($_POST['insert-into-jabatan'])) {
		$KodeJBT = $_POST['KodeJBT'];
		$Jabatan = htmlspecialchars(trim(ucwords($_POST['Jabatan'])));
		
		$GetTableJBT = mysqli_query($CONN, "SELECT Jabatan FROM jabatan WHERE Jabatan = '$Jabatan'");
		$GetDataJBT = mysqli_fetch_array($GetTableJBT);

		if ($Jabatan == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
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
							title: 'Gagal Menambah Data',
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
							title: 'Gagal Menambah Data',
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
			mysqli_query($CONN, "
				INSERT INTO jabatan (
					KodeJBT,
					Jabatan
				)
				VALUES (
					'$KodeJBT',
					'$Jabatan'
				)
			");

			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menambah Data',
							text: 'Jabatan baru berhasil ditambahkan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('data-jabatan-pegawai');
					}, 2800);
				</script>
			";
		}
	}

	// Process insert data into table pegawai
	if (isset($_POST['insert-into-pegawai'])) {
		$NIP = $_POST['NIP'];
		$NamaGR = htmlspecialchars(trim($_POST['NamaGR']));
		// Get data foto pegawai
		$FotoPegawai = htmlspecialchars(strtolower($_FILES['FotoPegawai']['name']));
		$SourceIMG = $_FILES['FotoPegawai']['tmp_name'];
		$InputCheck = $_FILES['FotoPegawai']['error'];
		$FileSize = $_FILES['FotoPegawai']['size'];
		$TransferLoc = "../../assets/images/pegawai/";
		// Membatasi ekstensi pada inputan upload file
		$ValidExtension = ["jpg", "jpeg", "png"];
		$GetFileName = explode(".", $FotoPegawai);
		$GetExtFile = end($GetFileName);
		// Membuat nama file menjadi unik supaya tidak terduplikasi di database
		$SetUniqName = uniqid();
		$SetNewFileName .= strtolower($SetUniqName);
		$SetNewFileName .= "-";
		$SetNewFileName .= $FotoPegawai;
		// End >>>
		$JenisKelamin = $_POST['JenisKelamin'];
		$TempatLahir = htmlspecialchars(trim(ucwords($_POST['TempatLahir'])));
		$TanggalLahir = $_POST['TanggalLahir'];
		$KodeJBT = $_POST['KodeJBT'];
		$Status = $_POST['Status'];
		$NomorHP = $_POST['NomorHP'];
		$Alamat = htmlspecialchars(trim(ucwords($_POST['Alamat'])));

		$GetTablePegawai = mysqli_query($CONN, "SELECT NIP FROM pegawai WHERE NIP = '$NIP'");
		$GetDataPegawai = mysqli_fetch_array($GetTablePegawai);
		$GetDataJBT01 = mysqli_query($CONN, "SELECT KodeJBT FROM pegawai WHERE KodeJBT = 'JBT01'");
		$GetData01 = mysqli_fetch_array($GetDataJBT01);
		$GetDataJBT02 = mysqli_query($CONN, "SELECT KodeJBT FROM pegawai WHERE KodeJBT = 'JBT02'");
		$GetData02 = mysqli_fetch_array($GetDataJBT02);

		if ($NIP == "" || $NamaGR == "" || $JenisKelamin == "" || $TempatLahir == "" || $TanggalLahir == "" || $KodeJBT == "" || $Status == "" || $NomorHP == "" || $Alamat == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Silahkan lengkapi seluruh data!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
					}, 2800);
				</script>
			";
		}
		else if (!preg_match("/^[0-9]*$/", $NIP)) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Inputan NIP wajib berupa angka!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan nama pegawai wajib berupa huruf!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan tempat lahir wajib berupa huruf!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan nomor HP wajib berupa angka!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
					}, 2800);
				</script>
			";
		}
		else if ($InputCheck === 4) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Silahkan upload foto pegawai!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
					}, 2800);
				</script>
			";
		}
		else if (!in_array($GetExtFile, $ValidExtension)) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Ekstensi File Dilarang',
							text: 'Silahkan upload file ekstensi (JPG, JPEG, PNG)!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
					}, 2800);
				</script>
			";
		}
		else if ($FileSize > 600000) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Input Pelanggaran Gagal',
							text: 'Ukuran file melebihi batas maksimal (600 KB)!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
					}, 2800);
				</script>
			";
		}
		else if ($NIP == $GetDataPegawai['NIP']) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Nomor Induk Pegawai ini sudah terdaftar!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
					}, 2800);
				</script>
			";
		}
		else if ($KodeJBT == $GetData01['KodeJBT'] || $KodeJBT == $GetData02['KodeJBT']) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Pegawai dengan jabatan ini sudah terdaftar!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false,
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pegawai');
					}, 2800);
				</script>
			";
		}
		else {
			move_uploaded_file($SourceIMG, $TransferLoc.$SetNewFileName);
			mysqli_query($CONN, "
				INSERT INTO pegawai (
					NIP,
					NamaGR,
					FotoPegawai,
					JenisKelamin,
					TempatLahir,
					TanggalLahir,
					KodeJBT,
					Status,
					NomorHP,
					Alamat
				)
				VALUES (
					'$NIP',
					'$NamaGR',
					'$SetNewFileName',
					'$JenisKelamin',
					'$TempatLahir',
					'$TanggalLahir',
					'$KodeJBT',
					'$Status',
					'$NomorHP',
					'$Alamat'
				)
			");

			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menambah Data',
							text: 'Data pegawai baru berhasil ditambahkan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('data-pegawai');
					}, 2800);
				</script>
			";
		}
	}

	// Process insert data into table users
	if (isset($_POST['insert-into-users'])) {
		$KodeUSR = $_POST['KodeUSR'];
		$NIP = $_POST['NIP'];
		$Username = htmlspecialchars(trim($_POST['Username']));
		$Password = trim($_POST['Password']);
		$RtyPassword = trim($_POST['RtyPassword']);
		$KodeLU = $_POST['KodeLU'];

		$GetTableUSR = mysqli_query($CONN, "SELECT NIP FROM users WHERE NIP = '$NIP'");
		$GetDataUSR = mysqli_fetch_array($GetTableUSR);

		if ($NIP == "" || $Username == "" || $Password == "" || $KodeLU == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Registrasi User Gagal',
							text: 'Silahkan lengkapi seluruh data!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('user-registration');
					}, 2800);
				</script>
			";
		}
		else if ($RtyPassword !== $Password) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Registrasi User Gagal',
							text: 'Sesuaikan password dengan password sebelumnya!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('user-registration');
					}, 2800);
				</script>
			";
		}
		else if ($NIP == $GetDataUSR['NIP']) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Registrasi User Gagal',
							text: 'Pegawai ini sudah terdaftar!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('user-registration');
					}, 2800);
				</script>
			";
		}
		else {
			$Hashed = password_hash($Password, PASSWORD_DEFAULT);
			mysqli_query($CONN, "
				INSERT INTO users (
					KodeUSR,
					NIP,
					Username,
					Password,
					KodeLU
				)
				VALUES (
					'$KodeUSR',
					'$NIP',
					'$Username',
					'$Hashed',
					'$KodeLU'
				)
			");

			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Registrasi User Berhasil',
							text: 'Data user baru berhasil ditambahkan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('data-tim-monitoring');
					}, 2800);
				</script>
			";
		}
	}

	// Process insert data into table tipe_pelanggaran
	if (isset($_POST['insert-into-TP'])) {
		$KodeTP = $_POST['KodeTP'];
		$TipePelanggaran = htmlspecialchars(trim(ucwords($_POST['TipePelanggaran'])));
		$KodeLP = $_POST['KodeLP'];

		$GetTableTP = mysqli_query($CONN, "SELECT TipePelanggaran FROM tipe_pelanggaran WHERE TipePelanggaran = '$TipePelanggaran'");
		$GetDataTP = mysqli_fetch_array($GetTableTP);

		if ($TipePelanggaran == "" || $KodeLP == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Menambah Data',
							text: 'Silahkan lengkapi seluruh data!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-tipe-pelanggaran');
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
							title: 'Gagal Menambah Data',
							text: 'Inputan tipe pelanggaran wajib berupa huruf!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-tipe-pelanggaran');
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
							title: 'Gagal Menambah Data',
							text: 'Data tipe pelanggaran ini sudah ada!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-tipe-pelanggaran');
					}, 2800);
				</script>
			";
		}
		else {
			mysqli_query($CONN, "
				INSERT INTO tipe_pelanggaran (
					KodeTP,
					TipePelanggaran,
					KodeLP
				)
				VALUES (
					'$KodeTP',
					'$TipePelanggaran',
					'$KodeLP'
				)
			");

			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Berhasil Menambah Data',
							text: 'Tipe pelanggaran baru berhasil ditambahkan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('data-tipe-pelanggaran');
					}, 2800);
				</script>
			";
		}
	}

	// Process insert data into table histori_pelanggaran
	if (isset($_POST['insert-into-HIS'])) {
		$KodeHIS = $_POST['KodeHIS'];
		$NIP = $_POST['NIP'];
		$NIS = $_POST['NIS'];
		$KodeTP = $_POST['KodeTP'];
		// Get data foto bukti pelanggaran
		$BuktiPelanggaran = htmlspecialchars(strtolower($_FILES['BuktiPelanggaran']['name']));
		$SourceIMG = $_FILES['BuktiPelanggaran']['tmp_name'];
		$InputCheck = $_FILES['BuktiPelanggaran']['error'];
		$FileSize = $_FILES['BuktiPelanggaran']['size'];
		$TransferLoc = "../../assets/images/bukti-pelanggaran/";
		// Membatasi ekstensi pada inputan upload file
		$ValidExtension = ["jpg", "jpeg", "png"];
		$GetFileName = explode(".", $BuktiPelanggaran);
		$GetExtFile = end($GetFileName);
		// Membuat nama file menjadi unik supaya tidak terduplikasi di database
		$SetUniqName = uniqid();
		$SetNewFileName .= strtolower($SetUniqName);
		$SetNewFileName .= "-";
		$SetNewFileName .= $BuktiPelanggaran;
		// End >>>
		$TanggalKejadian = $_POST['TanggalKejadian'];
		$Pukul = $_POST['Pukul'];
		// Get url filter kelas dan identitas kelas
		$FilterUrlKIK = "Kelas=";
		$FilterUrlKIK .= $_POST['GetKelas'];
		$FilterUrlKIK .= "&";
		$FilterUrlKIK .= "KodeIK=";
		$FilterUrlKIK .= $_POST['GetIK'];

		if ($NIS == "" || $KodeTP == "") {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Input Pelanggaran Gagal',
							text: 'Silahkan lengkapi seluruh data!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pelanggaran-siswa?$FilterUrlKIK');
					}, 2800);
				</script>
			";
		}
		else if ($InputCheck === 4) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Input Pelanggaran Gagal',
							text: 'Silahkan upload bukti pelanggaran!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pelanggaran-siswa?$FilterUrlKIK');
					}, 2800);
				</script>
			";
		}
		else if (!in_array($GetExtFile, $ValidExtension)) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Input Pelanggaran Gagal',
							text: 'Ekstensi dilarang. Silahkan upload file dengan ekstensi (JPG, JPEG, PNG)!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pelanggaran-siswa?$FilterUrlKIK');
					}, 2800);
				</script>
			";
		}
		else if ($FileSize > 4000000) {
			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Input Pelanggaran Gagal',
							text: 'Ukuran file melebihi batas maksimal (1 MB)!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('form-input-pelanggaran-siswa?$FilterUrlKIK');
					}, 2800);
				</script>
			";
		}
		else {
			move_uploaded_file($SourceIMG, $TransferLoc.$SetNewFileName);
			mysqli_query($CONN, "
				INSERT INTO histori_pelanggaran (
					KodeHIS,
					NIP,
					NIS,
					KodeTP,
					BuktiPelanggaran,
					TanggalKejadian,
					Pukul
				)
				VALUES (
					'$KodeHIS',
					'$NIP',
					'$NIS',
					'$KodeTP',
					'$SetNewFileName',
					'$TanggalKejadian',
					'$Pukul'
				)
			");

			echo "
				<style>.select-wrapper{display: none;}</style>
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Input Pelanggaran Berhasil',
							text: 'Data pelanggaran baru berhasil ditambahkan',
							icon: 'success',
							padding: '0px 0px 30px 0px',
							showConfirmButton: false
						});
					}, 40);
					window.setTimeout(function() {
						window.location.replace('data-histori-pelanggaran-siswa');
					}, 2800);
				</script>
			";
		}
	}
?>