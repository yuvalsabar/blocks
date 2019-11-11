<div class="col-lg-3 col-md-4">
	<div <?php post_class( 'post-item' );?> id="post-<?php echo $post->ID;?>">
		<?php get_template_part( 'inc/parts/edit-post-link' );?>

		<a href="<?php the_permalink();?>">
			<div class="post-thumbnail">
				<?php QS::the_post_thumbnail('post-thumbnail');?>
			</div>
			
			<footer class="entry-footer" data-mh="entry-footer">
				<h4 class="entry-title"><?php the_title();?></h4>
				<p class="entry-excerpt"><?php QS::the_excerpt(13);?></p>
			</footer>
		</a>
	</div>
</div>

