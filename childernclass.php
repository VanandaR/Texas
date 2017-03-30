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
                        		kategori = 2 AND status=1"
		);
		$ambil->execute();
		while($tampil=$ambil->fetch()){
			?>
			<div class="content-wrap" style="background-image: url('<?php echo $url.'gambarbackground/'.$tampil['gambar_background']; ?>');backgorund-repeat:no-repeat;background-size:cover; padding:0;">
				<div  style="background: rgba(0,0,0,0.7); padding: 50px 50px; " >
					<div class="container clearfix">
						<div class="row clearfix" >

							<!--
                                                        <div class="heading-block topmargin">
                             -->
							<!-- <img class="alignright wp-image-240 size-medium" src="image/galeri5.jpg" width="300" height="225" /> -->


							<center>
								<div class="heading-block"  >
									<h1 >Children Class</h1>
								</div>
							</center>

							<div class="col-md-6 col-lg-6 col-sm-6" >
								<img src="<?php echo $url.'gambarkonten/'.$tampil['gambar_konten']; ?>">


							</div>
							<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:1%; padding-right:1%;">
								<p style="text-align: justify;">
									<?php echo $tampil['tulisan_konten']; ?></p>

							</div>

						</div>




					</div>

				</div>

			</div>

		</div>






		</div>
		<?php } ?>
	</section><!-- #content end -->
<?php include "footer.php";?>