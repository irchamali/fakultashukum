<?= $this->extend('layouts/template-page'); ?>
<?= $this->section('content'); ?>
      <!-- Breadcrumbs Start -->
      <div class="rs-breadcrumbs img3">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			                <?= $title; ?>
			                <span class="watermark">FH UNUSIA</span>
			            </h1>
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->
        <div class="rs-team team-style1 team-modify1 pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
			    	<div class="row">
              <?php foreach ($teams as $row) : ?>
			    		<div class="col-lg-3 col-md-6 mb-25">
			    			<div class="team-item">
			    				<div class="team-inner-wrap">
			    					<div class="image-wrap">
			    						<a href="#"><img src="/assets/backend/images/team/<?= $row['team_image']; ?>" alt="Images"></a>
			    						<div class="social-icons">
			    							<a href="#"><i class="fab fa-facebook-f"></i></a>
			    							<a href="#"><i class="fab fa-instagram"></i></a>
			    							<a href="#"><i class="fab fa-linkedin"></i></a> 
			    						</div>
			    					</div>
			    					<div class="team-content">
									  <h3 class="team-name"><a href="#"><?= $row['team_name']; ?></a></h3>
									  <span class="team-title"><?= $row['team_jabatan']; ?></span>
									</div>
			    				</div>
			    			</div>
			    		</div>
			    		<?php endforeach; ?>
            </div>  
			    	</div>
			    </div>
			</div>

<?= $this->endSection(); ?>