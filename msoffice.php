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
                        		kategori = 17 AND status=1"
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
								<h1 >Microsoft Office</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >

							<p style="text-align: justify;">Microsoft Office merupakan paket aplikasi produktifitas perkantoran yang di buat oleh vendor software Microsoft yang dirancang untuk tingkat kondisi atau kebutuhan yang berbeda-beda dan tingkat flexibilitas yang tinggi.
							Program Microsoft Office ini telah menjadi standar program dasar untuk perkantoran, bisnis dan pendidikan.</p>
							<p style="text-align: justify;">
									Pelatihan Microsoft Office ini bertujuan untuk memberikan pengetahuan kepada peserta tentang Microsof Office serta penggunaannya sebagai alat bantu di lingkungan kerja / sebagai media untuk mempermudah proses pengerjaan tugas sehari-hari sehingga dari pengetahuan-pengetahuan yang telah di peroleh tersebut para peserta pelatihan microsoft office ini mampu menggunakanna unuk mengerjakan tugas seperti membuat dan mengolah dokuman, pembuatan laporan pembukuan, laporan keuangan serta analisa statistik, database serta slide presentasi multimedia.
</p>
							</div>
						</div><!-- row -->		
<div class="row">
							<div class="col-md-4 col-lg-4 col-sm-4" style="padding-left:1%; padding-right:1%;">
							<center>
								<h4><b>MS. Word</b></h4>
							</center>
						<p style="text-align: justify;">
							1. Introduction MS Word</br>
2. Modification Document</br>
3. Process Document</br>
4. Work with Mail Merge</p>
							</div>
							<div class="col-md-4 col-lg-4 col-sm-4" style="padding-left:1%; padding-right:1%;">
							<center>
								<h4><b>MS. Excel</b></h4>
							</center>
						<p style="text-align: justify;">
							
1. Introduction MS. Excel</br>
2. Process DataSel</br>
3. Process Data and Tabel</br>
4. Control and Analysis Data</br>
5. Analysis Data with Control Table</br>
6. Colaborate and Otomation Data</p>
							</div>
							<div class="col-md-4 col-lg-4 col-sm-4" style="padding-left:1%; padding-right:1%;">
							<center>
								<h4><b>MS. Power Point</b></h4>
							</center>
						<p style="text-align: justify;">
							1. Introduction MS. Power Point</br>
2. Build Visual Content</br>
3. Building Tabel, Grafik, Media and Hyperlink</br>
4. Design Theme and Prepare Presentation</p>
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