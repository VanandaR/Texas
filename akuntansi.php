<?php include "header.php";?>
		<!-- Content
		============================================= -->
		<section id="content"style="padding:0">
			<?php
			$ambil=$koneksi->prepare("
							SELECT
                        		*
                    		FROM
                        		konten
                    		WHERE
                        		kategori = 20 AND status=1"
			);
			$ambil->execute();
			while($tampil=$ambil->fetch()){
				?>
			<div class="content-wrap" style="background-image: url('image/english_for_adult/1.jpg');backgorund-repeat:no-repeat;background-size:cover; padding:0;background-position:fixed;">
				<div  style="background: rgba(0,0,0,0.7); width:'100%'; height:'100%'; " >
				<div class="container clearfix">
					<div class="row clearfix" >
						
<!-- 
							<div class="heading-block topmargin">
 -->
							<!-- <img class="alignright wp-image-240 size-medium" src="image/galeri5.jpg" width="300" height="225" /> -->
							<center>
							<div class="heading-block"  >
								<h1 >Komputer Akuntansi</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >

							<p style="text-align: justify;">Sistem Aplikasi Akutansi / Accounting Application System adalah sistem akutansi berbasis komputerisasi untuk bisnis skala menengah yang dapat menampung transaksi lebih dari satu milyard rupiah.
disamping itu dapat menangani beberapa jenis pajak yang sesuai dengan kondisi perpajakan di Indonesia, seperti PPN.
							</p>
							<p style="text-align: justify">
Sistem Aplikasi Akunting MYOB dapat memudahkan dalam pembuatan laporan keuangan dan juga mudah digunakan, serta mempunyai tngkat keamanan yang cukup valid untuk setiap user.</p>

							</div>
						</div><!-- row -->		
<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
						<p style="text-align: justify;">
						Materi Pelatihan :</br>

1. Introduction and Operation</br>
2. Setup ( Setup Preference, Setup Linked Account, Setup Balanced)</br>
3. Account</br>
4. Card File</br>
5. Banking (Spend Money, Receive Money, Reconcile Money)</br>
6. Journals</br>
7. Purchase and Sales</br>
8. Enter Purchase and Sales</br>
9. Paybills</br>
10. Receive Payments</br>
11. Inventory (Item Register, Adjust Inventory)</br>
12. Time Billing</br>
13. Payroll</br>
14. Command Panel
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
						<p style="text-align: justify;">
Kursus Sistem Akuntansi ini mempelajari :</br>
1. Pengenalan Sistem Aplikasi Akutansi</br>
2. Membuat Jurnal Transaksi</br>
3. Merancang Pelaporan Keuangan</br>
4. Melakukan Analisis Laporan Keuangan
							</div>
							
						</div>
						<div class="row" style="padding-top:1%;">
							<div class="col-md-12 col-lg-12 col-sm-12" >
								<center>
<blockquote><p><span style="color: red;"><strong><u>Mari bergabung bersama TEXAS dan meraih mimpi anda</u></strong></span></p></blockquote>
</center>
</div>
							</div><!--row-->				
						
							</div>
							
							</div>
							
						</div>

					</div>
				</div>

				

				

				
			</div>
			<?php } ?>
		</section><!-- #content end -->
<?php include "footer.php";?>