<title>NILANGSIS | LOGOUT</title>
<link rel="stylesheet" type="text/css" href="../../../assets/css/themes/vertical-modern-menu-template/style.min.css">
<?php
	session_start();
	session_destroy();
?>
<script src="../../../assets/vendors/alerts/sweetalert2.all.min.js"></script>
<script>
	setTimeout(function() {
		Swal.fire({
			title: 'Berhasil Logout',
			text: 'Sesi login Anda telah berakhir',
			icon: 'success',
			padding: '0px 0px 30px 0px',
			showConfirmButton: false
		});
	}, 40);
	window.setTimeout(function() {
		window.location.replace('../redirect');
	}, 3200);
</script>