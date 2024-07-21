<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>            
            <!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs img4">
			    <!-- <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			                Rilis Berita
			            </h1>
			        </div>
			    </div> -->
			</div>
			<!-- Breadcrumbs End -->

			<!-- Blog Section Start -->
			<div class="rs-inner-blog pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-12 col-md-6 md-mb-50">
			                <div class="row">
                                <?php foreach ($posts as $post) : ?>
			                    <div class="col-lg-4 mb-50">
			                        <div class="blog-item">
			                            <div class="blog-img">
			                                <a href="/post/<?= $post['post_slug']; ?>"><img src="<?= base_url(''); ?>/assets/backend/images/post/<?= $post['post_image']; ?>" alt=""></a>
			                                <ul class="post-categories">
                                                <li><a href="#"><?= $post['category_name']; ?></a></li>
                                            </ul>
			                            </div>
			                            <div class="blog-content">
			                                <h3 class="blog-title"><a href="/post/<?= $post['post_slug']; ?>"><?= $post['post_title']; ?></a></h3>
			                                <div class="blog-meta">
			                                    <ul class="btm-cate">
			                                        <li>
			                                            <div class="blog-date">
			                                                <i class="fi fi-rr-calendar"></i> <time datetime="2022-01-01"><?= date('d M Y', strtotime($post['post_date'])); ?></time> 
			                                            </div>
			                                        </li> 
			                                        <li>
			                                            <div class="gudevsdesign">
			                                            	<i class="fi fi-rr-user"></i> <?= $post['user_name']; ?> 
			                                            </div>
			                                        </li> 
			                                    </ul>
			                                </div>
			                                <!-- <div class="blog-desc">   
			                                    We denounce with righteous indige nation and dislike men who are so beguiled    
			                                </div> -->
			                                <!-- <div class="blog-button blog-inner-btn">
			                                    <a class="blog-btn" href="/post/<?= $post['post_slug']; ?>">Continue Reading</a>
			                                </div> -->
			                            </div>
			                        </div>
			                    </div>
			                    <?php endforeach; ?>
			                    <div class="col-lg-12 text-center pt-40">
                                    <ul class="pagination-part">
                                        <?= $pager->links('posts', 'post_pagination') ?>
                                        <!-- <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a class="next-page" href="#">Next</a></li> -->
                                    </ul> 
                                </div>
			                </div>
			            </div>
			            
			        </div> 
			    </div>
			</div>
			<!-- Blog Section End -->

<?= $this->endSection(); ?>