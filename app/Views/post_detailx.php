<?= $this->extend('layout/template-posty'); ?>
<?= $this->section('content'); ?>
        
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="post">
                  <div class="post-thumbnail"><img src="/assets/backend/images/post/<?= $post['post_image']; ?>" alt="Blog Featured Image"/></div>
                  <div class="post-header font-alt">
                    <h1 class="post-title"><?= $post['post_title']; ?></h1>
                    <div class="post-meta">By&nbsp;<a href="/author/<?= $post['post_user_id']; ?>"><?= $post['user_name']; ?></a> | <time datetime="2020-01-01"><?= date('d M Y', strtotime($post['post_date'])); ?></time> | <a href="/category/<?= $post['category_slug']; ?>"><?= $post['category_slug']; ?> </a>
                    </div>
                  </div>
                  <div class="post-entry">
                    <?= $post['post_contents']; ?>
                  </div>
                  <br>
                  <div class="post-entry">
                  </div>
                </div>
                
              </div>
              <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                <div class="widget">
                  <form role="form" action="/search" method="GET">
                    <div class="search-box">
                      <input class="form-control" type="text" name="search_query" placeholder="Search..."/>
                      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <?php foreach ($categories as $categ) : ?>
                        <li><a href="#"><?= $categ['category_name']; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Related Posts</h5>
                  <ul class="widget-posts">
                    <?php foreach ($related_post as $row) : ?>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="/post/<?= $row['post_slug']; ?>"><img src="/assets/backend/images/post/<?= $row['post_image']; ?>" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="/post/<?= $row['post_slug']; ?>"><?= $row['post_title']; ?></a></div>
                        <div class="widget-posts-meta"><time datetime="2020-01-01"><?= date('d M Y', strtotime($row['post_date'])); ?></time></div>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Tag</h5>
                  <div class="tags font-serif">
                    <?php foreach ($tags as $tag) : ?>
                        <a href="/tag/<?= $tag['tag_name']; ?>" rel="tag"><?= $tag['tag_name']; ?></a>
                    <?php endforeach; ?>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
    
<?= $this->endSection(); ?>