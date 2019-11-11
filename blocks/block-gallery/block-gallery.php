<?php $images = get_field( 'gallery' );?>

<div class="block block-gallery">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="row-gallery row">
					<?php foreach ($images as $image): ?>
						<div class="col-lg-6">
							<figure class="entry-image">
								<a href="<?php echo $image['sizes']['large'];?>" data-fancybox="block-gallery">
									<img src="<?php echo $image['sizes']['block-gallery'];?>" alt="<?php echo $image['alt'];?>" />
								</a>
							</figure>
						</div>
					<?php endforeach ?>
				</div>		
			</div>
		</div>
	</div>
</div>