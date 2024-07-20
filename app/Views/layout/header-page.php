<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Document Title ============================================= -->
    <title><?= $title; ?> | Teknik Informatika Unusia</title>
    <meta content="<?= $post['post_description'] ?? $site['site_description']; ?>" name="description">
    <meta content="Teknik Informatika, UNUSIA, TI UNUSIA, NU, Universitas Nahdlatul Ulama Indonesia" name="keywords">
    <!--  Favicons ============================================= -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(''); ?>assets/titan/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?= base_url(''); ?>assets/titan/images/favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(''); ?>assets/titan/images/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(''); ?>assets/titan/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(''); ?>assets/titan/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(''); ?>assets/titan/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(''); ?>assets/titan/images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url(''); ?>assets/titan/images/favicon/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!--  Stylesheets ============================================= -->
    <!-- Default stylesheets-->
    <link href="<?= base_url(''); ?>assets/titan/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/titan/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file -->
    <link href="<?= base_url(''); ?>assets/titan/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?= base_url(''); ?>assets/titan/css/colors/default.css" rel="stylesheet">
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/">Teknik Informatika</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/" >Home</a>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?= base_url(''); ?>profil"><i class="fa fa-bolt"></i> Profil</a></li>
                  <li><a href="<?= base_url(''); ?>pengelola"><i class="fa fa-link fa-sm"></i> Pengelola</a></li>
                  <li><a href="<?= base_url(''); ?>dosen"><i class="fa fa-tasks"></i> Dosen</a></li>
                  <li><a href="<?= base_url(''); ?>kurikulum"><i class="fa fa-list-alt"></i> Kurikulum</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-check-square-o"></i> Peminatan</a></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= base_url(''); ?>softwaredevelopment"> Software Development</a></li>
                      <li><a href="<?= base_url(''); ?>networkengineering"> Network Engineering</a></li>
                      <li><a href="<?= base_url(''); ?>intelligentsystem"> Intelligent System</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Posts</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= base_url(''); ?>post">Berita</a></li>
                      <li><a href="<?= base_url(''); ?>category/pengumuman">Pengumuman</a></li>
                      <li><a href="<?= base_url(''); ?>category/acara">Acara</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Sidang</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Skripsi</a></li>
                      <li><a href="#">Magang</a></li>
                    </ul>
                  </li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Page 404</a></li>
                </ul>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Documents</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Docs1</a></li>
                  <li><a href="#">Docs2</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        