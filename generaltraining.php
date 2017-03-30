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
                        		kategori = 14 AND status=1"
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
								<h1 >IELTS GENERAL TRAINING</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" >

							<p style="text-align: justify;">Tes ini secara umum bisa dikatakan lebih mudah dari IELTS Academic karena hanya bertujuan 
							untuk mengukur kemampuanmu berbahasa Inggris dalam konteks kehidupan sehari-hari, seperti 
							di lingkungan kerja atau interaksi sosial. Tes ini dikhususkan untuk mereka yang ingin 
							bekerja di negara yang menggunakan bahasa Inggris sebagai bahasa utama. 
							Selain sebagai standar kemampuan berbahasa Inggris, IELTS General Training juga bisa 
							digunakan sebagai kelengkapan administrasi bagi mereka yang akan mengurus imigrasi ke 
							negara-negara seperti Australia, New Zealand, Canada, atau UK. Skor yang dibutuhkan 
							tergantung dari kebijakan negara masing-masing.</p>

							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
						<p style="text-align: justify;">
							Pada IELTS General Training, tes reading dan writing lebih mudah daripada Academic. 
							Di bagian reading, kamu akan disediakan teks yang lebih pendek dan mudah dicerna. 
							Jenis teks yang disediakan biasanya berhubungan dengan dunia kerja dan kehidupan sehari-
							hari. Sementara itu di bagian writing kamu akan diminta menjelaskan kembali sebuah topik 
							yang biasanya tidak jauh dari kehidupan sehari-hari.</p>
							</div>
						</div><!-- row -->		
						<div class="row" style="padding-top:1%;">
							<div class="col-md-12 col-lg-12 col-sm-12" >
								<p style="text-align:justify">Tujuan dilakukannya tes IELTS adalah untuk mengetahui kemampuan berbahasa Inggris seseorang. 
								Orang-orang yang mengambil tes IELTS biasanya berencana untuk melanjutkan pendidikan atau 
								bekerja di negara yang menggunakan bahasa Inggris sebagai bahasa utama. 
								Namun dengan kurangnya informasi, masih banyak orang yang bingung apakah mereka harus 
								mengikuti tes IELTS Academic atau General Training. 
								Calon test-takers harus tau jenis IELTS apa yang akan mereka ambil agar bisa menyiapkan 
								diri untuk menghadapi tes. Untuk membuat kamu lebih jelas perbedaan dari kedua tes IELTS 
								ini, let’s check this out.</p>		

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