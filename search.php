<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

get_header(); ?>

<main id="main" role="main">

	<div class="container section-inner thin search-page-content">
		
		<?php
		if ( have_posts() ) {
			?>
		
		<form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input placeholder="Search..." type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
			<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
		</form>
		
			<header class="page-header alignwide">
				<h1 class="page-title">
					<?php
					printf(
						/* translators: %s: search term. */
						esc_html__( 'Results for "%s"', 'twentytwentyone' ),
						'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
					);
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="search-result-count default-max-width">
				<?php
				printf(
					esc_html(
						/* translators: %d: the number of search results. */
						_n(
							'We found %d result for your search.',
							'We found %d results for your search.',
							(int) $wp_query->found_posts,
							'twentytwentyone'
						)
					),
					(int) $wp_query->found_posts
				);
				?>
			</div><!-- .search-result-count -->
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-header">
						<div class="head">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						</div>
					</div>
					<div class="entry clear">
						<p>
							<?php the_excerpt();?> 
						</p>
						<div class="readmore" >
							<a href="<?php the_permalink(); ?>" class="hvr-sweep-to-right" tabindex="0">Read more <i class="fa fa-caret-right"></i></a>
						</div>
					 </div>

				</div>
			<?php endwhile;

			// If no content, include the "No posts found" template.
		} else {
			get_template_part( 'template-parts/content/content-none' );
		}
	?>
	</div>
</main>

<?php get_footer(); ?>
