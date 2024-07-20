<?= $this->extend('layout/template-page'); ?>
<?= $this->section('content'); ?>
  <!-- ======= Breadcrumbs ======= -->
  <?= $this->include('layout/breadcrumbsx'); ?>
  <!-- End Breadcrumbs -->
    <div class="main">
        <section class="module">
          <div class="container">
            <h4>Mata Kuliah Peminatan: Software Development</h4>
            <hr class="divider-w pt-10">
            <div class="row">
                <div class="col-sm-7 col-md-6">
                    <div class="panel-group" id="accordion">
                        <!-- semester5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#semester5">Semester 5</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="semester5">
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-border checkout-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="hidden-xs">Kode</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>SKS</th>
                                                    <th>Ket.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td class="hidden-xs">
                                                        TI3538
                                                    </td>
                                                    <td>
                                                        Pengembangan Aplikasi Mobile
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td class="hidden-xs">
                                                        TI3539
                                                    </td>
                                                    <td>
                                                        Aplikasi Berbasis Service
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- semester6 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#semester6">Semester 6</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="semester6">
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-border checkout-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="hidden-xs">Kode</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>SKS</th>
                                                    <th>Ket.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td class="hidden-xs">
                                                        TI3641	
                                                    </td>
                                                    <td>
                                                        Pengembangan Aplikasi Web Framework
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td class="hidden-xs">
                                                        TI3640
                                                    </td>
                                                    <td>
                                                        Pengembangan Aplikasi Desktop
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- semester7 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#semester7">Semester 7</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="semester7">
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-border checkout-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="hidden-xs">Kode</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>SKS</th>
                                                    <th>Ket.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td class="hidden-xs">
                                                        TI4742
                                                    </td>
                                                    <td>
                                                        Manajemen Proyek Perangkat Lunak
                                                    </td>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td class="hidden-xs">
                                                        TI4743
                                                    </td>
                                                    <td>
                                                        Quality Assurance Perangkat Lunak
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar bahan kajian -->
                  <div class="col-sm-5 col-md-4 col-md-offset-1 sidebar">
                    <?= $this->include('layout/sidebar-bk'); ?>
                  </div>
            </div>
          </div>
        </section>
    </div>

<?= $this->endSection(); ?>