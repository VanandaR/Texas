<?php include "header.php";?>
		<!-- Content
		============================================= -->
		<section id="content">
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
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="row clearfix">
						<div>
<!-- 
							<div class="heading-block topmargin">
 -->
							<div class="heading-block" style="padding-bottom: 15px; margin-bottom: 15px">
								<h1>General English</h1>
							</div>
							<p style="text-align: justify;">Paket bahasa Inggris untuk semua usia, pembelajaran mulai dari dasar untuk melanjutkan ke program bahasa Inggris selanjutnya. General Class merupakan salah satu program kursus Bahasa Inggris yang ada di TEXAS English Course &amp; Training Center yang mana nantinya siswa akan mempelajari keahlian-keahlian dan fitur-fitur Bahasa Inggris seperti Listening, Speaking, Reading, dan Writing serta Grammar dan Vocabulary. Selain keahlian dan fitur tersebut, siswa juga akan mempelajari teks fungsional yang biasa digunakan dalam percakapan sehari-hari dalam Short Functional Text. Selain itu, siswa juga diberikan fun activities dari instruktur serta terdapat program watching film dimana siswa akan diberikan satu film yang kemudian mereka diberi kesempatan untuk menilai dan mengomentari film yang ditonton.</p>
							<p style="text-align: justify;"><a href="image/Texas-001.jpg"><img class="alignnone  wp-image-265" src="image/Texas-001.jpg" alt="English1 001" width="167" height="211" /></a></p>
						</div>

					</div>
				</div>

				

				

				
			</div>
<?php } ?>
		</section><!-- #content end -->
<?php include "footer.php";?>