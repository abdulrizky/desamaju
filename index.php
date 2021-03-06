<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Desamaju.id | Desa Digital mendukung konsep smart village, smart city, desa pintar, desa cerdas, kampung pintar, kampung cerdas mendukung produksi lokal dengan menerapkan WIFI dan Aplikasi Online Marketplace untuk UMKM</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="desa,desamaju,digital,maju, pintar, cerdas, elektronik, automatis, otomatis, it, teknologi, smart, smartvillage, village, smart city, city," name="keywords">
  <meta content="Satu satunya desa menerapkan dunia digital, menerapkan smart village, smart city mendukung program pemerintah indonesia maju, membangun dari pinggiran/ desa/kampung untuk membangun negeri demi meningkatkan sumber daya manusia /SDM, politik, sosial, budaya dan lingkungan. Wifi Murah, internet pembelajaran, sosial media, jual online produk lokal, UMKM desa/kampung untuk memajukan daerah menjadi maju dan mandiri" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <?php 
    $link = mysqli_connect('localhost','root','','desamaju');
    // if(!$link){
    //   die('ada error'. mysqli_connect_error());
    // }

    $select_member = mysqli_query($link , "SELECT * FROM member");
    $select_client = mysqli_query($link , "SELECT * FROM client");

    //$select_layanan = mysqli_query($link , "SELECT * FROM layanan");
    //$select_village_concept = mysqli_query($link , "SELECT * FROM village_concept");
    //$select_product = mysqli_query($link , "SELECT * FROM product");
    //$select_kata_kata = mysqli_query($link , "SELECT * FROM kata_kata");
  ?>
  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Produk kami</a></li>
          <li><a href="#team">Team</a></li>
          <!--
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          -->
          <li><a href="#contact">Kontak Kami</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Desa Digital<br><span>solusi</span><br>membangun desa</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Jelajahi</a>
          <a href="#services" class="btn-services scrollto">Layanan kami</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tentang Kami</h3>
          <p>Solusi industri ekonomi kreatif dengan menerapkan solusi digital dan IoT dari desa untuk mewujudkan masyarakat yang makmur dan sejahtera.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              DESAMAJU.id adalah konsultan digital diperuntukkan untuk desa-desa yang ingin maju dan mandiri yang melek teknologi informasi (IT). Dengan kemajuan jaman saat ini, semua orang dituntut untuk mengikuti jaman yang berbasis teknologi.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Smart Village Goverment</a></h4>
              <p class="description">Pelayanan pemerintah desa yang baik dengan menerapkan secara elektronik, seluruh layanan pemerintah desa akan di dukung dengan sistem informasi yang baik</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Smart Farming</a></h4>
              <p class="description">Pertanian pintar, dengan ini akan mampu meningkatkan hasil panen hingga distribusi yang baik, mampu menekan biaya dan meningkatkan laba petani</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Smart Environment</a></h4>
              <p class="description">Lingkungan pintar, kondisi lingkugan yang di buat secara otomatis oleh IoT, seperti menyiram otomatis, memberi pakan ternak otomatis</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Konsep desa digital atau digital village.</h4>
            <p>
              Merupakan suatu konsep tentang pengembangan desa dengan memanfaatkan teknologi digital baik dalam pelayanan publik maupun pengembangan kawasan, seperti infrastruktur, teknologi informasi, komunikasi, transportasi, zonasi, itigasi / drainase dan energi.
            </p>
            <p>
              Dengan desa digital diharapkan mampu untuk menurunkan biaya ( cost reduction ) dan meningkatkan pelayanan publik serta taraf hidup masyarakat desa.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Manfaat teknologi saat ini.</h4>
            <p>
             Telah kita ketahui bahwa teknologi merupakan suatu alat untuk mengurangi biaya dan meningkatkan kinerja atau layanan. 
            </p>
            <p>
              Dengan menggunakan teknologi, desa akan lebih maju dan mandiri karena bukan lagi tergantung pada daerah bahkan pusat. dan salah satu jalan adalah dengan memanfaatkan teknologi digital atau yang disebut IoT (Internet Of Things).
            </p>
            <p>
              Internet Of Things adalah jaringan atau koneksi bukan saja manusia, tetapi sudah benda. Dengan Internet Of Things, maka bisa tercipta Smart City.
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Layanan Kami</h3>
          <p>Untuk menjadi desa maju / desa digital dibutuhkan beberapa pelayanan yang berbeda dengan desa lain pada umumnya. Disebut desa digital apabila sudah menerapkan beberapa pelayanan yang DESAMAJU.id miliki.</p>
        </header>

        <div class="row">
          
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Infrastruktur</a></h4>
              <p class="description">Wifi, akses jaringan internet hostpot sangat dibutuhkan untuk mendapatkan informasi yang uptodate. CCTV, untuk memantau keamanan di ruas-ruas jalan desa.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">E-Goverment</a></h4>
              <p class="description">E-siskamling, E-simkeudes, E-aset, E-surat, E-Monev, E-sid, E-puskesmas, E-klinik, Smart-tani, Simpeg, Lapor pengaduan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Bisnis Online</a></h4>
              <p class="description">Kulinerae, Marketplace, E-Commerce, </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Web Profil Desa</a></h4>
              <p class="description">Harga pasar, UKM, Regulasi, Galery, </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Destinasi</a></h4>
              <p class="description">Wisata, Kuliner, Perbankan, Pendidikan, Penginapan, Sewa Mobil, Service Mobil, Cuci Mobil, Salon Kecantikan, Pangkas Rambut, Jasa Pengiriman</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Kesehatan</a></h4>
              <p class="description">Rumah sakit, Puskesmas, Bidan, Perawat, Mantri, Apotik</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Konsep Desa Digital?</h3>
          <p>Pemerintah mendukung pembangunan dari desa. Desa diharapkan maju dan mandiri untuk dapat mengembangankan potensinya.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Infrastruktur</h5>
                <p class="card-text">Pengembangan kawasan, Untuk menciptakan desa maju dibutuhkan perangkat yang mendukung, sehingga tercipta jaringan.</p>
                <a href="#" class="readmore">Selengkapnya </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Sumber Daya Manusia</h5>
                <p class="card-text">Manusia merupakan pengguna, sehingga perlu di ajarkan dan di motivasi untuk dapat menjalankan teknologi normal.</p>
                <a href="#" class="readmore">Selengkapnya </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Lingkungan Cerdas</h5>
                <p class="card-text">Smart environment, lingkungan dapat dibuat otomatis oleh Internet Of Things (IoT), seperti penyiraman otomatis, memberi pakan otomatis. </p>
                <a href="#" class="readmore">Selengkapnya </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Desa</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projek</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Pengalaman</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Team Kami</p>
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Produk Kami</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Kata Mereka</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Cak Thoriq</h3>
                <h4>Bupati Kabupaten Lumajang</h4>
                <p>
                  Teknologi dapat merubah manusia, teknologi dapat membantu cara kerja manusia, desa maju harapan kita bersama.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Bunda Indah</h3>
                <h4>Wakil Bupati Kabupaten Lumajang</h4>
                <p>
                  Kami sangat mendukung smart city, smart village demi terciptanya masyarakat yang melek IT dan teknologi untuk kesejahteran warga kami.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Dewi</h3>
                <h4>Plt. Dinas Komunikasi dan Informatika</h4>
                <p>
                  Sangat mendukung program DESAMAJU.id, dapat membantu mewujudkan program pemerintah indonesia maju. Mengawal dan membangun dari desa.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Ir. H. Widayat</h3>
                <h4>Pensiunan BUMN</h4>
                <p>
                  Dengan menerapkan desa digital, menyampaikan anspirasi masyarakat lebih mudah hanya dengan menggunakan salah satu aplikasi LAPOR.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Akbar Bin Widayat</h3>
                <h4>Wiraswasta</h4>
                <p>
                  Saya sangat berterimakasih atas usaha untuk mendirikan desa maju dengan membenahi infratruktur yang ada, internet ada di mana-mana.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Kami terdiri dari suku dan bahasa yang beragam namun dapat solid untuk mengembangkan desamaju.id</p>
        </div>

        <div class="row">

          <?php while($member = mysqli_fetch_array($select_member)){ ?>

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/<?= $member['image'] ?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?= $member['name'] ?></h4>
                  <span><?= $member['jabatan'] ?></span>
                  <div class="social">
                    <a href="<?= $member['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?= $member['facebook'] ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?= $member['gplus'] ?>"><i class="fa fa-google-plus"></i></a>
                    <a href="<?= $member['liked_in'] ?>"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php } ?>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Klien Kami</h3>
          <p>Beberapa pemerintah daerah yang sudah menerapkan desa digital, desa pintar, desa cerdas, kampung pintar dari DESAMAJU.id</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <?php while($client = mysqli_fetch_array($select_client)){ ?>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="img/clients/<?= $client['image'] ?>" class="img-fluid" alt="">
            </div>
          </div>

          <?php } ?>

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Kontak Kami</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3949.3497807498093!2d113.6910188!3d-8.1674711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7502633a56cad74a!2smascitra.com%20-%20Konsultan%20IT%20-%20Workshop!5e0!3m2!1sen!2sid!4v1573473869677!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Jl. Bungur No.130, Jember</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>admin@desamaju.id</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>0331-4350050</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Pesan kamu sudah terkirim. Terimakasih!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Kirim Pesan</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>DESAMAJU.id</h3>
            <p>Konsep Desa Digital merupakan terobosan bagi semua desa untuk lebih maju dan mandiri. Potensi yang dimiliki desa dan warga desa dapat di explore untuk dapat berkembang dengan menerapkan teknologi informasi baik aplikasi web, mobile (android/ios), IoT. Teknologi dapat merubah ke arah lebih baik dan modern.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Situs Penting</h4>
            <ul>
              <li><a href="#">Beranda</a></li>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Layanan</a></li>
              <li><a href="#">Peraturan</a></li>
              <li><a href="#">Kebijakan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              Jl. Bungur No.130 <br>
              Kabupaten Jember<br>
              Jawa Timur <br>
              <strong>Telp:</strong> 0331-4350050<br>
              <strong>Email:</strong> admin@desamaju.id<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Sekilas DesaMaju.id</h4>
            <p>Jika ingin membuat desa kamu lain dari pada yang lain, segera konsultasikan dengan team DESAMAJU.id. Dengan bekal pengalaman membantu pemerintah kami ikhlas membangun negeri.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Daftar">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>DESAMAJU.id</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Powerred By <a href="https://mascitra.com/">PT. Mascitra Teknologi Informasi</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  
  <!-- widget WA -->
  
</body>
</html>
<?php  
    mysqli_close($link);
?>