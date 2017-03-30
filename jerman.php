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
                        		kategori = 24 AND status=1"
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
							<div class="col-md-12 col-lg-12 col-sm-12" >

							<p style="text-align: justify;">Apakah Anda tahu bahwa negara-negara di Eropa menggunakan bahasa Jerman sebagai bahasa kedua 
setelah bahasa negaranya sendiri dalam memakai rambu-rambu atau petunjuk jalan? Mengapa bukan 
bahasa Inggris yang mereka pakai?
							</p>
								<p style="text-align: justify;">Bahasa Jerman merupakan bahasa yang dipakai di Jerman, Austria, dan Lichtenstein, merupakan 
salah satu bahasa resmi di Swiss dan Luxemburg, dan dipakai sehari-hari di sebagian Belgia dan 
sebagian Italia. Bahasa Jerman merupakan rumpun bahasa yang sangat dekat dengan bahasa Belanda 
dan bahasa Inggris. Mempelajari bahasa Jerman akan mempermudah Anda mendapatkan peluang bekerja 
dan mendapatkan beasiswa dari negara tersebut, dimana hampir 100 persen universitas-universitas 
di sana tidak menarik biaya alias gratis untuk perkuliahannya.
							</p>
							<center>
								<h5><b>PILIHAN PAKET LES PRIVAT dan KURSUS KOLEKTIF BAHASA JERMAN :</b></h5>
							</center>

						</div>
							
						</div><!-- row -->	
						<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >
									<h4><b>Deutsch als Fremdsprache (Bahasa Jerman sebagai bahasa asing)</b></h4>
							<p style="text-align: justify">
Anfänger 1 (A1) :</br>
materi dasar-pemula A1 = 32 kali pertemuan (pemula 1, tingkatan A1 sesuai dengan referensi Eropa). 
Ada 4 kemampuan berbahasa yang dipelajari, yaitu: Hörverstehen (kemampuan mendengar), Mündlicher 
Ausdruck (kemampuan berbicara), Leseverstehen (kemampuan membaca) dan Schriftlicher Ausdruck 
(kemampuan menulis).</p>
							<p style="text-align: justify">
								Catatan: Sertifikat A1 merupakan prasyarat minimal untuk Anda bisa mengajukan izin tinggal dalam 
jangka waktu lama (lebih dari 90 hari) baik untuk studi, bekerja, menikah, maupun peserta program 
Au-Pair.
</p>
							<p style="text-align: justify">
	Anfänger 2 (A2) :</br>
materi dasar-lanjutan A2 = 32 kali pertemuan (pemula 2, tingkatan A2 sesuai dengan referensi Eropa)
Ada 4 kemampuan berbahasa yang dipelajari, yaitu: Hörverstehen (kemampuan mendengar), Mündlicher 
Ausdruck (kemampuan berbicara), Leseverstehen (kemampuan membaca) dan Schriftlicher Ausdruck 
(kemampuan menulis).
</p>							
<p style="text-align: justify">
Fortgeschrittene 1 (B1) :</br>
materi menengah-dasar B1 = 48 kali pertemuan (lanjutan 1, tingkatan B1 sesuai dengan referensi 
Eropa). Ada 4 kemampuan berbahasa yang dipelajari, yaitu: Hörverstehen (kemampuan mendengar), 
Mündlicher Ausdruck (kemampuan berbicara), Leseverstehen (kemampuan membaca) dan Schriftlicher 
Ausdruck (kemampuan menulis).
</p>
<p style="text-align: justify">
Catatan: Sertifikat B1 disyaratan untuk dapat diterima melanjutkan studi di beberapa kampus di 
Jerman atau masuk ke Studienkolleg.
</p>
<p style="text-align: justify">
Fortgeschrittene 2 (B2) :</br>
materi menengah-lanjutan B2 = 48 kali pertemuan (lanjutan 1, tingkatan B1 sesuai dengan referensi 
Eropa). Ada 4 kemampuan berbahasa yang dipelajari, yaitu: Hörverstehen (kemampuan mendengar), 
Mündlicher Ausdruck (kemampuan berbicara), Leseverstehen (kemampuan membaca) dan Schriftlicher 
Ausdruck (kemampuan menulis).
</p><p style="text-align: justify">
Catatan: Walau tidak semuanya, namun beberapa kampus di Jerman mengharuskan calon mahasiswanya 
mempunyai sertifikat B2.
</p>
									<h4><b>Deutsch Konversationklass (Program percakapan bahasa Jerman)</b></h4>
<p style="text-align: justify">
24 kali pertemuan, materi pembelajaran menyesuaikan dengan kebutuhan peserta. Difasilitasi oleh 
tentor ex-Jerman dan native speaker.
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