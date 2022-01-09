<?php include 'components/starting-page.php'; include 'process/session-page.php'; ?>
<?php include 'components/navigation-bar.php'; ?>
<?php include 'components/side-bar.php'; ?>
<!-- BEGIN: Page Main-->
<div id="main">
   <div class="row">
      <div class="content-wrapper-before gradient-45deg-red-pink"></div>
      <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
         <!-- Search for small screen-->
         <div class="container animated fadeIn">
            <div class="row">
               <div class="col xl12 l12 m12 s12">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Surat Panggilan Orang Tua</span></h5>
                  <ol class="breadcrumbs mb-0">
                     <li class="breadcrumb-item">
                        <a href="dashboard">Dashboard</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a href="surat-panggilan">Surat Panggilan</a>
                     </li>
                     <li class="breadcrumb-item active">
                        Surat Panggilan Orang Tua
                     </li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="col xl12 l12 m12 s12">
         <div class="container animated fadeIn">
            <div class="section">
               <form action="print-surat-panggilan" method="POST" autocomplete="OFF" target="_blank">
                  <div class="card">
                     <div class="card-content">
                        <div class="container mt-1">
                           <div class="row">
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                              <div class="col xl10 l10 m10 s10 center">
                                 <div class="row">
                                    <div class="col xl3 l3 m3 s3">
                                       <img src="../../assets/images/logo/spadjer-logo.png" width="100%">
                                    </div>
                                    <div class="col xl9 l9 m9 s9">
                                       <h5 style="font-size: 24px;">PEMERINTAH DAERAH KABUPATEN BONDOWOSO</h5>
                                       <h5 style="font-size: 24px;">DINAS PENDIDIKAN BONDOWOSO</h5>
                                       <h5 style="font-size: 24px;">SMP NEGERI 1 PUJER</h5>
                                       <p>Jl.Mangli 70, Pujer, Kec. Pujer, Kab. Bondowoso, Jawa Timur 68271</p>
                                       <p>NPSN: 20521806 NSS : 201052213501</p>
                                       <p>Email: <a href="https://mail.google.com/" target="_blank">smpn1pujerbondowoso@gmail.com</a> Telp: 0332 7703174</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-1 mb-1">
                           <div class="row">
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                              <div class="col xl10 l10 m10 s10 center">
                                 <hr color="#777777">
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-1 mb-1">
                           <div class="row">
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                              <div class="col xl10 l10 m10 s10">
                                 <div class="row">
                                    <div class="col xl6 l6 m6 s6">
                                       <style>table, tr, td{border: none; padding: 4px;}</style>
                                       <table>
                                          <tr>
                                             <td>Nomor Surat</td>
                                             <td>:</td>
                                             <td>
                                                <input type="text" class="browser-default input-sp" name="NomorSurat" style="text-transform: uppercase;" required>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Lampiran</td>
                                             <td>:</td>
                                             <td>
                                                <input type="text" class="browser-default input-sp" name="Lampiran" oninput="this.value=this.value.replace(/[^a-zA-Z ]/, '')" maxlength="26" style="text-transform: capitalize;" required>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Perihal</td>
                                             <td>:</td>
                                             <td>
                                                <input type="text" class="browser-default input-sp" name="Perihal" oninput="this.value=this.value.replace(/[^a-zA-Z ]/, '')" maxlength="26" style="text-transform: capitalize;" required>
                                             </td>
                                          </tr>
                                       </table>
                                    </div>
                                    <div class="col xl6 l6 m6 s6">
                                       <table>
                                          <tr>
                                             <td class="right">Bondowoso, &nbsp;<input type="text" class="browser-default input-sp" value="<?php echo date("d-m-Y") ?>" name="Tanggal" readonly></td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-4 mb-1">
                           <div class="row">
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                              <div class="col xl10 l10 m10 s10">
                                 <div class="row">
                                    <div class="col xl7 l7 m7 s7">
                                       <table>
                                          <tr>
                                             <td colspan="3">Kepada Yth,</td>
                                          </tr>
                                          <tr>
                                             <td>Orang tua/wali dari</td>
                                             <td>:</td>
                                             <td>
                                                <input type="text" list="NamaSiswa" class="browser-default input-sp" name="NamaSiswa" oninput="this.value=this.value.replace(/[^a-zA-Z' ]/, '')" maxlength="40" style="text-transform: capitalize;" required>
                                                <datalist id="NamaSiswa">
                                                   <?php 
                                                      require '../../configs/connection.php';
                                                      $GetTableSiswa = mysqli_query($CONN, "SELECT NamaSW FROM siswa");
                                                      while ($GetDataSiswa = mysqli_fetch_array($GetTableSiswa)) {
                                                         echo "
                                                            <option value='$GetDataSiswa[NamaSW]'>$GetDataSiswa[NamaSW]</option>
                                                         ";
                                                      }
                                                   ?>
                                                </datalist>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td colspan="3">Di tempat</td>
                                          </tr>
                                       </table>
                                    </div>
                                    <div class="col xl5 l5 m5 s5">
                                       
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-4 mb-1">
                           <div class="row">
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                              <div class="col xl10 l10 m10 s10">
                                 <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                       <style>table.subtitle-table, tr, td{border: none;}</style>
                                       <table class="subtitle-table">
                                          <tr>
                                             <td style="text-align: justify;">
                                                <span>&emsp;&emsp;Sesuai dengan isi pokok surat di atas, maka bersamaan dengan ini kami mengundang kepada orang tua/wali murid dari <strong>Nama Siswa</strong> kiranya dapat hadir ke sekolah, bahwa siswa bapak/ibu telah melakukan tindakan pelanggaran berat Dengan demikian, melalui surat ini kami harap orang tua/wali murid dari <strong>Nama Siswa</strong> dapat hadir ke sekolah pada.</span>
                                             </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-1 mb-1">
                           <div class="row">
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                              <div class="col xl10 l10 m10 s10">
                                 <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                       <style>table.subtitle-table, tr, td{border: none;}</style>
                                       <table class="subtitle-table">
                                          <tr>
                                             <td></td>
                                             <td width="16%">Hari, Tanggal</td>
                                             <td>:</td>
                                             <td><input type="date" class="browser-default input-sp" name="TanggalPertemuan" required></td>
                                          </tr>
                                          <tr>
                                             <td></td>
                                             <td>Pukul</td>
                                             <td>:</td>
                                             <td><input type="text" class="browser-default input-sp" name="PukulPertemuan" oninput="this.value=this.value.replace(/[^0-9.:]/, '')" maxlength="5" required></td>
                                          </tr>
                                          <tr>
                                             <td></td>
                                             <td>Tempat</td>
                                             <td>:</td>
                                             <td><input type="text" class="browser-default input-sp" name="TempatPertemuan" style="text-transform: capitalize;" required></td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-4 mb-1">
                           <div class="row">
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                              <div class="col xl10 l10 m10 s10">
                                 <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                       <style>table.subtitle-table, tr, td{border: none;}</style>
                                       <table class="subtitle-table">
                                          <tr>
                                             <td style="text-align: justify;">
                                                <span>&emsp;&emsp;Mengingat sangat pentingnya hal ini,dimohon pengertian untuk kehadiran bapak/ibu wali dari Nama Siswa. Demikian surat pemberitahuan ini kami buat. Terimakasih atas perhatian serta mohon kerjasamanya. Terimakasih.</span>
                                             </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-4 mb-1">
                           <div class="row">
                              <div class="col xl8 l8 m8 s8">
                                 
                              </div>
                              <div class="col xl3 l3 m3 s3">
                                 <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                       <style>table.subtitle-table, tr, td{border: none;}</style>
                                       <table class="subtitle-table">
                                          <tr>
                                             <td class="center pb-10">
                                                <span>
                                                   Guru Bimbingan Konseling
                                                </span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="center pt-10">
                                                
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="center pt-10">
                                                <span>
                                                   Putri Cahyani, S.Kom.
                                                </span>
                                                <small>NIP:100278763284286424</small>
                                             </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col xl1 l1 m1 s1">
                                 
                              </div>
                           </div>
                        </div>
                        <div class="container mt-3 mb-1">
                           <div class="row">
                              <div class="col xl12 l12 m12 s12">
                                 <button class="btn wafes-effect wafes-light blue right"><i class='material-icons left'>print</i>Print PDF</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="content-overlay"></div>
      </div>
   </div>
</div>
<!-- END: Page Main-->
<?php include 'components/footer.php'; ?>
<?php include 'components/closing-page.php'; ?>