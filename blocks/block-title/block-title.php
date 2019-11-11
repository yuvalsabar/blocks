<?php
$text        = get_field( 'text' ) ? get_field( 'text' ) : __( 'Title', 'theme' );
$title_level = get_field( 'title_level' ) ? get_field( 'title_level' ) : 'h2';
$align	 	 = get_field( 'alignment' ) ? ' style="text-align:' . get_field( 'alignment' ) . '"' : '';
?>

<div class="block block-title">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<<?php echo $title_level . $align ?>>
					<?php echo $text; ?>
				</<?php echo $title_level; ?>>
			</div>
		</div>
	</div>
</div>

