<?php
return array(
	'title'         => __( 'Cover', RABBITINBLACK_TEXT_DOMAIN ),
	'categories'    => array( 'rabbitinblack-patterns' ),
	'keywords'      => array( 'cover' ),
	'viewportWidth' => 1140,
	'content'       => '<!-- wp:cover {"url":"' . RABBITINBLACK_TEMPLATE_DIR_URI . 'img/banner-about.jpg' . '","dimRatio":0,"minHeight":300,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:300px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="'. RABBITINBLACK_TEMPLATE_DIR_URI . 'img/banner-about.jpg' . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->',
);
