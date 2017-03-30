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
		<div class="content-wrap" style="background-image: url('image/english_for_adult/1.jpg');backgorund-repeat:no-repeat;background-size:cover; padding:0;background-position:fixed;">
			<div  style="background: rgba(0,0,0,0.6);" >
				<div class="container clearfix">
					<div class="row clearfix" >
						<div class="widget subscribe-widget clearfix">

							<h5 style="text-align: center"><strong>Alumni of texas? </strong> Write your comment here : </h5>
							<form>
								<div class="form-group" style="margin-bottom: 50px;">
									<label class="col-sm-3 control-label" style="text-align: right;padding-top=7px;">Nama Lengkap <span class="asterisk">*</span></label>
									<div class="col-sm-7">
										<input type="text" name="place_of_birth" class="form-control" placeholder="Tempat Lahir" value="" />
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 50px;">
									<label class="col-sm-3 control-label" style="text-align: right;padding-top=7px;">Alamat <span class="asterisk">*</span></label>
									<div class="col-sm-7">
										<input type="text" name="place_of_birth" class="form-control" placeholder="Tempat Lahir" value="" />
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 50px;">
									<label class="col-sm-3 control-label" style="text-align: right;padding-top=7px;">Alamat <span class="asterisk">*</span></label>
									<div class="col-sm-7">
										<img src="" width="150px" height="150px" id="preview_foto">
										<input type="file" id="field_foto" name="widget-subscribe-form-email" class="form-control ">
									</div>
								</div>
								<div class="form-group">
									<span class="input-group-btn " style="padding:2%;">
										<button class="btn btn-success" type="submit">Submit</button>
									</span>
								</div>
							</form>

						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">

						</div>
					</div>


				</div>

			</div>

		</div>

<?php } ?>
	</section><!-- #content end -->
<?php include "footer.php";?>