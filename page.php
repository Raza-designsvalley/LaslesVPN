<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main container" role="main">
		
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php
			while ( have_posts() ) : the_post();
			
				get_template_part( 'template-parts/content', 'page' );
				
				if ( comments_open() || get_comments_number() ) {
								comments_template();
				}
							
			endwhile;
		?>
		
	</main>
</div>
<?php get_footer(); ?>