<?php

/**
 * Template part for displaying page contents
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happilee
 */

?>

<div class="container default-page">
	<?php


	if (have_posts()) :
		while (have_posts()) : the_post();
			the_content();
		endwhile;
	endif;

	?>
</div>