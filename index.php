<?php 
    session_start();
    $successLogin =  isset($_SESSION['success']) ? $_SESSION['success'] : 'gagal';
?>


<!DOCTYPE html>
<html class="no-js" lang="en"> 
<head>
    <title>DPI Teluk Mata Ikan Nongsa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/templatemo_style.css?v=0.0.1" rel="stylesheet" media="screen">
    <!-- <link rel="stylesheet" href="Leaflet/leaflet.css" /> -->
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
     <style>
        #map {
            width: 100%;
            height: 500px;
            background-color: #CCC;
        }

        .hide {
            display: none;
        }
    </style>
    

    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- <script src="Js/jquery-3.6.1.js"></script>  -->
    <script src="js/modernizr.js"></script>
    <script src="Leaflet/leaflet.js"></script> <!-- memanggil leaflet.js di folder leaflet -->
    <!-- <script src="Leaflet/leaflet-providers.js"></script> -->
</head>
<body>
    
    <div class="bg-image" style="display: block; background-image: url(&quot;images/BackA.jpg&quot;);"></div>
    <div class="overlay-bg"></div>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li><a class="show-1 homebutton" href="#"><i class="fa fa-home"></i>Beranda</a></li>
                <li><a class="show-2" href="#"><i class="fa fa-group"></i>Tentang</a></li>
                <li><a class="show-3" href="#"><i class="fa fa-briefcase"></i>Produk</a></li>
                <li><a class="show-4" href="#"><i class="fa fa-cogs"></i>Peta</a></li>
                <li><a class="show-5" href="#"><i class="fa fa-globe"></i>Kontak Kami</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

    <div class="main-content">
        <div class="container">
            <div class="row">

                <!-- Static Menu -->
                <div class="col-md-2 visible-md visible-lg">
                    <div class="main_menu">
                        <ul class="menu">
                            <li><a class="show-1 homebutton" href="#" data-toggle="tooltip" data-original-title="Beranda"><i class="fa fa-home"></i></a></li>
                            <li><a class="show-2" href="#" data-toggle="tooltip" data-original-title="Tentang"><i class="fa fa-user"></i></a></li>
                            <li><a class="show-3" href="#" data-toggle="tooltip" data-original-title="Produk"><i class="fa fa-briefcase"></i></a></li>
                            <li><a class="show-4" href="#" data-toggle="tooltip" data-original-title="Peta"><i class="fa fa-cog"></i></a></li>
                            <li><a class="show-5" href="#" data-toggle="tooltip" data-original-title="Kontak Kami"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-2 -->

                <!-- Begin Content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="templatemo_logo">
                                <a href="#">
                                    <!-- <img src="images/templatemo_logo.png" alt="Genius"> -->
                                    <h1>Daerah Penangkapan Ikan Teluk Mata Ikan Nongsa</h1>
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->


                    <div id="menu-container">
                        
                        <div id="menu-1" class="homepage">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMIa.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMIa.jpg" alt="Image 1">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMIb.png" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMIb.png" alt="Image 2">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMIc.jpg" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMIc.jpg" alt="Image 3">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMI1.JPG" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMI1.JPG" alt="Image 4">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMI2.JPG" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMI2.JPG" alt="Image 5">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMI3.JPG" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMI3.JPG" alt="Image 6">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMI4.JPG" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMI4.JPG" alt="Image 7">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMI5.JPG" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMI5.JPG" alt="Image 8">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="overlay">
                                            <a href="images/gallery/TMI6.JPG" data-rel="lightbox">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <img src="images/gallery/TMI6.JPG" alt="Image 9">
                                    </div> <!-- /.portfolio-item -->
                                </div> <!-- /.col-md-4 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.homepage -->

                        <div id="menu-2" class="content tentang">
                            <div class="page-header">
                                <h2 class="page-title">Tentang</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="widget-title">DPI Kampung Tua Teluk Mata Ikan Nongsa</h3>
                                        <p>Kampung Tua Teluk Mata Ikan merupakan sebuah tempat yang berada di kelurahan Sambau , Nongsa. Menurut masyarakat setempat mengapa dinamakan Teluk Mata Ikan karena dahulu didekat sepanjang pantai ini terdapat banyak mata ikan, maka disebutlah Teluk Mata Ikan.</p>
                                        <p>Pada kegiatan PBL DPI Nongsa ini diharapkan mahasiswa dapat menyelesaikan Tugas Belajar Semester Ganjil (3) Tahun 2022/2023. Selain itu juga dapat membantu masyarakat Kampung Tua Teluk Mata Ikan dalam memanfaatkan potensi pantai yang mereka miliki.</p>
                                    </div> <!-- /.col-md-7 -->
                                   <!--  <div class="col-md-5">
                                        <h3 class="widget-title">Our Skills</h3>
                                        <ul class="progess-bars">
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Photoshop 90%</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">HTML 75%</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">WordPress 68%</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">Marketing 95%</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> /.col-md-5 -->
                                </div> <!-- /.row -->
                                <div class="our-team">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="widget-title">Tahapan</h3>
                                        </div> <!-- /.col-md-12 -->
                                    </div> <!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="team-member">
                                                <div class="member-thumb">
                                                    <img src="images/L1.jpg" alt="">
                                                </div>
                                                <div class="member-infos">
                                                    <h4 class="member-name">Tahap 1</h4>
                                                    <span class="member-role">Pra-Pelaksanaan</span>
                                                    <p class="member-desc">Di dalam metode pengolahan data dijelaskan prosedur pengolahan dan analisis data sesuai dengan pendekatan yang dilakukan. Secara umum metode pengolahan data akan melalui beberapa tahap meliputi, pemeriksaan data (editing), klasifikasi 
                                                    (classifying), verifikasi (verifying), analisis 
                                                    (analyzing), dan pembuatan kesimpulan (concluding).</p>
                                                </div>
                                            </div>
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="team-member">
                                                <div class="member-thumb">
                                                    <img src="images/L2.jpg" alt="">
                                                </div>
                                                <div class="member-infos">
                                                    <h4 class="member-name">Tahap 2</h4>
                                                    <span class="member-role">Pelaksanaan</span>
                                                    <p class="member-desc">Tahapan selanjutnya yaitu tahapan pelaksanaan penelitian dimana pada tahapan ini peneliti mulai terjun langsung ke lapangan  untuk memperoleh data yang diinginkan dalam penelitian yang dilakukan dengan menggunakan beberapa teknik pengumpulan data mulai dari observasi, wawancara kepada informan sehingga memperoleh beberapa data yang nantinya digunakan untuk menjawab permasalahan dalam penelitian yang dilakukan.</p>
                                                </div>
                                            </div>
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="team-member">
                                                <div class="member-thumb">
                                                    <img src="images/L3.jpg" alt="">
                                                </div>
                                                <div class="member-infos">
                                                    <h4 class="member-name">Tahap 3</h4>
                                                    <span class="member-role">Pasca-Pelaksanaan</span>
                                                    <p class="member-desc">Hasil pengolahan yang didapatkan dari pengolahan data primer dan sekunder kemudian disajikan dalam bentuk flyer dan poster, dilaporkan dalam sebuah laporan ilmiah dan HKI.</p>
                                                </div>
                                            </div>
                                        </div> <!-- /.col-md-4 -->
                                    </div> <!-- /.row -->
                                </div> <!-- /.our-team -->
                            </div> <!-- /.content-inner -->
                        </div> <!-- /.about-us -->

                        <div id="menu-3" class="content produk">
                            <div class="page-header">
                                <h2 class="page-title">Produk</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="widget-title">Sasaran Hasil Akhir Projek</h3>
                                    </div> <!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="filter-work pull-right">
                                            <a href="#nogo" class="toggle-filter">Pilihan Matakuliah</a>
                                            <ul class="filter-controls controls">
                                                <li class="filter" data-filter="all">Semua</li>
                                                <li class="filter" data-filter="penginderaanjauh">Penginderaan Jauh</li>
                                                <li class="filter" data-filter="fotogrametri">Fotogrametri</li>
                                                <li class="filter" data-filter="sig">SIG</li>
                                                <li class="filter" data-filter="surveihidrografi">Survei Hidrografi</li>
                                                <li class="filter" data-filter="surveignss">Survei GNSS</li>
                                                <li class="filter" data-filter="web">Pemrograman Web</li>
                                            </ul>
                                        </div> <!-- /.filter-work -->
                                    </div> <!-- /.col-md-6 -->
                                </div> <!-- /.row -->
                                <div class="row">
                                    <div id="Grid">
                                        <div class="col-md-4 col-sm-6 mix penginderaanjauh">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/PJ2.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/PJ2.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA KLOROFIL</h4>    
                                                    <span class="gallery-category">Penginderaan Jauh</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix penginderaanjauh">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/PJ3.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/PJ3.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA TSS</h4>    
                                                    <span class="gallery-category">Penginderaan Jauh</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix penginderaanjauh">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/PJ1.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/PJ1.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA VISIBILITAS</h4>    
                                                    <span class="gallery-category">Penginderaan Jauh</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix fotogrametri">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Foto1.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Foto1.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA ORTHO SELURUH WILAYAH KERJA</h4>    
                                                    <span class="gallery-category">Fotogrametri</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix fotogrametri">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/foto2.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/foto2.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA ORTHO WILAYAH KERJA</h4>    
                                                    <span class="gallery-category">Fotogrametri</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix sig">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/SIG1.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/SIG1.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA KEMIRINGAN LERENG DARAT</h4>    
                                                    <span class="gallery-category">SIG</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix sig">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/SIG2.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/SIG2.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA KEMIRINGAN LERENG BAWAH AIR</h4>    
                                                    <span class="gallery-category">SIG</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix sig">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/SIG3.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/SIG3.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA PELABUHAN JARINGAN JALAN</h4>    
                                                    <span class="gallery-category">SIG</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix sig">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/SIG4.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/SIG4.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA PENGGUNAAN LAHAN JARINGAN JALAN</h4>    
                                                    <span class="gallery-category">SIG</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix surveihidrografi">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Hidro1.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Hidro1.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA BATIMETRI</h4>    
                                                    <span class="gallery-category">Survei Hidrografi</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix surveihidrografi">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Hidro2.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Hidro2.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA SEBARAN SUHU</h4>    
                                                    <span class="gallery-category">Survei Hidrografi</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix surveihidrografi">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Hidro3.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Hidro3.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA GRADIASI WARNA</h4>    
                                                    <span class="gallery-category">Survei Hidrografi</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix surveihidrografi">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Hidro4.pNg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Hidro4.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA LONG DAN CROSS</h4>    
                                                    <span class="gallery-category">Survei Hidrografi</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix surveignss">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/GNSS1.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/GNSS1.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA BM ORDE 3</h4>    
                                                    <span class="gallery-category">Survei GNSS</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix surveignss">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/GNSS2.jpg" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/GNSS2.jpg" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA TOPOGRAFI</h4>    
                                                    <span class="gallery-category">Survei GNSS</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix surveignss">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/GNSS3.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/GNSS3.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">PETA PELABUHAN</h4>    
                                                    <span class="gallery-category">Survei GNSS</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix web">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Web1.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Web1.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">LAMAN BERANDA</h4>    
                                                    <span class="gallery-category">Pemrograman Web</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix web">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Web2.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Web2.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">LAMAN TENTANG</h4>    
                                                    <span class="gallery-category">Pemrograman Web</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix web">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Web3.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Web3.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">LAMAN PRODUK</h4>    
                                                    <span class="gallery-category">Pemrograman Web</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix web">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Web4.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Web4.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">LAMAN PETA</h4>    
                                                    <span class="gallery-category">Pemrograman Web</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                        <div class="col-md-4 col-sm-6 mix web">
                                            <div class="gallery-item">
                                                <div class="gallery-thumb">
                                                    <img src="images/gallery/Web5.png" alt="">
                                                    <div class="overlay-g">
                                                        <a href="images/gallery/Web5.png" data-rel="lightbox" class="fa fa-search"></a>
                                                    </div>
                                                </div> <!-- /.gallery-thumb -->
                                                <div class="gallery-content">
                                                    <h4 class="gallery-title">LAMAN KONTAK KAMI</h4>    
                                                    <span class="gallery-category">Pemrograman Web</span>
                                                </div> <!-- /.gallery-content -->
                                            </div> <!-- /.gallery-item -->
                                        </div> <!-- /.col-md-4 -->
                                    </div> <!-- /#Grid -->
                                </div> <!-- /.row -->
                            </div> <!-- /.content-inner -->

                        </div> <!-- /.our-gallery -->

                        <div id="menu-4" class="content">
                            <div class="page-header">
                                <h2 id="menu-4-title" class="page-title">Peta</h2>
                                <div class="hide" id="logout">
                                    <form action="Login.php" method="POST">
                                    <button name="logout" type="submit" class="btn btn-dark">Logout</button>
                                    </form>
                                </div>

                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 text-center" id="login">
                                        <form action="Login.php" method="POST">                                    
                                            <img src="./images/Polibatam.jpg" alt="" style="border-radius: 25%;width: 30%;height: 100px;">
                                            <h3 style="margin-bottom: 37px;">LOGIN WEBGIS</h3>
                                            <div class="form-group">
                                                <input name="username" class="form-control text-center" type="text" placeholder="Username" style="border-radius: 20px;display:inline;width: 65%;">
                                            </div>
                                            <div class="form-group" >
                                                <input name="password" class="form-control text-center" type="password" placeholder="Password" style="border-radius: 20px;display:inline;width: 65%;">
                                            </div>
                                            <?php 
                                                if(isset($_SESSION['failLogin'])){
                                                    echo "<div class='alert alert-danger' role='alert'>" .
                                                            $_SESSION['failLogin'] .
                                                        "</div>";
                                                } 
                                            ?>
                                            <div class="form-group" style="margin-top: 30px;">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
                                            </div> 
                                        </form> 
                                    </div>
                                    <iframe src="https://nongsa.gis.co.id/#5/0/117" id="map" class="hide"></iframe>
                                </div>
                            </div> <!-- /.content-inner -->
                        </div> <!-- /.services -->

                         <div id="menu-5" class="content">
                            <div class="page-header">
                                <h2 class="page-title">Kontak Kami</h2>
                            </div> <!-- /.page-header -->
                            <div class="content-inner">
                                <div class="row">
                                    <div class="col-md-8">
                                        <form action="email.php" method="POST">
                                            <h3 class="widget-title">Pesan dan Kesan</h3>
                                            <p>Terimakasih telah mengunjungi web DPI Nongsa. Jangan ragu untuk mengirimkan pesan dan kesan kepada kami. Untuk bantuan dan informasi  secara langsung, silahkan kunjungi kami di:</p>
                                            <div class="row contact-form">
                                                <div class="col-md-4">
                                                    <label for="nama-id">Nama:</label>
                                                    <input name="nama" type="text" id="nama-id" maxlength="40">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="email-id">E-mail:</label>
                                                    <input name="email" type="text" id="email-id" maxlength="40">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="subject-id">Subject:</label>
                                                    <input name="subject" type="text" id="subject-id" maxlength="60">
                                                </div>
                                            </div> <!-- /.contact-form -->
                                            <p class="full-row">
                                                <label for="pesan">Pesan:</label>
                                                <textarea name="pesan" id="pesan" rows="6"></textarea>
                                            </p>
                                            <input class="mainBtn" type="submit" name="submit" value="Submit">
                                        </form>
                                    </div> <!-- /.col-md-8 -->
                                    <div class="col-md-4">
                                        <div class="information">
                                            <h3 class="widget-title">Informasi</h3>
                                            <ul class="our-location">
                                                <li><span><i class="fa fa-map-marker"></i>Alamat:</span>Jl. Ahmad Yani Batam Kota.</li>
                                                <li><span><i class="fa fa-map-marker"></i>Telepon:</span>+62-778-469858 Ext.1017</li>
                                                <li><span><i class="fa fa-map-marker"></i>Email:</span><a href="mailto:info@company.com">info@polibatam.ac.id</a></li>
                                            </ul>
                                        </div> <!-- /.information -->
                                        <div class="google-map">
                                            <h3 class="widget-title">Lokasi</h3>
                                            <div class="contact-map">
                                                <div class="google-map-canvas" id="map-canvas" style="height: 200px;">
                                                </div>
                                            </div> <!-- /.contact-map -->
                                        </div> <!-- /.google-map -->
                                    </div> <!-- /.col-md-4 -->
                                </div> <!-- /.row -->
                            </div> <!-- /.content-inner -->

                        </div> <!-- /.stay-in-touch -->
                        
                        <div class="site-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="copyright-text">Copyright &copy; 2022 DPI NONGSA 
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-icons-footer">
                                        <ul>
                                            <li><a target="_parent" href="https://www.facebook.com/polibatamofficial" class="fa fa-facebook"></a></li>
                                            <li><a href="https://twitter.com/poli_batam" class="fa fa-twitter"></a></li>
                                            <!-- <li><a href="#" class="fa fa-linkedin"></a></li> -->
                                            <li><a href="https://www.instagram.com/polibatamofficial/" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.site-footer -->

                    </div> <!-- /.content-holder -->
                
                </div> <!-- /.col-md-10 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content -->


    <!-- JAVASCRIPT -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js?v=0.0.1"></script>
    <script>
         function loadMap () {
            // MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
            var map = L.map('map').setView([-8.4521135, 115.0599022], 10);
            // PILIHAN BASEMAP YANG AKAN DITAMPILKAN
            var baseLayers = {
                'Esri.WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap').addTo(map),
                'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery')
            };
            // MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP
            L.control.layers(baseLayers, {}).addTo(map);
            // MENAMPILKAN SKALA
            L.control.scale({
                imperial: false
            }).addTo(map);
            // ------------------- VECTOR ----------------------------
            // REQUEST BALI ADMINISTRASI
            $.ajax({ // ini perintah syntax aja untuk memanggil vektor
                type: 'POST',
                url: 'Request.php', // INI memanggil link request_bali yang sebelumnya telah dibuat
                dataType: "json",
                success: function (response) {
                    var data = response;
                    L.geoJson(data, {
                        style: function (feature) {
                            var Style1
                            return {
                                color: "#cc3f39",
                                weight: 1,
                                opacity: 1
                            }; // ini adalah style yang akan digunakan
                        },
                        // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT KAB_KOTA
                        onEachFeature: function (feature, layer) {
                            layer.bindPopup("<center>" + feature.properties.kab_kot + "</center>")
                        }
                    }).addTo(map); // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
                }
            });
        }
        
    </script>
    <script>
        let successLogin = "<?php echo $successLogin; ?>";
        console.log(successLogin);
        if(successLogin != 'gagal') {
            console.log('test');
            $('#map').removeClass('hide');
            $('#login').addClass('hide');
            $('#logout').removeClass('hide');
            $('#menu-4-title').addClass('hide');
            loadMap();
        }
       
    </script>
    <script>
        const myLatLng = { lat: 1.18918, lng: 104.11060 };
        function initialize() {
            const map = new google.maps.Map(
                document.getElementById("map-canvas"),
                {
                    center:  myLatLng,
                    zoom: 15,
                    mapTypeId: 'satellite',
                }
            );
            
            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "Hello World!",
            });

        }
        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
          document.body.appendChild(script);
        }
    </script>
    
</body>
</html>