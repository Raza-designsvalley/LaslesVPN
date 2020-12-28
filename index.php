<?php get_header(); ?>

<div class="container ca-x">
	
	<span class="small-txt">
		<h1>Blog</h1>
	</span>

	<?php if ( have_posts() ) : ?>
	
	<div class="row">
		<div class="col-sm-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-header">
						<div class="head">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
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
						<p>
							<?php the_post_thumbnail('medium'); ?>
							<?php the_excerpt();?> 
						</p>
						<div class="readmore" >
							<a href="<?php the_permalink(); ?>" class="hvr-sweep-to-right" tabindex="0"><i class="fa fa-caret-right"></i> Read more </a>
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

<?php get_footer(); ?>