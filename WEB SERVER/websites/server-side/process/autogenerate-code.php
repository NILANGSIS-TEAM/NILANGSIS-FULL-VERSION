<?php
   // Auto generate code for Kode Identitas Kelas
	function GenerateCodeIK() {
		require '../../configs/connection.php';
		$GetTableIK = mysqli_query($CONN, "SELECT MAX(KodeIK) AS MaxKodeIK FROM identitas_kelas");
		$GetKodeIK = mysqli_fetch_array($GetTableIK);
		$GetMaxValue = $GetKodeIK['MaxKodeIK'];
		$SetNumberKodeIK = (int) substr($GetMaxValue, 2);
		$SetNumberKodeIK++;
		$SetCharKodeIK = "IK";
		$GenerateKodeIK = $SetCharKodeIK . sprintf("%02s", $SetNumberKodeIK);
		echo $GenerateKodeIK;
	}
	
   // Auto generate code for Kode Jabatan
	function GenerateCodeJabatan() {
		require '../../configs/connection.php';
		$GetTableJabatan = mysqli_query($CONN, "SELECT MAX(KodeJBT) AS MaxKodeJBT FROM jabatan");
		$GetKodeJabatan = mysqli_fetch_array($GetTableJabatan);
		$GetMaxValue = $GetKodeJabatan['MaxKodeJBT'];
		$SetNumberKodeJabatan = (int) substr($GetMaxValue, 3);
		$SetNumberKodeJabatan++;
		$SetCharKodeJabatan = "JBT";
		$GenerateKodeJabatan = $SetCharKodeJabatan . sprintf("%02s", $SetNumberKodeJabatan);
		echo $GenerateKodeJabatan;
	}

   // Auto generate code for Kode User
	function GenerateCodeUSR() {
		require '../../configs/connection.php';
		$GetTableUSR = mysqli_query($CONN, "SELECT MAX(KodeUSR) AS MaxKodeUSR FROM users");
		$GetKodeUSR = mysqli_fetch_array($GetTableUSR);
		$GetMaxValue = $GetKodeUSR['MaxKodeUSR'];
		$SetNumberKodeUSR = (int) substr($GetMaxValue, 3);
		$SetNumberKodeUSR++;
		$SetCharKodeUSR = "USR";
		$GenerateKodeUSR = $SetCharKodeUSR . sprintf("%02s", $SetNumberKodeUSR);
		echo $GenerateKodeUSR;
	}
	
   // Auto generate code for Kode Tipe Pelanggaran
	function GenerateCodeTP() {
		require '../../configs/connection.php';
		$GetTableTP = mysqli_query($CONN, "SELECT MAX(KodeTP) AS MaxKodeTP FROM tipe_pelanggaran");
		$GetKodeTP = mysqli_fetch_array($GetTableTP);
		$GetMaxValue = $GetKodeTP['MaxKodeTP'];
		$SetNumberKodeTP = (int) substr($GetMaxValue, 2);
		$SetNumberKodeTP++;
		$SetCharKodeTP = "TP";
		$GenerateKodeTP = $SetCharKodeTP . sprintf("%02s", $SetNumberKodeTP);
		echo $GenerateKodeTP;
	}
	
   // Auto generate code for Kode Histori Pelanggaran
	function GenerateCodeHIS() {
		require '../../configs/connection.php';
		$GetTableHIS = mysqli_query($CONN, "SELECT MAX(KodeHIS) AS MaxKodeHIS FROM histori_pelanggaran");
		$GetKodeHIS = mysqli_fetch_array($GetTableHIS);
		$GetMaxValue = $GetKodeHIS['MaxKodeHIS'];
		$SetNumberKodeHIS = (int) substr($GetMaxValue, 3);
		$SetNumberKodeHIS++;
		$SetCharKodeHIS = "HIS";
		$GenerateKodeHIS = $SetCharKodeHIS . sprintf("%04s", $SetNumberKodeHIS);
		echo $GenerateKodeHIS;
	}
?>