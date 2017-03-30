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
                        		kategori = 22 AND status=1"
);
$ambil->execute();
while($tampil=$ambil->fetch()){
	?>
			<div class="content-wrap" style="background-image: url('image/galeri4.jpg');backgorund-repeat:no-repeat;background-size:cover; padding:0;background-position:fixed;">
				<div  style="background: rgba(0,0,0,0.7); width:'100%'; height:'100%'; " >
				<div class="container clearfix">
					<div class="row clearfix" >
						
<!-- 
							<div class="heading-block topmargin">
 -->
							<!-- <img class="alignright wp-image-240 size-medium" src="image/galeri5.jpg" width="300" height="225" /> -->
							<center>
							<div class="heading-block"  >
								<h1 >Bahasa Korea</h1>
							</div>
							</center>
							<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >
								<p style="text-align:justify">
								Saatnya menguasai bahasa Korea, minimal menguasai percakapan dasar atau tahu kata-kata umum yang sering digunakan dalam aksara Hangeul 
(??) yang digunakan di bahasa Korea.
								</p>
							</div>

							</div>
<div class="row">
							<div class="col-md-6 col-lg-6 col-sm-6" >

							<p style="text-align: justify;">Menurut sebuah penelitian, menguasai lebih dari satu bahasa (bilingual) mampu menguatkan otak dan 
membantu perkembangan otak. Artinya, seseorang yang menguasai lebih dari satu bahasa memiliki 
risiko kecil dalam penyakit yang berhubungan dengan ingatan misalnya saja pikun.</p>

							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
						<p style="text-align: justify;">Selain itu, belajar bahasa Korea juga bisa membuat Anda lebih mudah untuk belajar bahasa asing lainnya, 
seperti bahasa Jepang atau Mandarin yang masih memiliki beberapa kemiripan.</p>
							</div>
						</div><!-- row -->	
						<div class="row">
							<div class="col-md-12 col-lg-12 col-sm-12" >
								<p style="text-align:justify">
								Langkah paling awal yang harus dilakukan jika ingin mahir bahasa Korea adalah belajar membaca 
tulisan Hangul (Han-geul / ??). Sekedar info, pada zaman dulu kala rakyat Korea menggunakan 
tulisan Hanja, yang mana identik dengan tulisan Cina kuno. Tulisan Hanja itu termasuk logograf 
(ideograf), yang mana tiap hurufnya melambangkan suatu kata atau morfem. Untuk fasih membaca 
dan menulis tulisan Hanja, rakyat Korea perlu menghafal banyak sekali bentuk huruf, akibatnya 
hanya kaum terpelajar saja yang melek huruf. Lalu, pada pertengahan abad ke-15, Sejong The Great 
(????), raja yang memerintah dinasti Joseon di Korea saat itu, memiliki ide bagaimana 
meningkatkan tingkat literasi rakyat Korea, yaitu dengan cara menciptakan featural alphabet yang 
mudah dipelajari, Hangul.
								</p>
								<p style="text-align:justify">
									Pusing? Memang. Tetapi jangan khawatir, sebab selama kamu memiliki keinginan kuat, tak ada 
hambatan berarti
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