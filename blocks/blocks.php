<?php
/**
 * Register blocks
 */

function register_acf_block_types() {
	$theme = get_template_directory_uri();

	acf_register_block_type(
		array(
			'name'            => 'block_content',
			'title'           => __( 'תוכן', 'theme' ),
			'render_template' => 'inc/blocks/block-content/block-content.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-content/block-content.css',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_image',
			'title'           => __( 'תמונה', 'theme' ),
			'render_template' => 'inc/blocks/block-image/block-image.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-image/block-image.css',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_embed',
			'title'           => __( 'הטמעה', 'theme' ),
			'render_template' => 'inc/blocks/block-embed/block-embed.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-embed/block-embed.css',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_separator',
			'title'           => __( 'מפריד', 'theme' ),
			'render_template' => 'inc/blocks/block-separator/block-separator.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-separator/block-separator.css',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_slider',
			'title'           => __( 'סליידר', 'theme' ),
			'render_template' => 'inc/blocks/block-slider/block-slider.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-slider/block-slider.css',
			'enqueue_script'  => $theme . '/inc/blocks/block-slider/block-slider.js',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_testimonials-slider',
			'title'           => __( 'סליידר ממליצים', 'theme' ),
			'render_template' => 'inc/blocks/block-testimonials-slider/block-testimonials-slider.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-testimonials-slider/block-testimonials-slider.css',
			'enqueue_script'  => $theme . '/inc/blocks/block-testimonials-slider/block-testimonials-slider.js',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_title',
			'title'           => __( 'כותרת', 'theme' ),
			'render_template' => 'inc/blocks/block-title/block-title.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_contact_form',
			'title'           => __( 'טופס צור קשר', 'theme' ),
			'render_template' => 'inc/blocks/block-contact-form/block-contact-form.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_gallery',
			'title'           => __( 'גלריה - תמונות', 'theme' ),
			'render_template' => 'inc/blocks/block-gallery/block-gallery.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_video_gallery',
			'title'           => __( 'גלריה - וידיאו', 'theme' ),
			'render_template' => 'inc/blocks/block-video-gallery/block-video-gallery.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_accordion',
			'title'           => __( 'אקורדיון', 'theme' ),
			'render_template' => 'inc/blocks/block-accordion/block-accordion.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-accordion/block-accordion.css',
			'enqueue_script'  => $theme . '/inc/blocks/block-accordion/block-accordion.js',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_buttons',
			'title'           => __( 'כפתורים', 'theme' ),
			'render_template' => 'inc/blocks/block-buttons/block-buttons.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-buttons/block-buttons.css',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_galleries',
			'title'           => __( 'גלריות', 'theme' ),
			'render_template' => 'inc/blocks/block-galleries/block-galleries.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_banner',
			'title'           => __( 'באנר', 'theme' ),
			'render_template' => 'inc/blocks/block-banner/block-banner.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_blockquote',
			'title'           => __( 'ציטוט', 'theme' ),
			'render_template' => 'inc/blocks/block-blockquote/block-blockquote.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-blockquote/block-blockquote.css',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_gap',
			'title'           => __( 'מרווח', 'theme' ),
			'render_template' => 'inc/blocks/block-spacer/block-spacer.php',
			'enqueue_style'   => $theme . '/inc/blocks/block-spacer/block-spacer.css',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_sync_slider',
			'title'           => __( 'סליידר סנכרוני', 'theme' ),
			'render_template' => 'inc/blocks/block-sync-slider/block-sync-slider.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
	acf_register_block_type(
		array(
			'name'            => 'block_icon_and_text',
			'title'           => __( 'אייקון וטקסט', 'theme' ),
			'render_template' => 'inc/blocks/block-icon-and-text/block-icon-and-text.php',
			'category'        => 'qs-blocks',
			'icon'            => 'star-filled',
			'keywords'        => array(),
		)
	);
}

if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}

/**
 * Register block categoires
 */
function qs_block_categories( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'qs-blocks',
				'title' => __( 'בלוקים מותאמים אישית', 'theme' ),
			),
		)
	);
}
add_filter( 'block_categories', 'qs_block_categories', 10, 2 );
