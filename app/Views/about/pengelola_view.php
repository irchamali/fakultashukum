<?= $this->extend('layout/template-page'); ?>
<?= $this->section('content'); ?>
  <!-- ======= Breadcrumbs ======= -->
  <?= $this->include('layout/breadcrumbsx'); ?>
  <!-- End Breadcrumbs -->

        <section class="module" id="team">
          <div class="container">
            <!-- <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Meet Our Team</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div> -->
            <div class="row">
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/titan/images/dosen/ti-ircham.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Halo Semua!</h5>
                      <p class="font-serif">Salam kenal dan sampai jumpa di perkuliahan ya.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Ircham Ali, S.Kom., M.Kom</div>
                    <div class="team-role">Ketua Program Studi</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/titan/images/dosen/ti-aljabar.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                    <h5 class="font-alt">Halo Semua!</h5>
                      <p class="font-serif">Salam kenal dan sampai jumpa di perkuliahan ya.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Andi Aljabar, S.Kom., M.T.I</div>
                    <div class="team-role">Sekretaris Program Studi</div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </section>


<?= $this->endSection(); ?>