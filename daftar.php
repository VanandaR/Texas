<?php include "header.php";?>
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
                                    <h1 >DAFTAR</h1>
                                </div>
                            </center>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: right;padding-top=7px;">Nama Lengkap <span class="asterisk">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="place_of_birth" class="form-control" placeholder="Tempat Lahir" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: right">Tempat Lahir <span class="asterisk">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="place_of_birth" class="form-control" placeholder="Tempat Lahir" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: right">Tanggal Lahir <span class="asterisk">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="place_of_birth" class="form-control" placeholder="Tempat Lahir" value="" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            </div>






            </div>
        <?php } ?>
    </section><!-- #content end -->

    <!-- Content
    ============================================= -->
<?php include "footer.php";?>