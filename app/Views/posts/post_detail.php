<?= $this->extend('layouts/template-post'); ?>
<?= $this->section('content'); ?>

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-8 md-mb-50">
			                <div class="blog-details">
			                    <div class="bs-img mb-35">
			                        <a href="#"><img src="/assets/backend/images/post/<?= $post['post_image']; ?>" alt=""></a>
			                    </div>
			                    <div class="blog-full">
			                        <ul class="single-post-meta">
			                            <li>
			                                <span class="p-date"><i class="fi fi-rr-calendar"></i> <time datetime="2020-01-01"><?= date('d M Y', strtotime($post['post_date'])); ?></time> </span>
			                            </li> 
			                            <li>
			                                <span class="p-date"> <i class="fi fi-rr-user"></i> <?= $post['user_name']; ?> </span>
			                            </li> 
			                            <li class="Post-cate">
			                                <div class="tag-line">
			                                    <i class="fa fa-book"></i>
			                                    <a href="/category/<?= $post['category_slug']; ?>"><?= $post['category_slug']; ?></a>
			                                </div>
			                            </li>
			                            
			                        </ul>
			                        
			                        <h3 class="title pb-24"><?= $post['post_title']; ?></h3>
			                        <p>
                                        <?= $post['post_contents']; ?>
			                        </p>
			                        
			                        <div class="bs-info">
                        				Tags: 
                                        <?php foreach ($post_tags as $tag) : ?>
                        				    <a href="/tag/<?= $tag; ?>"><?= $tag; ?></a>
                        				<?php endforeach; ?>
                        			</div>
			                        
			                    </div>
			                </div>
			            </div>
			            <div class="col-lg-4 col-md-12 pl-25 md-pl-15">
			                <div class="widget-area">
			                    <div class="search-widget mb-50">
			                        <div class="search-wrap">
                                        <form action="/search" method="GET" class="mt-3">
											<input type="search" placeholder="Search..." name="search_query" class="search-input" required>
											<button type="submit" value="Search"><br><i class="flaticon-search"></i></button>
                                        </form>
			                        </div>
			                    </div>
			                    <div class="recent-posts mb-50">
			                        <div class="widget-title">
			                            <h3 class="title">Recent Posts</h3>
			                        </div>
                                    <?php foreach ($related_post as $row) : ?>
			                        <div class="recent-post-widget no-border">
			                            <div class="post-img">
			                                <a href="/post/<?= $row['post_slug']; ?>"><img src="/assets/backend/images/post/<?= $row['post_image']; ?>" alt=""></a>
			                            </div>
			                            <div class="post-desc">
			                                <a href="/post/<?= $row['post_slug']; ?>"><?= $row['post_title']; ?></a>
			                                <span class="date-post"> <i class="fi fi-rr-calendar"></i><time datetime="2020-01-01"><?= date('d M Y', strtotime($row['post_date'])); ?></time></span>
			                            </div>
			                        </div>
			                        <?php endforeach; ?>
			                    </div>
			                    <div class="categories mb-50">
                                    <div class="widget-title mb-15">
                                        <h3 class="title">Categories</h3>
                                    </div>
                                    <ul>
                                        <?php foreach ($categories as $categ) : ?>
                                            <li><a href="#"><?= $categ['category_name']; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
			                    <div class="tags-cloud">
			                        <div class="widget-title pb-23">
			                            <h3 class="title">Tags</h3>
			                        </div>
			                        <div class="tagcloud">
                                        <?php foreach ($tags as $tag) : ?>
                                            <a href="/tag/<?= $tag['tag_name']; ?>" rel="tag"><?= $tag['tag_name']; ?></a>
                                        <?php endforeach; ?>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div> 
			    </div>
			</div>
			<!-- Blog Section End -->

<?= $this->endSection(); ?>