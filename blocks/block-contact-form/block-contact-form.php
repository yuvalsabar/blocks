<div class="block block-contact-form">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<h4 class="entry-title">
					<?php the_field( 'title' ); ?>
				</h4>

				<?php echo do_shortcode( '[contact-form-7 id="' . get_field( 'form_id' ) . '"]' ); ?>
			</div>
		</div>
	</div>
</div>
