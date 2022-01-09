<?php
	require '../../configs/connection.php';
	session_start();
	error_reporting(0);
	
	if (isset($_POST['btn-login'])) {
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

      $GetTable = mysqli_query($CONN, "SELECT * FROM users WHERE Username = '$Username'");
      $GetData = mysqli_fetch_array($GetTable);
		
		if ($Username == "" && $Password == "") {
			echo "
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Login',
							text: 'Mohon lengkapi username dan password!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
							timer: 2800
						});
					},40);
				</script>
			";
		}

		else if ($Username == "") {
			echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Gagal Login',
							text: 'Username tidak boleh kosong!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
							timer: 2800
						});
					},40);
				</script>
			";
		}

		else if ($Password == "") {
			echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Gagal Login',
							text: 'Password tidak boleh kosong!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
							timer: 2800
						});
					},40);
				</script>
			";
		}

      else if ($Username == $GetData['Username'] && password_verify($Password, $GetData['Password'])) {
         if ($GetData['KodeLU'] == "LU01") {
            $_SESSION['Username'] = $Username;
            $_SESSION['Password'] = $Password;
            $_SESSION['NIP'] = $GetData['NIP'];
            $_SESSION['KodeUSR'] = $GetData['KodeUSR'];

            echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil Login',
                        text: 'Selamat datang, $Username',
                        icon: 'success',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false
                     });
                  },40);  
                  window.setTimeout(function(){ 
                     window.location.replace('dashboard');
                  },2800);
               </script>
            ";
         }

         else {
            echo "
               <style> div {display: none;} </style>
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Error 403: Forbidden',
                        text: 'Anda tidak memiliki akses server!',
                        icon: 'error',
                        padding: '0px 0px 30px 0px',
                        showConfirmButton: false
                     });
                  },40);  
                  window.setTimeout(function(){ 
                     window.location.replace('user-login');
                  },3200);
               </script>
            ";
         }
      }
		
		else {
			echo "
				<script>
					setTimeout(function() {
						Swal.fire({
							title: 'Gagal Login',
							text: 'Username atau password tidak terdaftar!',
							icon: 'error',
							padding: '0px 0px 30px 0px',
                     showConfirmButton: false,
							timer: 2800
						});
					},40);
				</script>
			";
		}
	}
?>