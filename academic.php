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
                        		kategori = 15 AND status=1"
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
								<h1 >IELTS Academic</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" >

							<p style="text-align: justify;">Tes ini khusus untuk mereka yang ingin melanjutkan pendidikan ke negara yang menggunakan 
							bahasa Inggris sebagai bahasa utama dan bahasa pengantar dalam proses belajar-mengajar. 
							Untuk melanjutkan pendidikan ke jenjang universitas atau kursus singkat di luar negeri, 
							calon siswa diwajibkan untuk mengambil tes IELTS Academic sebagai salah satu syarat kelengkapan 
							administrasi. Biasanya skor IELTS yang dibutuhkan berkisar antara 5.5 sampai 6.5 tergantung
							dari jurusan yang dicari. Bahkan beberapa institusi meminta skor IELTS 7 sebagai persyaratannya.</p>

							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
						<p style="text-align: justify;">
							Yang membedakan IELTS Academic dan General Training hanya pada bagian reading dan writing. 
							Pada bagian reading, akan berisi teks yang kompleks dan menantang serta pertanyaan-pertanyaan 
							yang cukup memusingkan jika kamu tidak mempersiapkan diri dengan baik. 
							Sedangkan di bagian writing, kamu akan disediakan grafik dan kemampuan menulismu akan dianalisa 
							dari caramu menjelaskan isi dari grafik itu dengan membuat tulisan singkat, sebagai contoh, 
							tidak lebih dari 250 kata.</p>
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