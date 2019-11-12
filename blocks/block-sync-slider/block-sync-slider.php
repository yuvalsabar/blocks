<?php $images = get_field( 'images' );?>

<div class="block block-sync-slider">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="swiper-container gallery-top">
				    <div class="swiper-wrapper">
				        <?php foreach ( $images as $image ): ?>
				        	
				            <div class="swiper-slide">
				                <div class="entry-image">
				                    <img src="<?php echo $image['sizes']['thumbnail'];?>" alt="<?php echo $image['alt'];?>" />
				                </div>
				            </div>

				        <?php endforeach;?>
				    </div>

					<div class="swiper-button-next swiper-button-white"></div>
					<div class="swiper-button-prev swiper-button-white"></div>
				</div>

				<div class="swiper-container gallery-thumbs">
				    <div class="swiper-wrapper">
				        <?php foreach ( $images as $image ): ?>
				        	
				            <div class="swiper-slide">
				                <div class="entry-image">
				                    <img src="<?php echo $image['sizes']['thumbnail'];?>" alt="<?php echo $image['alt'];?>" />
				                </div>
				            </div>

				        <?php endforeach;?>
				    </div>

				</div>				
			</div>
		</div>
	</div>
</div>
