<div class="block block-contact-form">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="block-in">
					<div class="fields-wrap">
						<h2 class="entry-title section-title">
							<?php the_field( 'bottom_cf_title', 'option' );?>
						</h2>
						<h3 class="entry-subtitle">
							<?php the_field( 'bottom_cf_subtitle', 'option' );?>
						</h3>

						<?php QS::do_wpcf7( 'bottom_cf', 'option' );?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
