<?= $this->extend('layout/template-page'); ?>
<?= $this->section('content'); ?>
  <!-- ======= Breadcrumbs ======= -->
  <?= $this->include('layout/breadcrumbsx'); ?>
  <!-- End Breadcrumbs -->

        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h4 class="font-alt mb-0">Teknik Informatika Unusia</h4>
                <hr class="divider-w mt-10 mb-20">
                <div role="tabpanel">
                  <ul class="nav nav-tabs font-alt" role="tablist">
                    <li class="active"><a href="#tentang" data-toggle="tab"><span class="icon-ribbon"></span> Profil</a></li>
                    <li><a href="#capaian" data-toggle="tab"><span class="icon-lightbulb"></span> Lulusan</a></li>
                    <li><a href="#kepemimpinan" data-toggle="tab"><span class="icon-profile-male"></span> Kepemimpinan</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tentang"><?= $about['about_description']; ?>
                    </div>
                    <div class="tab-pane" id="capaian">
                      <img src="/assets/backend/images/about/profil_lulusan.png" alt="" width="100%">
                    </div>
                    <div class="tab-pane" id="kepemimpinan">
                      <h5>Ketua Program Studi dari Masa ke Masa</h5>
                    <div class="row">
                      <div class="col-sm-12">
                          <table class="table table-striped table-border checkout-table">
                            <thead>
                              <tr>
                                <th class="hidden-xs">#</th>
                                <th>Nama</th>
                                <th>Periode</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td class="hidden-xs">
                                      1
                                  </td>
                                  <td>
                                      Ahmad Musyafa, S.Kom., M.Kom
                                  </td>
                                  <td>
                                      2016-2018
                                  </td>
                              </tr>
                                  <td class="hidden-xs">
                                      2
                                  </td>
                                  <td>
                                      Irpan Kusyadi, S.Kom., M.Kom
                                  </td>
                                  <td>
                                      2018-2020
                                  </td>
                              </tr>
                                  <td class="hidden-xs">
                                      3
                                  </td>
                                  <td>
                                      Musaid Purnomo Juwono, S.T., M.T.I
                                  </td>
                                  <td>
                                      2020-2021
                                  </td>
                              </tr>
                              </tr>
                                  <td class="hidden-xs">
                                      4
                                  </td>
                                  <td>
                                      Fezan Nabawi, M.M., M.Kom
                                  </td>
                                  <td>
                                      Mar-Nov 2021
                                  </td>
                              </tr>
                                  <td class="hidden-xs">
                                      5
                                  </td>
                                  <td>
                                      Ircham Ali, S.Kom., M.Kom
                                  </td>
                                  <td>
                                      2021-2025
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="divider-w mt-5 mb-30">

                <h4 class="font-alt mb-0">VMTS</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#visi">Visi</a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="visi">
                      <div class="panel-body"><?= $about['about_visi']; ?>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#misi">Misi</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="misi">
                      <div class="panel-body">
                        <ol>
                          <li> Menyelenggarakan pendidikan program sarjana yang berstandar nasional untuk bidang teknik informatika, khususnya pada rekayasa perangkat lunak dan sistem cerdas; Melaksanakan penelitian dalam rangka pengembangan ilmu pengetahuan dan teknologi yang berwujud perangkat lunak dengan konsep sistem cerdas; </li>
                          <li>Berpartisipasi dalam memberikan layanan kepada masyarakat dan komunitas profesi bidang Teknik Informatika, khususnya komunitas yang relevan dengan pengembangan perangkat lunak dan sistem cerdas; </li>
                          <li> Berkolaborasi dengan stakeholder pemerintah, industri, maupun alumni, dalam rangka mengembangkan bisnis digital dalam bidang Teknik Informatika atau bidang lainnya yang relevan dengan ilmu komputasi.</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tujuan">Tujuan</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="tujuan">
                      <div class="panel-body">
                        <ol>
                          <li> Dihasilkannya lulusan yang memiliki kompetensi secara nasional di bidang Teknik Informatika khususnya bidang rekayasa perangkat lunak dan sistem cerdas yang berkarakter ahlussunah waljamaah; </li>
                          <li>Dihasilkannya karya ilmiah pada bidang Teknik Informatika khususnya bidang rekayasa perangkat lunak dan sistem cerdas, yang kemudian disebarluaskan pada publikasi terindeks secara nasional; </li>
                          <li> Dilaksanakannya kegiatan dan implementasi kewirausahaan berbasis digital yang berkontribusi dalam peningkatan kesejahteraan masyarakat;</li>
                          <li>Melaksanakan tata kelola program studi teknik informatika secara profesional dan berbasis teknologi.</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#strategi">Strategi</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="strategi">
                      <div class="panel-body">
                        <ol>
                          <li><b>Kurikulum</b>: Kurikulum yang disusun pada program studi S1 Teknik Informatika merupakan kurikulum yang berbasis KKNI/OBE dan menuju pengembangan kurikulum MBKM; </li>
                          <li><b>Tata Kelola</b>: Melaksanakan tata kelola program studi secara profesional sesuai prinsip continuous quality improvement; </li>
                          <li><b>Sumber Daya Manusia</b>: Pengembangan kualitas dan kuantitas dosen dan mahasiswa dilakukan berdasarkan kompetensi yang dibutuhkan di program studi teknik Informatika;</li>
                          <li><b>Infrastruktur</b>: Sarana pembelajaran seperti ruang kuliah dan laboratorium komputer dipersiapkan dengan baik dengan didukung sarana dan prasarana yang baik; </li>
                          <li><b>Penelitian dan Pengabdian</b>: Meningkatkan produk penelitian atau publikasi ilmiah dan pengabdian masyarakat secara mandiri maupun kolaborasi dosen dengan mahasiswa dan lintas institusi.</li>
                        </ol>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?= $this->endSection(); ?>