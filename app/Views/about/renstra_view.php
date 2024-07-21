<?= $this->extend('layouts/template-page'); ?>
<?= $this->section('content'); ?>
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img1">
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
		
			<!-- Services Single Start -->
			<div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
			   <div class="container">
			        <div class="row">
			            <div class="col-lg-8 md-mb-50">
			                
			                <div class="services-title pb-24">
			                    <h2 class="title">Rencana Strategis <br>Fakultas Hukum 2021-2025</h2>
			                </div>
                      <!-- Counter Section Start -->
			                  <div class="rs-counter counter-style3 pt-20 pb-55">
			                    <div class="row">
			                    	<div class="col-lg-12 col-md-12 sm-mb-30">
			                    		<div class="rs-counter-list">
			                    			<div class="counter-text">
                                <iframe src="https://drive.google.com/file/d/1HZnSc9C4SvuEHI5Y558-y-1RtbLkiz2F/preview" width="100%" height="680" allow="autoplay"></iframe>	
			                    			</div>
			                    		</div>
			                    	</div>
			                    	
			                    </div>
			                  </div>
			                
			            </div>
			            <?= $this->include('layouts/sidebar'); ?>
			        </div> 
			   </div> 
			</div>
			<!-- Services Single End -->
<?= $this->endSection(); ?>