<?= $this->extend('layout/template-postx'); ?>
<?= $this->section('content'); ?>
    <!-- ======= Breadcrumbs ======= -->
    <?= $this->include('layout/breadcrumbsx'); ?>
    <!-- End Breadcrumbs -->
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row post-columns">
                <?php foreach ($posts as $post) : ?>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                    <div class="post-thumbnail"><a href="/post/<?= $post['post_slug']; ?>"><img src="<?= base_url(''); ?>/assets/backend/images/post/<?= $post['post_image']; ?>" alt="Blog-post Thumbnail"/></a></div>
                    <div class="post-header font-alt">
                        <h2 class="post-title"><a href="/post/<?= $post['post_slug']; ?>"><?= $post['post_title']; ?></a></h2>
                        <div class="post-meta">By&nbsp;<a href="#"><?= $post['user_name']; ?></a>&nbsp;| <time datetime="2022-01-01"><?= date('d M Y', strtotime($post['post_date'])); ?></time>
                        </div>
                    </div>
                    <div class="post-entry">
                        <!-- <p>Text..</p> -->
                    </div>
                    <div class="post-more"><a class="more-link" href="/post/<?= $post['post_slug']; ?>">Read more</a></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination font-alt">
                <?= $pager->links('posts', 'post_pagination') ?>
                <!-- <a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a> -->
            </div>
          </div>
        </section>

<?= $this->endSection(); ?>