<?= $this->extend('layout/template-page'); ?>
<?= $this->section('content'); ?>
  <!-- ======= Breadcrumbs ======= -->
  <?= $this->include('layout/breadcrumbsx'); ?>
  <!-- End Breadcrumbs -->
    <div class="main">
        <section class="module">
          <div class="container">
            <h4>Mata Kuliah Peminatan: <?= $title; ?></h4>
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
                                                        TI3550 
                                                    </td>
                                                    <td>
                                                        Advance Machine Learning
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
                                                        TI3551
                                                    </td>
                                                    <td>
                                                        Representasi Pengetahuan
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
                                                        TI3652
                                                    </td>
                                                    <td>
                                                        Natural Language Processing
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
                                                        TI3653
                                                    </td>
                                                    <td>
                                                        Data Modeling
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
                                                        TI4754
                                                    </td>
                                                    <td>
                                                        Digital Forensics
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
                                                        TI4755
                                                    </td>
                                                    <td>
                                                        Data Mining
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