<?php if ( have_rows( 'gallery' ) ) : ?>

	<div class="block block-video-gallery">
		<div class="block-container">
			<div class="block-row">
				<div class="block-col">
					<div class="row-gallery row">
						<?php while ( have_rows( 'gallery' ) ) : the_row();
							$image = get_sub_field( 'image' );?>

							<div class="col-lg-6">
								<div class="item">
									<a href="<?php the_sub_field( 'video_url' );?>" data-fancybox="block-gallery">
										<figure class="entry-image">
											<span class="overlay">
												<span class="icon-play">
													<span class="fa fa-play" aria-hidden="true"></span>
												</span>
											</span>

											<img src="<?php echo $image['sizes']['block-gallery-video'];?>" alt="<?php echo $image['alt'];?>" />
										</figure>
										<h3 class="entry-title">
											<?php the_sub_field( 'title' );?>
										</h3>
									</a>
								</div>
							</div>
						<?php endwhile ?>
					</div>		
				</div>
			</div>
		</div>
	</div>    

<?php endif;
