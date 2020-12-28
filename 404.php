<?php
/**
 * The template for displaying the 404 Error.
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="container section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'mythemecust' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'mythemecus' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'mythemecus' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->


<?php
get_footer();
