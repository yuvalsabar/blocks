<?php $image = get_field( 'image' ); ?>

<div class="block block-image">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<figure class="entry-image">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</figure>
			</div>
		</div>
	</div>
</div>