<?php if ( have_rows( 'buttons' ) ) : ?>

	<div class="block block-buttons">
		<div class="block-container">
			<div class="block-row">
				<div class="block-col">
					<div class="buttons" style="text-align:<?php the_field( 'alignment' ); ?>">
						<?php
						while ( have_rows( 'buttons' ) ) :
							the_row();
							$link   = get_sub_field( 'link' );
							$icon   = get_sub_field( 'icon' );
							$target = $link['target'] ? ' target="_blank"' : '';
							?>
									
							<a class="btn <?php the_sub_field( 'bg' ); ?>" href="<?php echo $link['url']; ?>"<?php echo $target; ?>>
								<?php echo $link['title']; ?>
								<?php if ( $icon ) : ?>
								<span class="icon <?php echo $icon; ?>" aria-hidden="true"></span>								
								<?php endif; ?>
							</a>

						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>
