<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<section class="archive_posts">
	<div class="container blog-article">
		<span class="small-txt">
			<h1><?php the_archive_title('') ?></h1>
		</span>
	 
		<?php if ( have_posts() ) : ?>
		
	<div class="row">
		<div class="col-sm-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-header">
						<div class="head">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
						</div>
						<div class="share">
							<p class="byline">
								By : <a href="<?php get_author_posts_url( $post->post_title ); ?>"><?php the_author(); ?></a> /
								<?php the_category( ', ' ); ?> /
								<?php the_time( 'j, M, Y' ); ?>
							</p>
						</div>
					</div>
					<div class="entry clear">
						<?php the_post_thumbnail('medium'); ?>
						<?php the_excerpt();?>
								
						<div class="readmore" >
							<a href="<?php the_permalink(); ?>" class="hvr-sweep-to-right" tabindex="0">Read more <i class="fa fa-caret-right"></i></a>
						</div>
					</div>

				</div>
			<?php endwhile;?>
		<div class="navigation index">
			<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
			<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
		</div>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
		<?php else : ?>
		<?php endif; ?>

	</div>
</section>
 
<?php
 get_footer(); ?>