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
                        		kategori = 4 AND status=1"
);
$ambil->execute();
while($tampil=$ambil->fetch()){
	?>
			<div class="content-wrap" style="background-image: url('image/galeri1.jpg');backgorund-repeat:no-repeat;background-size:cover; padding:0;background-position:fixed;">
				<div  style="background: rgba(0,0,0,0.7); width:'100%'; height:'100%'; " >
				<div class="container clearfix">
					<div class="row clearfix" >
						
<!-- 
							<div class="heading-block topmargin">
 -->
							<!-- <img class="alignright wp-image-240 size-medium" src="image/galeri5.jpg" width="300" height="225" /> -->
							<center>
							<div class="heading-block"  >
								<h1 >Arabic</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" >

							<p style="text-align: justify;">Jika Anda ingin melakukan perjalanan ke negara-negara Timur Tengah serta ke benua Afrika, Anda 
mungkin ingin kemampuan untuk berkomunikasi secara verbal dengan warga. Anda mungkin bertanya-tanya
"Apa yang dimaksud dengan kursus bahasa dalam bahasa Arab?" Kursus bahasa asing dirancang untuk 
mengembangkan kemampuan dalam bahasa kedua yang spesifik. Kursus memperkenalkan pola berbicara dan
membantu siswa dengan keterampilan mendengarkan, membaca, dan menulis. Kesadaran budaya juga 
dipelajari, karena ini adalah bagian penting dari memahami seluk-beluk dan nuansa komunikasi 
bahasa Arab.</p>

							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
						<p style="text-align: justify;">Ada banyak manfaat dalam mengambil kursus bahasa dalam bahasa Arab.Dalam bisnis internasional, itu 
penting untuk dapat berkomunikasi secara efektif, dan lebih mahir dalam bahasa lain seseorang 
menjadi, semakin besar kekuatan yang dia punya untuk jaringan dengan orang lain di seluruh dunia. 
Menjadi multi-bahasa juga baik untuk stimulasi otak dan telah terbukti mengurangi kerusakan, 
demensia, dan penyakit Alzheimer. Mengetahui lebih dari satu bahasa dapat memberikan pelamar 
pekerjaan tepi ketika melamar beberapa posisi kerja.</p>
							</div>
						</div><!-- row -->			
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