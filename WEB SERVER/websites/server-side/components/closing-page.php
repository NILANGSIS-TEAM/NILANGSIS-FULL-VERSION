   <!-- BEGIN VENDOR JS-->
   <script src="../../assets/js/vendors.min.js"></script>
   <!-- BEGIN VENDOR JS-->
   <!-- BEGIN PAGE VENDOR JS-->
   <script src="../../assets/vendors/chartjs/chart.min.js"></script>
   <script src="../../assets/vendors/chartist-js/chartist.min.js"></script>
   <script src="../../assets/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
   <script src="../../assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
   <!-- END PAGE VENDOR JS-->
   <script src="../../assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
   <script src="../../assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
   <script src="../../assets/vendors/data-tables/js/dataTables.select.min.js"></script>
   <script src="../../assets/vendors/dropify/js/dropify.min.js"></script>
   <!-- BEGIN THEME  JS-->
   <script src="../../assets/js/plugins.min.js"></script>
   <script src="../../assets/js/search.min.js"></script>
   <script src="../../assets/js/custom/custom-script.min.js"></script>
   <script src="../../assets/js/scripts/customizer.min.js"></script>
   <!-- END THEME  JS-->
   <script src="../../assets/vendors/sparkline/jquery.sparkline.min.js"></script>
   <script src="../../assets/js/scripts/charts-sparklines.min.js"></script>
   <script src="../../assets/js/scripts/form-file-uploads.min.js"></script>
   <!-- BEGIN PAGE LEVEL JS-->
   <script src="../../assets/js/scripts/dashboard-modern.js"></script>
   <script src="../../assets/js/scripts/data-tables.min.js"></script>
   <script src="../../assets/vendors/alerts/sweetalert2.all.min.js"></script>
   <script src="../../assets/js/scripts/intro.min.js"></script>
   <!-- END PAGE LEVEL JS-->
   <script>
      var button = document.querySelector('#btn-logout');
      button.onclick = function() {
         Swal.fire({
            title: 'Konfirmasi Logout',
            text: "Apakah Anda yakin ingin mengakhiri sesi login?",
            icon: 'question',
            padding: '0px 0px 30px 0px',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Logout!'
         }).then((result) => {
            if (result.isConfirmed) {
               document.location.href = 'process/go-logout';
            }
         })
      }
      var button = document.querySelector('#side-logout');
      button.onclick = function() {
         Swal.fire({
            title: 'Konfirmasi Logout',
            text: "Apakah Anda yakin ingin mengakhiri sesi login?",
            icon: 'question',
            padding: '0px 0px 30px 0px',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Logout!'
         }).then((result) => {
            if (result.isConfirmed) {
               document.location.href = 'process/go-logout';
            }
         })
      }
   </script>
   </body>
</html>