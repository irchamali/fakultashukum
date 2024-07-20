<?= $this->extend('layout/template-home'); ?>
<?= $this->section('content'); ?>

    <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" id="home" data-background="assets/titan/images/agency/agency_bg.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Teknik Informatika Unusia</div>
            <div class="font-alt mb-40 titan-title-size-3">Kuliah <span class="rotate">Komputasi | Sains Data | Pemrograman | Jaringan</span>
            </div><a class="section-scroll btn btn-border-w btn-circle" href="#profil">Learn More</a>
          </div>
        </div>
      </section>
      <div class="main">
      <section class="module" id="alt-features">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Teknik Informatika</h2>
                <div class="module-subtitle font-serif">Kenali lebih dekat ranah keilmuan atau area pengetahuan yang diajarkan pada bidang Teknik Informatika atau Ilmu Komputer.</div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                  <h3 class="alt-features-title font-alt">Data System</h3>terkait dengan pengetahuan yang mempelajari sistem ke-“data”-an sebagai atom konteks terkecil dalam sebuah lingkungan berbasis informatika;
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                  <h3 class="alt-features-title font-alt">Algorithm</h3>terkait dengan pengetahuan berfikir secara logis dan terstruktur dalam rangka memecahkan permasalahan tertentu atau mencapai obyektif tertentu;
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-target"></span></div>
                  <h3 class="alt-features-title font-alt">Program Building</h3>terkait dengan kemampuan membangun program sebagai suatu perangkat lunak yang dapat menjalankan fungsi spesifik tertentu;
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-tools"></span></div>
                  <h3 class="alt-features-title font-alt">Computer Application</h3>terkait dengan pengetahuan dan kemampuan menggabungkan sejumlah modul-modul program dalam rangka membuat sebuah aplikasi dengan fitur-fitur yang diinginkan;
                </div>
              </div>
              <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                <div class="alt-services-image align-center"><img src="assets/titan/images/promo.png" alt="Feature Image"></div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-camera"></span></div>
                  <h3 class="alt-features-title font-alt">Information System</h3>terkait dengan pengetahuan membangun sebuah sistem informasi yang terdiri dari komponen-komponen yang terkait satu dengan lainnya dalam sebuah lingkungan yang holistik;
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                  <h3 class="alt-features-title font-alt">Computer and Device</h3>terkait dengan pemahaman terhadap cara kerja mesin komputasi beserta piranti lain pendukungnya;
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                  <h3 class="alt-features-title font-alt">Intelligent System</h3>terkait dengan pemahaman dalam merancang dan membangun sistem cerdas untuk berbagai kebutuhan aktivitas kehidupan manusia yang memberikan nilai tambah;
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-basket"></span></div>
                  <h3 class="alt-features-title font-alt">Network and Communication</h3>terkait dengan pengetahuan mengenai seluk beluk jejaring komputer beserta mekanisme protokol komunikasinya;
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark-60" id="profil" data-background="assets/titan/images/section-6.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="video-box">
                  <div class="video-box-icon"><a class="video-pop-up" href="https://www.youtube.com/watch?v=yPGNLD3cVLs"><span class="icon-video"></span></a></div>
                  <div class="video-title font-alt">Video Profil</div>
                  <div class="video-subtitle font-alt">Watch the video about our study program</div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Latest posts</h2>
              </div>
            </div>
            <div class="row multi-columns-row post-columns">
              <?php foreach ($latest_posts as $post) : ?>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="post mb-20">
                    <div class="post-thumbnail"><a href="/post/<?= $post['post_slug']; ?>"><img src="/assets/backend/images/post/<?= $post['post_image']; ?>" alt="Blog-post Thumbnail"/></a></div>
                    <div class="post-header font-alt">
                      <h2 class="post-title"><a href="/post/<?= $post['post_slug']; ?>"><?= $post['post_title']; ?></a></h2>
                      <div class="post-meta">By&nbsp;<a href=""><?= $post['user_name']; ?></a>&nbsp;| <time datetime="2022-01-01"><?= date('d M Y', strtotime($post['post_date'])); ?></time> 
                      </div>
                    </div>
                    <div class="post-entry">
                      <!-- <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p> -->
                    </div>
                    <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                  </div>
                </div>
              <?php endforeach; ?>
              
            </div>
          </div>
        </section>

        <!-- <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h4 class="font-alt mb-30">Frequently Asked Questions</h4>
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Support Question 1</a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="support1">
                      <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Support Question 2</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="support2">
                      <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support3">Support Question 3</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="support3">
                      <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support4">Support Question 4</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="support4">
                      <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <h4 class="font-alt mb-30">Our Expertises</h4>
                <h6 class="font-alt"><span class="icon-tools-2"></span> Development
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-strategy"></span> Branding
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-target"></span> Marketing
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-camera"></span> Photography
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-pencil"></span> Designing
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="70" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
                <h6 class="font-alt"><span class="icon-lifesaver"></span> Dedication
                </h6>
                <div class="progress">
                  <div class="progress-bar pb-dark" aria-valuenow="100" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="assets/titan/images/testimonial_bg.jpg">
          <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
            <?php foreach ($testimonials as $testi) : ?>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt"><?= $testi['testimonial_content']; ?></blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title"><?= $testi['testimonial_name']; ?></div>
                          <div class="testimonial-descr"><?= $testi['testimonial_angkatan']; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
            </ul>
          </div>
        </section>
        <section class="module-small">
          <div class="container">
            <div class="row client">
              <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
              <?php foreach ($members as $member) : ?>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="<?= 'assets/backend/images/member/' . $member['member_image']; ?>" alt="Client Logo"/></div>
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </section>
        
        <hr class="divider-w">

<?= $this->endSection(); ?>