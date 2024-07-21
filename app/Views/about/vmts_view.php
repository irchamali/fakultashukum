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
		
			<!-- Faq Start -->
			<div class="rs-faq faq-style1 faq-modify1 pt-120 pb-120 md-pt-80 md-pb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 pr-60 md-pr-15 md-mb-50">
							<div class="faq-content">
                               	<div id="accordion" class="accordion">
                                  	<div class="card">
                                      	<div class="card-header">
                                        	<a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">VISI</a>
                                      	</div>
                                      	<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                          	<div class="card-body">
                                              Pada Tahun 2025 menjadi Fakultas Hukum Unusia Unggul, berkualitas dan berdaya saing global berkarakter Ahli Sunnah Wal Jamaah. 
                                          	</div>
                                     	</div>
                                  	</div>
                                   	<div class="card">
                                       	<div class="card-header">
                                           <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">MISI</a>
                                       	</div>
                                       	<div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                           	<div class="card-body">
                                                1. Meningkatkan pendidikan hukum yang relevan dengan kebutuhan masyarakat dan dapat diakses oleh semua kalangan; <br>
                                                2. Membangun profesionalitas sistem layanan pengajaran, penelitian dan pengabdian masyarakat baik kepada tenaga kependidikan dan/atau mahasiswa Fakultas Hukum Unusia;<br>
                                                3. Mengembangkan mutu tata kelola kelembagaan dan memperluas jaringan kerjasama di bidang hukum;<br>
                                                4. Melahirkan lulusan yang kompeten dan berdaya saing dibidang hukum dengan tetap menjunjung tinggi islam ala manhaj Ahlussunnah Wal jamaah.
                                           	</div>
                                       	</div>
                                   	</div>
                                   	<div class="card">
                                       	<div class="card-header">
                                           <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">TUJUAN</a>
                                       	</div>
                                       	<div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                                           	<div class="card-body">
                                                1. Terwujudnya pendidikan hukum yang relevan dengan kebutuhan masyarakat dan dapat diakses oleh semua kalangan;<br>
                                                2. Terbentuknya sistem layanan yang profesional dibidang pengajaran, penelitian dan pengabdian masyarakat;<br>
                                                3. Terciptanya tata kelola kelembagaan yang bermutu dan memiliki jaringan luas dibidang hukum;<br>
                                                4. Terwujudnya lulusan fakultas hukum yang memiliki kompetensi dan berdaya saing global dengan tetap memegang teguh nilai islam ahlusunnah wal jamaah.
                                           	</div>
                                       	</div>
                                  	</div>
                                  	<div class="card">
                                       	<div class="card-header">
                                           <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">STRATEGI</a>
                                       	</div>
                                       	<div id="collapseFour" class="collapse" data-bs-parent="#accordion" style="">
                                           	<div class="card-body">
                                                1. Terselenggaranya pendidikan yang bermutu dan dapat diaksesoleh semua kalangan dan berbasis pada nilai Aswaja;<br>
                                                2. Tersedianya SDM yang memiliki kualifikasi akademik dan kompetensi yang unggul;<br>
                                                3. Terwujudnya penelitian dalam rangka pengembangan ilmu pengetahuan dan teknologi bidang hukum berbasis nilai Aswaja;<br>
                                                4. Terwujudnya program pengabdian kepada masyarakat yang berorientasi pada peningkatan wawasan dan kesejahtraan manusia;<br>
                                                5. Terciptanya inovasi dosen/mahasiswa yang dimanfaatkan oleh masyarakat/ perusahaan/pemerintah;<br>
                                                6. Terwujudnya kajian yang komprehensif dan mendalam dalam rangka pengembangan bidang hukum;<br>
                                                7. Terwujudnya tata kelola yang profesional sesuai dengan perkembangan Ilmu Pengetahuan dan Teknologi Informasi Komunikasi (TIK);<br>
                                                8. Terwujudnya kerjasama yang sinergis dengan pemerintah, pihak swasta, atau perguruan tinggi lain baik dalam dan luar;<br>
                                                9. Terwujudnya lulusan yang memiliki kemampuan kerja, penguasaan pengetahuan, kemampuan manajerial, dan bertanggung jawab sesuai dengan bidang hukum.
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
			<!-- Faq End -->
<?= $this->endSection(); ?>