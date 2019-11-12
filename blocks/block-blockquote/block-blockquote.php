<?php $align = get_field( 'alignment' ) ? ' style="text-align:' . get_field( 'alignment' ) . '"' : ''; ?>

<div class="block block-blockquote">
	<div class="block-container">
		<div class="block-row">
			<div class="block-col">
				<div class="before-quote">
					<span class="icomoon-quote" aria-hidden="true"></span>
				</div>
				<blockquote class="blockquote"<?php echo $align; ?>>
					<p class="entry-text">
						<?php the_field( 'content' );?>
					</p>
					<footer class="entry-footer">
						<?php the_field( 'name' ); ?>
					</footer>
				</blockquote>
			</div>
		</div>
	</div>
</div>