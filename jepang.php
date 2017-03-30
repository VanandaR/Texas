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
                        		kategori = 21 AND status=1"
);
$ambil->execute();
while($tampil=$ambil->fetch()){
	?>
			<div class="content-wrap" style="background-image: url('image/english_for_children/3.jpg');backgorund-repeat:no-repeat;background-size:cover; padding:0;background-position:fixed;">
				<div  style="background: rgba(0,0,0,0.7); width:'100%'; height:'100%'; " >
				<div class="container clearfix">
					<div class="row clearfix" >
						
<!-- 
							<div class="heading-block topmargin">
 -->
							<!-- <img class="alignright wp-image-240 size-medium" src="image/galeri5.jpg" width="300" height="225" /> -->
							<center>
							<div class="heading-block"  >
								<h1 >Bahasa Jepang</h1>
							</div>
							</center>
			<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" >
								
							<p style="text-align: justify">Bahasa Jepang sendiri punya banyak keunikan dibanding bahasa asing lainnya. Salah satunya bahasa 
Jepang memiliki perbedaan penggunaan tata bahasa dalam beberapa kondisi. Misalnya, ada perbedaan 
penggunaan bahasa untuk anak-anak dan bahasa untuk orang dewasa.</p>
							</div>

							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">

<p style="text-align: justify">Ditambah lagi terbukanya kesempatan untuk mengenyam pendidikan maupun bekerja di perusahaan Jepang 
menjadikan pertimbangan tersendiri untuk belajar Bahasa Jepang. 
Beberapa beasiswa seperti ‘Monbukagakusho‘, dimana siswa mendapatkan uang saku dan uang kuliah 
selama belajar di Jepang mampu menarik minat siswa.</p>
						</div>
							</div>
						<div class="row" style="padding-top:1%;">
							<div class="col-md-12 col-lg-12 col-sm-12" >
								<p style="text-align:justify">Mempelajari bahasa Jepang memang tidak ada ruginya. Bagi calon peserta yang berminat belajar melalui 
program kursus atau les privat Bahasa Jepang, kami juga dapat memfasilitasi dengan pengajar dan 
materi-materi pengajaran yang mudah dipahami. Beberapa materi yang diajarkan antara lain Moji 
(menulis), Bunpo (tata bahasa Jepang), Goi (Perbendaharaan kata), Choukai (mendengarkan) dan 
Kaiwa (berbicara).</p>
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