<?php
/**
 * The template for displaying all single posts
 */

get_header();?>

<main id="main" role="main">
	<div class="container single-page">
	<span class="small-txt">
		<h1>Blog</h1>
	</span>
		<div class="row">
			<div class="col-sm-8">
				<class="blog-post-header" class="entry-header">
					<?php the_title( sprintf('<h1 class="entry-title">', esc_url( get_permalink() ) ),'</h1>' ); ?>
					<p class="byline">
						By : <a href="<?php get_author_posts_url( $post->post_title ); ?>"><?php the_author(); ?></a> /
						<?php the_category( ', ' ); ?> /
						<?php the_time( 'j, M, Y' ); ?>
					</p>
				</class>
		
				<div class="entry clear">
						<?php the_post_thumbnail('medium'); ?>
						<?php the_content();?>
				</div>
				
			</div>
			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
