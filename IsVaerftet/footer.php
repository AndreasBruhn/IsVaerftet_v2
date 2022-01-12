		<!-- Footer -->
		<div class="bg-turkish-dark">
			<footer class="container-xxl justify-content-center">
				<div class="
						row 
						d-flex
						justify-content-center
						align-items-center
					">
					<div class="col-lg-6">
						<div class="flex-img-container d-flex align-items-center justify-content-center p-3 ">
							<div class="acf-map">
								<?php echo do_shortcode('[wpgmza id="1"]'); ?>
							</div>
						</div>
					</div>

					<div class="flex-col-comp">
						<div class="flex flex-col justify-content-center align-items-center white">
							<a class="span logo" href="index.html"><img src='<?php echo get_template_directory_uri() . "/img/logo.png" ?>' alt="isvaerftet-logo" class="logo" /></a>
							<h1 class="h1 my-2">Find os her</h1>
							<div class="d-flex flex-row justify-content-space-around p-4 mx-auto">
								<div class="col">
									<ul class="me-4 list-style-none">
										<h4 class="h4">Åbningstider</h4>
										<li class="p">Mandag: Lukket</li>
										<li class="p">Tirsdag: 11-18</li>
										<li class="p">Onsdag: 11-18</li>
										<li class="p">Torsdag: 11-18</li>
										<li class="p">Fredag: 11-18</li>
										<li class="p">Lørdag: 11-18</li>
										<li class="p">Søndag: 11-18</li>
									</ul>
								</div>
								<div class="col white me-4">
									<h4 class="h4">Kontakt</h4>
									<address>
										Stjernepladsen 43, <br>
										9000 Aalborg <br>
										Email: <a href="mailto: hej@isvaerftet.dk" class="text-decoration-none white">hej@isvaerftet.dk</a> <br>
										Mobil: <a href="tel:+4522907778" class="text-decoration-none white">22907778</a>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<?php wp_footer(); ?>
		
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(event) {
					const lightbox = GLightbox({
						selector: 'glightbox2',
						touchNavigation: true,
						loop: true,
						autoplayVideos: true,
						href: 'https://youtu.be/yaN6LyTByf4',
						type: 'video',
						width: 900,
						source: 'youtube',
						onOpen: () => {
							console.log('Lightbox opened')
						}
					});
				}) 
				</script>
				</body>
				</html>