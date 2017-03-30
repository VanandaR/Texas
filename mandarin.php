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
                        		kategori = 23 AND status=1"
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
								<h1 >Bahasa Mandarin</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >

							<p style="text-align: justify;">Bahasa Mandarin adalah salah satu bahasa dengan jumlah pemakai terbesar di dunia. Mengapa belajar 
Bahasa Mandarin sudah menjadi keharusan untuk anak-anak kita? Hingga tahun 2010, pemakai Bahasa 
Mandarin sudah mencapai 960 juta jiwa yang tersebar di banyak wilayah di dunia. Banyaknya pemakai 
Bahasa Mandarin yang bahkan melebihi Bahasa Inggris membuat pamor Bahasa Mandarin semakin tinggi.

							</p>
						</div>
							<div class="col-md-6 col-lg-6 col-sm-6" >

							<p style="text-align: justify">
Belajar Bahasa Mandarin bukan perkara membaca buku atau ikut les Mandarin lalu semua selesai. 
Jika Anda ingin mempelajari Bahasa Mandarin dengan sungguh-sungguh, setidaknya persiapan matang 
perlu dilakukan. Persiapan sebelum belajar Bahasa Mandarin terdiri dari kesanggupan dan dedikasi 
tinggi untuk mempelajari bahasa yang tergolong sangat susah ini, memiliki target jangka pendek atau
jangka panjang, dan yang terakhir memiliki tujuan.</p>

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