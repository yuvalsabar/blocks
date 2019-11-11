<?php
$galleries = get_field( 'galleries' );

$args = array(
	'post_type' => 'gallery',
	'posts_per_page' => 10,
	'post__in' => $galleries,
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

	<div class="block block-galleries">
		<div class="block-container">
			<div class="block-row">
				<div class="block-col">
					<div class="row row-galleries">
						<?php if ( $query->have_posts() ) : ?>
						
							<?php
							while ( $query->have_posts() ) :
								$query->the_post();
								?>
								
								<div class="col-lg-6">
									<div class="item-gallery">
										<a href="<?php the_permalink(); ?>">
											<figure class="post-thumbnail">
												<div class="overlay">
													<span class="btn btn-white">
														<?php _e( 'Enter Gallery', 'theme' ); ?>
														<span class="fa fa-angle-left" aria-hidden="true"></span>
													</span>
												</div>
												<?php QS::the_post_thumbnail( 'block-gallries' ); ?>
											</figure>

											<footer class="entry-footer">
												<h4 class="entry-title">
													<?php the_title(); ?>
												</h4>
											</footer>
										</a>
									</div>
								</div>
						
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
endif;
