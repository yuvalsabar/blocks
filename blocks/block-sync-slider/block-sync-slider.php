<?php $images = get_field( 'images' );?>

<div class="block block-sync-slider fade-in">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="slider-gallery">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					        <?php foreach ( $images as $image ): ?>
					        	
					            <div class="swiper-slide">
					                <div class="entry-image">
					                    <img src="<?php echo $image['sizes']['block-sync-slider-large'];?>" alt="<?php echo $image['alt'];?>" />
					                </div>
					            </div>

					        <?php endforeach;?>
					    </div>
					</div>
				</div>
				<div class="slider-gallery-thumbs">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					        <?php foreach ( $images as $image ): ?>
					        	
					            <div class="swiper-slide">
					                <div class="entry-image">
					                    <img src="<?php echo $image['sizes']['block-sync-slider-thumbnail'];?>" alt="<?php echo $image['alt'];?>" />
					                </div>
					            </div>

					        <?php endforeach;?>
					    </div>

					</div>
					
					<div class="swiper-buttons">
					    <div class="swiper-button swiper-button-prev">
					    	<span class="icomoon-slider-arrow-right" aria-hidden="true"></span>
					    </div>
						<div class="swiper-button swiper-button-next">
							<span class="icomoon-slider-arrow-left" aria-hidden="true"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
