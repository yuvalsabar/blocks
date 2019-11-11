<div class="block block-testimonials-slider">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="swiper-container">
				    <div class="swiper-wrapper">
				        <?php while ( have_rows( 'testimonials' ) ) : the_row(); 
				            $image = get_sub_field( 'image' ); ?>
				
				            <div class="swiper-slide">
				            	<div class="slide">
					                <div class="entry-image">
					                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'];?>" />
					                </div>
					                <h4 class="entry-title">
					                	<?php the_sub_field( 'name' ); ?>
					                </h4>
					                <div class="position">
					                	<?php the_sub_field( 'position' ); ?>
					                </div>
					                <div class="entry-text">
					                	<?php the_sub_field( 'text' ); ?>
					                </div>
				            	</div>
				            </div>
				
				        <?php endwhile; ?>
				    </div>
				
				    <div class="swiper-pagination"></div>

				    <div class="swiper-button-prev"></div>
				    <div class="swiper-button-next"></div>
				</div>
			</div>
		</div>
	</div>
</div>