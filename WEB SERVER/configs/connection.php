<?php
   $CONN = mysqli_connect("localhost", "root", "", "nilangsis");
   if (mysqli_connect_errno()) {
      echo "
         <style>body{background-color: #c62828;} div{display: none;}</style>
         <body>
            <script>
               setTimeout(function() {
                  Swal.fire({
                     title: 'Database Connection Error',
                     text: 'Silahkan periksa kembali koneksi database!',
                     icon: 'error',
                     padding: '0px 0px 30px 0px',
                     showConfirmButton: false
                  });
               }, 40);
            </script>
         </body>
      ";
   }
?>