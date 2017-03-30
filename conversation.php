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
                        		kategori = 4 AND status=1"
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
								<h1 >Conversation Class</h1>
							</div>
							</center>
							<div class="col-md-6 col-lg-6 col-sm-6" >

							<p style="text-align: justify;">Kelas ini khusus bagi siswa yang tertarik mendalami percakapan Bahasa Inggris baik untuk percakapan sehari-hari atau bagi tujuan tertentu. Selama ini Texas English Course &amp; Training Center mendidik berbagai kalangan siswa yang ingin mahir dibidang percakapan yang dibagi menjadi tiga tingkatan, yaitu  :</p>
							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
								<ul style="text-align: justify;">
<li><strong>Conversation I : </strong>Bagi siswa yang baru pertama kali membiasakan diri untuk berbicara dalam Bahasa Inggris. Materi yang diajarkan sifatnya sangat sederhana dan bertujuan untuk memberanikan siswa untuk berani berbicara dalam Bahasa Inggris dan membiasakannyapada kegiatan sehari-hari.</li>
<li><strong>Conversation II : </strong>Diperuntuukan bagi siswa yang sudah memiliki dasar dalam berbicara menggunakan Bahasa Inggris. Sifat pembelajaran yang diterapkan lebih ke menambah vocabulary, memperbaiki grammar, dan memperluas topik pembicaraan</li>
<li><strong>Conversation III : </strong>Diaplikasikan untuk siswa yang telah paham terbiasa berbicara dalam Bahasa Inggris. Sifat dari materi yang diajarkan adalalah melatih kelancaran, memperbaiki struktur kalimat dan eksplorasi topik-topik yang lebih spesifik.</li>
<li><strong>Conversation for Spesific Purpose : </strong>Untuk siswa yang memiliki tujuan tertentu dalam memperdalam percakapan Bahasa Inggrisnya. Sehingga topik dan materi yang diajarkan mengikuti kebutuhan siswa yang bersangkutan.</li>
</ul>
							</div>
						</div><!-- row -->						
						
							</div>
							
							</div>
							
						</div>

					</div>
				</div>

				

				

				
			</div>
<?php } ?>
		</section><!-- #content end -->
<?php include "footer.php";?>