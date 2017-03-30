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
                        		kategori = 16 AND status=1"
);
$ambil->execute();
while($tampil=$ambil->fetch()){
	?>
			<div class="content-wrap" style="background-image: url('<?php echo $url.'gambarbackground/'.$tampil['gambar_background']; ?>');backgorund-repeat:no-repeat;background-size:cover; padding:0;background-position:fixed;">
				<div  style="background: rgba(0,0,0,0.7); width:'100%'; height:'100%'; " >
				<div class="container clearfix">
					<div class="row clearfix" >

<!--
							<div class="heading-block topmargin">
 -->
							<!-- <img class="alignright wp-image-240 size-medium" src="image/galeri5.jpg" width="300" height="225" /> -->
							<center>
							<div class="heading-block"  >
								<h1 >TOEIC</h1>
							</div>
							</center>
<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >

							<p style="text-align: justify;">TOEIC adalah singkatan dari Test of English for International Communication. TOEIC digunakan
							untuk mengukur kemampuan bahasa Inggris penutur non-bahasa Inggris dalam penggunaan bahasa
							Inggris sehari-hari di lingkungan kerja internasional.</p>
							<p style="text-align: justify;">
									ETS (Educational Testing Service) mengambangkan tes TOEIC untuk mengukur kemampuan bahasa
									Inggris dalam lingkungan bisnis yang digunakan secara internasional. Figur utama pencetus
									tes TOEIC ini adalah seseorang berkebangsaan Jepang, Yasuo Kitoka. Pada tahun 1970, Kitoka
									mengusulkan kepada ETS untuk membuat soal tes berbasis bisnis bagi para pekerja Jepang
									yang bekerja di perusahaan internasional. ETS mulai mengembangkan tes TOEIC pada tahun 1977
									dan tes TOEIC pertama kali dilakukan di Jepang pada tahun 1979.</p>
							<center>
								<h3><b>Bentuk Test</b></h3>
							</center>
							<p style="text-align: justify;">
									Tesnya menggunakan kertas dan pensil, bentuk soalnya pilihan ganda, yang menggunakan audio,
									gambar, dan tulisan (bacaan) untuk mengevaluasi kemampuan bahasa peserta.Tes ini berbentuk
									pilihan ganda dengan jumlah soal sebanyak 200 butir. Jenis TOEIC ini memiliki kisaran
									skor mulai dari 10-900.</p>
									<p style="text-align: justify;">
									Tes ini terbagi menjadi 2 seksi, seksi 1: listening dan seksi 2: reading.</p>
							</div>
						</div><!-- row -->
<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
							<center>
								<h3><b>Seksi 1 : Listening</b></h3>
							</center>
						<p style="text-align: justify;">
							Akan diperdengarkan sejumlah pertanyaan dan percakapan singkat dalam bahasa inggris, dan
							peserta diminta menjawab berdasarkan informasi yang didengar.</br>

								Part 1: Gambar (Photographs) terdiri dari 20 soal.</br>
								Part 2: Pertanyaan – respon (Question and Responses) terdiri dari 30 soal.</br>
								Part 3: Percakapan ringkas (Short Conversations) terdiri dari 30 soal.</br>
								Part 4: Dialog singkat (Short Talks) terdiri dari 20 soal.</p>
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
							<center>
								<h3><b>Seksi 2 : Reading</b></h3>
							</center>
						<p style="text-align: justify;">

							Peserta akan membaca berbagai material dan diminta menjawab pertanyaan berdasarkan
							isi bacaan.</br>

							Part 5: Kalimat tidak sempurna (Incomplet Sentences) teridiri dari 40 soal.</br>
							Part 6: Mencari kesalahan kalimat (Error Recognitions) terdiri dari 20 soal.</br>
							Part 7: Membaca (Reading Comprehensions) terdiri dari 40 soal.</p>
							</div>
						</div>
						<div class="row" style="padding-top:1%;">
							<div class="col-md-12 col-lg-12 col-sm-12" >
								<center>
								<h3><b>Durasi Waktu</b></h3>
							</center>
								<p style="text-align:justify">Waktu tes adalah 2½ jam, dengan perincian:</br>

Seksi 1: 45 menit</br>
Seksi 2: 75 menit</br>
Waktu ini mencakup waktu untuk mengisi beberapa form terkait dengan test..</p>

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