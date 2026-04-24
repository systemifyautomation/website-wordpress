<?php
/**
 * Index / Blog Archive Template
 *
 * @package systemify
 */

get_header();
?>

<div class="page-hero">
	<div class="container">
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<h1><?php single_post_title(); ?></h1>
		<?php elseif ( is_category() ) : ?>
			<h1><?php single_cat_title(); ?></h1>
		<?php elseif ( is_tag() ) : ?>
			<h1><?php single_tag_title(); ?></h1>
		<?php elseif ( is_author() ) : ?>
			<h1>
				<?php
				printf(
					/* translators: %s: author name */
					esc_html__( 'Posts by %s', 'systemify' ),
					esc_html( get_the_author() )
				);
				?>
			</h1>
		<?php elseif ( is_search() ) : ?>
			<h1>
				<?php
				printf(
					/* translators: %s: search query */
					esc_html__( 'Search results for: &ldquo;%s&rdquo;', 'systemify' ),
					esc_html( get_search_query() )
				);
				?>
			</h1>
		<?php else : ?>
			<h1><?php esc_html_e( 'Blog', 'systemify' ); ?></h1>
		<?php endif; ?>
		<p class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'systemify' ); ?></a>
			&rsaquo; <?php esc_html_e( 'Blog', 'systemify' ); ?>
		</p>
	</div>
</div>

<div class="container section-pad">

	<?php if ( have_posts() ) : ?>

		<div class="posts-grid">
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
						<?php the_post_thumbnail( 'systemify-card', [ 'alt' => get_the_title() ] ); ?>
					</a>
				</div>
				<?php endif; ?>

				<div class="post-content">
					<p class="post-meta">
						<?php echo esc_html( get_the_date() ); ?>
						<?php
						$cat = get_the_category();
						if ( $cat ) {
							echo ' &bull; <a href="' . esc_url( get_category_link( $cat[0]->term_id ) ) . '">' . esc_html( $cat[0]->name ) . '</a>';
						}
						?>
					</p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="post-excerpt"><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn btn-ghost mt-sm" style="padding:.5rem 1rem;font-size:.85rem;">
						<?php esc_html_e( 'Read More →', 'systemify' ); ?>
					</a>
				</div>
			</article>

			<?php endwhile; ?>
		</div>

		<?php the_posts_navigation( [
			'prev_text' => __( '&larr; Older posts', 'systemify' ),
			'next_text' => __( 'Newer posts &rarr;', 'systemify' ),
		] ); ?>

	<?php else : ?>

		<div class="text-center" style="padding:var(--space-2xl) 0;">
			<h2><?php esc_html_e( 'No posts found', 'systemify' ); ?></h2>
			<p><?php esc_html_e( 'Check back soon — we\'re writing about AI automation, productivity, and business growth.', 'systemify' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary mt-md"><?php esc_html_e( '← Back Home', 'systemify' ); ?></a>
		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
