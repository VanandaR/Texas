<?php include "header.php";?>
    <section id="content"style="padding:0">
        <div class="content-wrap" style="background-image: url('<?php echo $url.'gambarbackground/'.$tampil['gambar_background']; ?>');backgorund-repeat:no-repeat;background-size:cover; padding:0;">
            <div  style="background: rgba(0,0,0,0.7); padding: 50px 50px; " >
                <div class="container clearfix">
                    <div class="row clearfix">
                        <center>
                            <div class="heading-block"  >
                                <h1 >Daftar Event</h1>
                            </div>
                        </center>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Info</th>
                                    <th>Tanggal</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $ambil=$koneksi->prepare("
							SELECT
                        		*
                    		FROM
                        	    info
                    		WHERE
                        		status = 1"
                                );
                                $ambil->execute();
                                $i=1;
                                while($tampil=$ambil->fetch()){
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td>
                                            <h5 class="list-group-item-heading"><?= $tampil['tulisan_info'];?></h5>

                                        </td>
                                        <td>
                                            <h5 class="list-group-item-heading"><?= $tampil['tanggal_info'];?></h5>
                                        </td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </section><!-- #content end -->
<?php include "footer.php";?>