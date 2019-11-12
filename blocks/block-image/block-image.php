<?php 
$image = get_field( 'image' ); 
$align = get_field( 'alignment' ) ? ' style="text-align:' . get_field( 'alignment' ) . '"' : '';
?>

<div class="block block-image">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<figure class="entry-image"<?php echo $align; ?>>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</figure>
			</div>
		</div>
	</div>
</div>