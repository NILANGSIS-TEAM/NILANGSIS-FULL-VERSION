<?php
	session_start();
	error_reporting(0);
	if (!isset($_SESSION['Username'])) {
?>
	<style>
		#main, .select-wrapper, .page-topbar, .sidenav-main, .page-footer, .toast, button {display: none;}
	</style>
	<script>
		setTimeout(function() {
			Swal.fire({
				title: 'Error 403: Forbidden',
				text: 'Silahkan login terlebih dahulu!',
				icon: 'error',
				padding: '0px 0px 30px 0px',
				showConfirmButton: false
			});
		}, 40);
		window.setTimeout(function() {
			window.location.replace('user-login');
		}, 3200);
	</script>
<?php
	}
?>