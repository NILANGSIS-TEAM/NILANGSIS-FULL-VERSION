<title>NILANGSIS ERROR | 500 INTERNAL SERVER ERROR</title>
<link rel="stylesheet" type="text/css" href="../../assets/css/themes/vertical-modern-menu-template/style.min.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/custom/not-found.css">
<!--dust particel-->
<div>
   <div class="starsec"></div>
   <div class="starthird"></div>
   <div class="starfourth"></div>
   <div class="starfifth"></div>
</div>
<!--Dust particle end--->
<section class="error">
   <!-- Content -->
   <div class="error__content">
      <div class="error__message message">
         <h1 class="message__title">Internal Server Error</h1>
         <p class="message__text">Error page 500, telah terjadi kesalahan. Silahkan tekan tombol kembali untuk beralih ke halaman utama.</p>
         <p class="message__text">
            <a href="user-login" style="color: #e57373; font-weight: bolder;">- Kembali -</a>
         </p>
      </div>
   </div>
   <!-- END Content -->
</section>
<script src="../../assets/vendors/alerts/sweetalert2.all.min.js"></script>
<script>
   setTimeout(function() {
      Swal.fire({
         title: 'Error 500: Internal Server Error',
         text: 'Telah terjadi kesalahan!',
         icon: 'error',
         padding: '0px 0px 30px 0px',
         showConfirmButton: false,
         timer: 3200,
      });
   }, 40);
</script>