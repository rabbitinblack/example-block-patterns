<?php
function rabbitinblack_register_patterns() {
	register_block_pattern_category(
    'rabbitinblack-patterns',
  	array( 'label' => __( 'Rabbitinblack Patterns', RABBITINBLACK_TEXT_DOMAIN ) )
	);

  register_block_pattern(
		'rabbitinblack/cover',
		require RABBITINBLACK_TEMPLATE_DIR . '/inc/patterns/cover.php',
	);
}

add_action( 'init', 'rabbitinblack_register_patterns' );
