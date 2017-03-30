<?php
try{
    $url="../../texasadmin/assets/images/";
    $koneksi=new PDO('mysql:host=localhost;dbname=texas',"root","");
}catch(PDOException $e){
    echo "Koneksi Gagal".$e->getMessage();
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Null Computindo" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="assets/css/google-fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="assets/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/w3slider.css" type="text/css" />
    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Texas English Course</title>
    <style>
        #primary-menu ul > li {
            float: left;
            margin-left: 0px;
            font-size:16px;
        }

        #primary-menu ul li > a {
            padding: 39px 13px;
            font-size:16px;

        }
        .affix1 {
            position:fixed;
            bottom:0px;
            left:0px;
            width:100%;
            z-index:1030;
        }
        #aqua-menu1 {
            height:20px;
            margin-bottom:0px;
            background-color:#0b242f;
            border-top:1px solid #1e4555;
        }

    </style>

</head>

<body class="dark stretched" >

</div>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header full-header" data-sticky-class="dark">
        <div id="header-wrap">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                <!-- Logo
                ============================================= -->
                <!-- <div id="logo" style="padding-left: 10px; padding-right: 10px; margin-right: 0px; width: 20%" > -->
                <div id="logo" style="width:20%; height:10%;" class="hidden-md hidden-sm">
                    <a href="" class="standard-logo" data-dark-logo="image/logotexas.png">
                        <img src="image/logotexas.png" alt="Texas Logo" >

                    </a>
                    <!--<a href="http://notohadinegoro.co.id/" class="retina-logo" data-dark-logo="http://notohadinegoro.co.id/assets/images/logo-dark@2x.png"><img src="http://notohadinegoro.co.id/assets/images/logo@2x.png" alt="Canvas Logo"></a> -->
                </div><!-- #logo end -->
                <!-- Primary Navigation
                ============================================= -->

                <nav id="primary-menu" class="dark " style="padding-left: 0px; padding-right: 0px; float: left;  ">
                    <ul style="margin-right: 0px; padding-right: 0px; " >
                        <li class="current" ><a href="index.php"><div>Home</div></a></li>
                        <li><a href="#"><center><div>Program</div></center></a>
                            <ul style="background:rgba(51,51,51,0.8)">
                                <li><a href="#"><div>English</div></a>
                                    <ul>
                                        <li><a href="#"><div>General English</div></a>
                                            <ul>
                                                <li><a href="childernclass.php">Children Class</a></li>
                                                <li><a href="teenclass.php">Teens Class</a></li>
                                                <li><a href="adultclass.php">Adults Class</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div>Conversation</div></a>
                                            <ul>
                                                <li><a href="childernclass.php">Children Class</a></li>
                                                <li><a href="teenclass.php">Teens Class</a></li>
                                                <li><a href="adultclass.php">Adults Class</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div>Writing</div></a>
                                            <ul>
                                                <li><a href="childernclass.php">Children Class</a></li>
                                                <li><a href="teenclass.php">Teens Class</a></li>
                                                <li><a href="adultclass.php">Adults Class</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div>English For Spesific Purpose (ESP)</div></a>
                                            <ul>
                                                <li><a href="childernclass.php">Children Class</a></li>
                                                <li><a href="teenclass.php">Teens Class</a></li>
                                                <li><a href="adultclass.php">Adults Class</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><div>IELTS</div></a>
                                    <ul>
                                        <li><a href="generaltraining.php"><div>General Training</div></a></li>
                                        <li><a href="academic.php"><div>Academic</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="toeic.php"><div>TOEIC</div></a></li>
                                <li><a href="#"><div>Komputer</div></a>
                                    <ul>
                                        <li><a href="msoffice.php"><div>Microsoft Office</div></a></li>
                                        <li><a href="desaingrafis.php"><div>Desain Grafis</div></a></li>
                                        <li><a href="komputerjaringan.php"><div>Komputer Jaringan</div></a></li>
                                        <li><a href="akuntansi.php"><div>Akuntansi</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><div>Bahasa Asing Lainnya</div></a>
                                    <ul>
                                        <li><a href="jepang.php"><div>Jepang</div></a></li>
                                        <li><a href="korea.php"><div>Korea</div></a></li>
                                        <li><a href="mandarin.php"><div>Mandarin</div></a></li>
                                        <li><a href="jerman.php"><div>Jerman</div></a></li>
                                        <li><a href="perancis.php"><div>Perancis</div></a></li>
                                        <li><a href="arab.php"><div>Arab</div></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><div>Pelajaran Umum</div></a>
                                    <ul>
                                        <li><a href="#"><div>Matematika</div></a></li>
                                        <li><a href="#"><div>Fisika</div></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><div>TOEFL ITP</div></a>
                            <ul style="opacity:0.9">
                                <li><a href="#"><div>TOEFL ITP Test</div></a></li>
                                <li><a href="#"><div>TOEFL ITP Try Out</div></a></li>
                                <li><a href="#"><div>TOEFL ITP Training</div></a></li>
                            </ul>
                        </li>
                        <li class=""><a href="fasilitas.php"><div>Fasilitas</div></a></li>
                        <li class=""><a href="#"><div>Galeri</div></a></li>
                        <li class=""><a href="alumni.php"><div>Alumni</div></a></li>
                        <li class=""><a href="event.php"><div>Event</div></a></li>
                        <li class=""><a href="daftar.php"><div>Daftar</div></a></li>
                    </ul>
                </nav><!-- #primary-menu end -->
            </div>
        </div>
        <div id="aqua-menu1" data-spy="affix1" class="subnav navbar affix1" style="min-height: 30px;">
            <marquee style="font-size: 20px;color:yellow;margin-top: 0px" onmouseout="this.setAttribute('scrollamount', 6, 0);" behavior="scroll" direction="left">
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
                while($tampil=$ambil->fetch()){
                    ?>
                    <?php echo $tampil['tulisan_info']; ?> | <?php echo $tampil['tanggal_info']; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php } ?>
            </marquee>
    </header><!-- #header end -->

