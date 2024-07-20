<?= $this->extend('layout/template-page'); ?>
<?= $this->section('content'); ?>
  <!-- ======= Breadcrumbs ======= -->
  <?= $this->include('layout/breadcrumbsx'); ?>
  <!-- End Breadcrumbs -->

        <section class="module" id="team">
            <div class="container">
            
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="mytable" class="display table table-hover" style="width: 100%; ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Photo</th>
                                                <th>Nama </th>
                                                <th>NIDN</th>                    
                                                <th>Fokus Keahlian</th>
                                                <th>Google Scholar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-table">
                                            <?php
                                            $no = 0;
                                            foreach ($teams as $row) :
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $no; ?></td>
                                                    <td style="vertical-align: middle;">
                                                        <?php if (empty($row['team_image'])) : ?>
                                                            <img class="img-circle" width="50" src="/assets/backend/images/team/user_blank.jpg">
                                                        <?php else : ?>
                                                            <img class="img-circle" width="50" src="/assets/backend/images/team/<?= $row['team_image']; ?>">
                                                        <?php endif; ?>
                                                    </td>
                                                    <td style="vertical-align: middle;"><?= $row['team_name']; ?></td>
                                                    <td style="vertical-align: middle;"><?= $row['team_twitter']; ?></td>
                                                    <td style="vertical-align: middle;"><?= $row['team_facebook']; ?></td>
                                                    <td style="vertical-align: middle;"><a href="<?= $row['team_instagram']; ?>"><?= $row['team_instagram']; ?></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>


<?= $this->endSection(); ?>