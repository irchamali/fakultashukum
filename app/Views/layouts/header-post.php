<!DOCTYPE html>
<html lang="en"> 
	<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title><?= $post['post_title']; ?></title>
		<meta content="<?= $post['post_description'] ?? $site['site_description']; ?>" name="description">
		<!-- SEO Tag -->
		<meta property="og:type" content="website" />
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image" content="<?= base_url('/assets/backend/images/post/') . $post['post_image']; ?>">
		<meta property="og:image:secure_url" content="<?= base_url('/assets/backend/images/post/') . $post['post_image']; ?>" />
		<meta property="og:image:width" content="300" />
		<meta property="og:image:height" content="300" />
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(''); ?>assets/reno/images/fav.png">
		<!-- Bootstrap v5.0.2 css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/bootstrap.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/fonts/font/font-awesome.min.css">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/uicons-regular-rounded.css">
		<!-- flaticon css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/fonts/flaticon.css">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/animate.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/owl.carousel.css">
		<!-- slick slider css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/slick.css">
		<!-- odometer css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/odometer.min.css">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/off-canvas.css">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/magnific-popup.css">
		<!-- Main Menu css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/rsmenu-main.css">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/rs-spacing.css">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/reno/css/responsive.css">
		
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="<?= base_url(''); ?>assets/reno/images/fav.png" alt="Universitas Nahdlatul Ulama Indonesia "></div>
                </div>
            </div>              
        </div>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<header id="rs-header" class="rs-header header-style1 header-style3">
					<!-- Toolbar Area Start -->
					<div class="toolbar-area topbar-style1 hidden-md">
						<div class="container">
							<div class="row rs-vertical-middle">
							   <div class="col-lg-8">
									<div class="toolbar-contact">
										<ul class="rs-contact-info">                   
											<li>
					                            <i class="fi fi-rr-envelope-plus"></i>                  
					                            <a href="mailto:<?= $site['site_mail']; ?>"><?= $site['site_mail']; ?></a>               
					                        </li>
	                                        <li>
                                              	<i class="fi fi-rr-phone-call"></i>                                      
                                                <a href="https://wa.me/<?= $site['site_wa']; ?>"> +<?= $site['site_wa']; ?></a>                   
                                            </li>
                                            <!-- <li>
                                              	<i class="fi-rr-map-marker-home"></i>                                      
                                                503 Ocala Street, Florida, USA              
                                            </li> -->
										</ul>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="toolbar-sl-share">
										<ul class="clearfix">
											<li class="opening"> <em><i class="fi fi-rr-time-add"></i> Mon - Fri: 9.00 to 17.00</em> </li>
											<li><a href="<?= $site['site_facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>                     
											<li><a href="<?= $site['site_instagram']; ?>"><i class="fab fa-instagram"></i></a></li>   
											<li><a href="<?= $site['site_twitter']; ?>"><i class="fa-brands fa-tiktok"></i></a></li>
											<!-- <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>                  -->
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Toolbar Area End -->
					
					<!-- Menu Start -->
					<div class="menu-area menu-sticky">
						<div class="container">
							<div class="row-table">
								<div class="col-cell header-logo">                                  
								    <div class="logo-area">
								        <a href="/">
								            <img class="normal-logo" src="<?= base_url(''); ?>assets/reno/images/logo-dark.png" alt="logo">  
								            <img class="sticky-logo" src="<?= base_url(''); ?>assets/reno/images/logo-dark.png" alt="logo">
								        </a>
								    </div>
								</div>
								<div class="col-cell">
									<div class="rs-menu-area">
										<div class="main-menu">
											<nav class="rs-menu hidden-md">
												<ul class="nav-menu">
													<li>
														<a href="/">Home</a>
													</li>
													<li class="menu-item-has-children">
														<a href="#">Tentang</a>
														<ul class="sub-menu">
															<li><a href="<?= base_url(''); ?>sejarah">Sejarah</a></li>
															<li><a href="<?= base_url(''); ?>vmts">Visi Misi</a></li>
															<li><a href="<?= base_url(''); ?>renstra">Renstra</a></li>
															<li><a href="<?= base_url(''); ?>pengelola">Pengelola</a></li>
															<li><a href="https://lppmi.unusia.ac.id/akreditasi">Akreditasi</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children">
														<a href="#">Program</a>
														<ul class="sub-menu">
															<li class="last-item menu-item-has-children">
															    <a href="#">Program Studi <i class="fi fi-rr-plus-small"></i></a>
															    <ul class="sub-menu">
															        <li><a href="https://unusia.ac.id/prodi/s1ilmuhukum">S1 Ilmu Hukum</a></li>
															        <li><a href="https://unusia.ac.id/prodi/s1hukumkeluarga">S1 Hukum Keluarga</a></li>
															    </ul>
															</li>
															<li><a href="<?= base_url(''); ?>riset">Penelitian</a></li>
															<li><a href="<?= base_url(''); ?>pkm">Pengabdian Masyarakat</a></li>
															<li><a href="<?= base_url(''); ?>upm">Penjaminan Mutu</a></li>
														</ul>
													</li>
		
													<li class="menu-item-has-children">
														<a href="#">Dosen</a>
														<ul class="sub-menu">
															<li class="last-item menu-item-has-children">
															    <a href="#">Data Dosen (dikti) <i class="fi fi-rr-plus-small"></i></a>
															    <ul class="sub-menu">
																<li><a href="https://pddikti.kemdikbud.go.id/detail-prodi/mlC7THBoT0TlQh2zFWkcXa-Jq0DQzt5J7jaRB0f3gBvP-uuD4XPJzmM3hDb0XPAXcQc_Ew==">S1 Ilmu Hukum</a></li>
																<li><a href="https://pddikti.kemdikbud.go.id/detail-prodi/S0zFWLcrTQxt19oY1G1Fdnmp3u5wlKr98A94gXmkMo_i0uNBpogOlSFxySQIRIATf-bUxg==">S1 Hukum Keluarga</a></li>
															</ul>
															</li>
															<!-- <li><a href="#">Data Dosen</a></li> -->
															<li class="last-item menu-item-has-children">
															    <a href="#">Data Dosen (sinta) <i class="fi fi-rr-plus-small"></i></a>
															    <ul class="sub-menu">
															        <li><a href="https://sinta.kemdikbud.go.id/departments/authors/8113/BE378CE8-6194-40A8-BEEF-13CBF2F98870/65A38807-09F4-406A-909D-2D3C5716F8DF">S1 Ilmu Hukum</a></li>
															        <li><a href="https://sinta.kemdikbud.go.id/departments/authors/8113/BE378CE8-6194-40A8-BEEF-13CBF2F98870/856C29AA-4090-406D-B844-18175D3462D3">S1 Hukum Keluarga</a></li>
															    </ul>
															</li>
															<li><a href="<?= base_url(''); ?>publikasidosen">Publikasi Dosen</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children">
														<a href="#">Mahasiswa</a>                                                        
														<ul class="sub-menu">  
															<li><a href="https://pmb.unusia.ac.id/">Penerimaan Mahasiswa</a></li>
															<li><a href="<?= base_url(''); ?>ormawa">Organisasi Mahasiswa</a></li>
															<li><a href="<?= base_url(''); ?>publikasimahasiswa">Publikasi Mahasiswa</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children">
														<a href="#">Alumni</a>
														<ul class="sub-menu">  
															<li><a href="#">Tracer Study</a></li>
															<li><a href="<?= base_url(''); ?>alumni">Ikatan Alumni</a></li>
															<!-- <li><a href="#">Interaksi</a></li> -->
														</ul>
													</li>
													<li class="menu-item-has-children">
														<a href="#">Layanan</a>                                                        
														<ul class="sub-menu">
															<li class="last-item menu-item-has-children">
															    <a href="#">Informasi <i class="fi fi-rr-plus-small"></i></a>
															    <ul class="sub-menu">
															        <li><a href="<?= base_url(''); ?>post">Rilis Berita</a></li>
															        <li><a href="<?= base_url(''); ?>category/pengumuman">Pengumuman</a></li>
																	<li><a href="<?= base_url(''); ?>category/acara">Acara</a></li>
															    </ul>
															</li>  
															<li><a href="https://perpustakaan.unusia.ac.id/">Perpustakaan Digital</a></li>
															<li><a href="<?= base_url(''); ?>labhukum">Laboratorium Hukum</a></li>
															<li><a href="<?= base_url(''); ?>konsulhukum">Konsultasi Hukum</a></li>
															<li><a href="#">Pusdak Unusia</a></li>
															<li><a href="https://sianas.unusia.ac.id/">Sianas Unusia</a></li>
															<li><a href="https://lppmi.unusia.ac.id/pengaduan">Aduan Online</a></li>
														</ul>
													</li>
													
												</ul> <!-- //.nav-menu -->
											</nav>
										</div> <!-- //.main-menu -->
									</div>
								</div>
								<div class="col-cell">
									<div class="expand-btn-inner">
										<ul>
                                            <li class="btn-quote"><a class="quote-button" href="https://wa.me/<?= $site['site_wa']; ?>">Live Chat</a></li>
											<li class="humburger">
											    <a id="nav-expander" class="nav-expander bar" href="#">
											        <div class="bar">
											            <span class="dot1"></span>
											            <span class="dot2"></span>
											            <span class="dot3"></span>
											            <span class="dot4"></span>
											            <span class="dot5"></span>
											            <span class="dot6"></span>
											            <span class="dot7"></span>
											            <span class="dot8"></span>
											            <span class="dot9"></span>
											        </div>
											    </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Menu End -->

					<!-- Canvas Menu start -->
					<nav class="right_menu_togle menu-wrap-off  hidden-md">
					    <div class="close-btn">
					        <a id="nav-close" class="nav-close">
					            <div class="line">
					                <span class="line1"></span>
					                <span class="line2"></span>
					            </div>
					        </a>
					    </div>
					    <div class="rs-offcanvas-inner">
					        <div class="canvas-logo">
					            <a href="index3.html"><img src="<?= base_url(''); ?>assets/reno/images/logo-dark.png" alt="logo"></a>
					        </div>
					        <div class="offcanvas-text">
					            <p>Fakultas Hukum, Universitas Nahdlatul Ulama Indonesia</p>
					        </div>
					        <div class="canvas-contact">
					            <div class="address-area">
					                <div class="address-list">
					                    <div class="info-icon">
					                        <i class="flaticon-location"></i>
					                    </div>
					                    <div class="info-content">
					                        <h4 class="title">Address</h4>
					                        <em>Unusia Jakarta</em>
					                    </div>
					                </div>
					                <div class="address-list">
					                    <div class="info-icon">
					                        <i class="flaticon-email"></i>
					                    </div>
					                    <div class="info-content">
					                        <h4 class="title">Email</h4>
					                        <em><a href="mailto:<?= $site['site_mail']; ?>"><?= $site['site_mail']; ?></a></em>
					                    </div>
					                 </div>
					                <div class="address-list">
					                    <div class="info-icon">
					                      <i class="flaticon-call"></i>
					                    </div>
					                    <div class="info-content">
					                      <h4 class="title">Phone</h4>
					                      <em><?= $site['site_wa']; ?></em>
					                    </div>
					                </div>
					            </div>
					            <ul class="social">
					                <li><a href="<?= $site['site_facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
					                <li><a href="<?= $site['site_twitter']; ?>"><i class="fa fa-tiktok"></i></a></li>
					                <li><a href="<?= $site['site_instagram']; ?>"><i class="fa fa-instagram"></i></a></li>
					                <!-- <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
					            </ul>
					        </div>
					    </div>
					</nav>
					<!-- Canvas Menu end -->

					<!-- Canvas Mobile Menu start -->
					<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
					    <div class="close-btn">
					        <a id="nav-close2" class="nav-close">
					            <div class="line">
					                <span class="line1"></span>
					                <span class="line2"></span>
					            </div>
					        </a>
					    </div>
					    <ul class="nav-menu">
					    	<li>
					    		<a href="/">Home</a>
					    	</li>
					    	<li class="menu-item-has-children">
					    		<a href="#">Tentang</a>
					    		<ul class="sub-menu">
									<li><a href="<?= base_url(''); ?>sejarah">Sejarah</a></li>
									<li><a href="<?= base_url(''); ?>vmts">Visi Misi</a></li>
									<li><a href="<?= base_url(''); ?>renstra">Renstra</a></li>
									<li><a href="<?= base_url(''); ?>pengelola">Pengelola</a></li>
									<li><a href="https://lppmi.unusia.ac.id/akreditasi">Akreditasi</a></li>
					    		</ul>
					    	</li>
					    	<li class="menu-item-has-children">
					    		<a href="#">Program</a>
					    		<ul class="sub-menu">
					    			<li class="last-item menu-item-has-children">
					    			    <a href="#">Program Studi</a>
					    			    <ul class="sub-menu">
											<li><a href="https://unusia.ac.id/prodi/s1ilmuhukum">S1 Ilmu Hukum</a></li>
											<li><a href="https://unusia.ac.id/prodi/s1hukumkeluarga">S1 Hukum Keluarga</a></li>
					    			    </ul>
					    			</li>
					    			<li><a href="<?= base_url(''); ?>riset">Penelitian</a></li>
									<li><a href="<?= base_url(''); ?>pkm">Pengabdian Masyarakat</a></li>
									<li><a href="<?= base_url(''); ?>upm">Penjaminan Mutu</a></li>     
					    		</ul>
					    	</li>
							<li class="menu-item-has-children">
					    		<a href="#">Dosen</a>
					    		<ul class="sub-menu">
									<li class="last-item menu-item-has-children">
					    			    <a href="#">Data Dosen (Dikti)</a>
					    			    <ul class="sub-menu">
											<li><a href="https://pddikti.kemdikbud.go.id/detail-prodi/mlC7THBoT0TlQh2zFWkcXa-Jq0DQzt5J7jaRB0f3gBvP-uuD4XPJzmM3hDb0XPAXcQc_Ew==">S1 Ilmu Hukum</a></li>
											<li><a href="https://pddikti.kemdikbud.go.id/detail-prodi/S0zFWLcrTQxt19oY1G1Fdnmp3u5wlKr98A94gXmkMo_i0uNBpogOlSFxySQIRIATf-bUxg==">S1 Hukum Keluarga</a></li>
					    			    </ul>
					    			</li>
					    			<li class="last-item menu-item-has-children">
					    			    <a href="#">Data Dosen (Sinta)</a>
										<ul class="sub-menu">
											<li><a href="https://sinta.kemdikbud.go.id/departments/authors/8113/BE378CE8-6194-40A8-BEEF-13CBF2F98870/65A38807-09F4-406A-909D-2D3C5716F8DF">S1 Ilmu Hukum</a></li>
											<li><a href="https://sinta.kemdikbud.go.id/departments/authors/8113/BE378CE8-6194-40A8-BEEF-13CBF2F98870/856C29AA-4090-406D-B844-18175D3462D3">S1 Hukum Keluarga</a></li>
										</ul>
					    			</li>
					    			<li><a href="<?= base_url(''); ?>publikasidosen">Publikasi Dosen</a></li>     
					    		</ul>
					    	</li>
					    	<li class="menu-item-has-children">
					    		<a href="#">Mahasiswa</a>
					    		<ul class="sub-menu">
									<li><a href="https://pmb.unusia.ac.id/">Penerimaan Mahasiswa</a></li>
									<li><a href="<?= base_url(''); ?>ormawa">Organisasi Mahasiswa</a></li>
									<li><a href="<?= base_url(''); ?>publikasimahasiswa">Publikasi Mahasiswa</a></li>
					    		</ul>
					    	</li>
							<li class="menu-item-has-children">
					    		<a href="#">Alumni</a>
					    		<ul class="sub-menu">
									<li><a href="#">Tracer Study</a></li>
									<li><a href="<?= base_url(''); ?>alumni">Ikatan Alumni</a></li>
					    		</ul>
					    	</li>
							<li class="menu-item-has-children">
					    		<a href="#">Layanan</a>
					    		<ul class="sub-menu">
									<li class="last-item menu-item-has-children">
					    			    <a href="#">Informasi</a>
					    			    <ul class="sub-menu">
											<li><a href="<?= base_url(''); ?>post">Rilis Berita</a></li>
											<li><a href="<?= base_url(''); ?>category/pengumuman">Pengumuman</a></li>
											<li><a href="<?= base_url(''); ?>category/acara">Acara</a></li>
					    			    </ul>
					    			</li>
									<li><a href="https://perpustakaan.unusia.ac.id/">Perpustakaan Digital</a></li>
									<li><a href="<?= base_url(''); ?>labhukum">Laboratorium Hukum</a></li>
									<li><a href="<?= base_url(''); ?>konsulhukum">Konsultasi Hukum</a></li>
									<li><a href="#">Pusdak Unusia</a></li>
									<li><a href="https://sianas.unusia.ac.id/">Sianas Unusia</a></li>
									<li><a href="https://lppmi.unusia.ac.id/pengaduan">Aduan Online</a></li>
					    		</ul>
								
					    	</li>
					    </ul> <!-- //.nav-menu -->
					    <!-- //.nav-menu -->
					   
					    <!-- //.nav-menu -->
					    <div class="canvas-contact">
					          <div class="address-area">
					              <div class="address-list">
					                  <div class="info-icon">
					                      <i class="flaticon-location"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">Address</h4>
					                      <em>Unusia Jakarta</em>
					                  </div>
					              </div>
					              <div class="address-list">
					                  <div class="info-icon">
					                      <i class="flaticon-email"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">Email</h4>
					                      <em><a href="mailto:<?= $site['site_mail']; ?>"><?= $site['site_mail']; ?></a></em>
					                  </div>
					              </div>
					              <div class="address-list">
					                  <div class="info-icon">
					                      <i class="flaticon-call"></i>
					                  </div>
					                  <div class="info-content">
					                      <h4 class="title">Phone</h4>
					                      <em>+<?= $site['site_wa']; ?></em>
					                  </div>
					              </div>
					          </div>
					    </div>
					</nav>
					<!-- Canvas Menu end -->                             
				</header>
				<!--Header End-->
			</div>
			<!--Full width header End-->
