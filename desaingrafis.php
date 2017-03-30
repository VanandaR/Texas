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
                        		kategori = 18 AND status=1"
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
								<h1 >Desain Grafis</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >

							<p style="text-align: justify;">Design Grafis merupakan seni dalam berkomunikasi menggunakan tulisan, ruang, dan gambar.
bidang ini merupakan bagian dari komunikasi visual. Design Grafis berasal dari 2 buah kata yaitu Desain dan Grafis, kata desain berarti proses atau perbuatan dengan mengatur segala sesuatu sebelum bertindak atau merancang.
sedangkan grafis adalah titik atau garis yang berhubungan dengan cetak mencetak.
							</p>
							<p style="text-align: justify">
dengan semakin dibutuhkan keahlian pada bidang desain grafis ini, baik mahasiswa, pelajar ataupun pelamar kerja berbondong-bondong mulai mengikuti kegiatan kursus desain grafis. karena dengan mengikuti program kursus ini kita dapat belajar lebih cepat karena di bimbing dan di ajarkan bagaimana mengaplikasikan aplikasi untuk desain grafis seperti Corel Draw dan Photoshop selain itu,
dengan mengikuti kegiatan kursus kita dapat menambah keahlian yang mungkin berguna untuk masa depan serta dapat meningkatkan SDM pada bidang desain grafis.</p>

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