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
                        		kategori = 25 AND status=1"
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
								<h1 >Bahasa Jerman</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" >

							<p style="text-align: justify;">Apakah Anda ingin belajar bahasa Perancis dari dasar, atau ingin meningkatkan kemampuan berbahasa 
Perancis Anda? Texas English Course menawarkan pola pembelajaran di kelas secara berkelompok, atau 
dengan model les privat yang waktu dan tempatnya lebih fleksibel, serta in-house training sesuai 
permintaan perusahaan atau lembaga. Bersama kami, Anda dapat belajar Bahasa Perancis dengan biaya 
terjangkau, mudah, dan terstruktur.
							</p>
						</div>
							<div class="col-md-6 col-lg-6 col-sm-6" >
								<p style="text-align: justify;">Peluang bekerja, studi, dan mendapatkan beasiswa di Perancis masih terbuka lebar. Di samping itu, 
bahasa Perancis juga memiliki fungsi strategis secara internasional karena dipakai sebagai bahasa 
resmi di lebih dari 70 negara di 5 benua, juga menjadi bahasa resmi di berbagai lembaga internasional 
seperti PBB, Uni Eropa, NATO, Palang Merah Internasional, dan lain-lain. Selain itu, bahasa dari 
rumpun Indo-Eropa tersebut juga banyak dipelajari di negara-negara berbahasa Inggris.

							</p>
						</div>
</div><!-- row -->	
						<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >
							<p style="text-align: justify">
Mempelajari bahasa Perancis juga makin menarik karena ia adalah bahasa budaya. Bahasa Prancis 
adalah bahasa dunia untuk bidang filsafat kontemporer, seni visual, teatrikal, tari, arsitektural, 
kuliner dan fashion. Ia juga merupakan jembatan untuk memudahkan Anda mempelajari bahasa latin 
Indo-Eropa lainnya seperti Spanyol, Portugal, Italia, dan Rumania. Mengenal bahasa Perancis 
memperluas akses untuk mendalami kebudayaan Barat.</p>
							<p style="text-align: justify">
								Apakah Anda tertarik belajar Bahasa Perancis? 
Bergabunglah bersama kami untuk menggapai cita-cita Anda.
</p>
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