<?php
/**
 * Single Post Template
 *
 * @package systemify
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="page-hero">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<p class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'systemify' ); ?></a>
			&rsaquo;
			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Blog', 'systemify' ); ?></a>
			&rsaquo; <?php the_title(); ?>
		</p>
	</div>
</div>

<div class="container section-pad">
	<article class="single-post-wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<div class="entry-meta">
				<?php
				printf(
					/* translators: 1: date, 2: author */
					esc_html__( 'Published %1$s by %2$s', 'systemify' ),
					esc_html( get_the_date() ),
					esc_html( get_the_author() )
				);
				?>
				<?php
				$categories_list = get_the_category_list( esc_html__( ', ', 'systemify' ) );
				if ( $categories_list ) {
					echo ' &bull; ' . $categories_list; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
				?>
			</div>
		</header>

		<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail" style="margin-bottom:var(--space-lg);border-radius:var(--radius-lg);overflow:hidden;max-height:400px;">
			<?php the_post_thumbnail( 'full', [ 'style' => 'width:100%;height:100%;object-fit:cover;' ] ); ?>
		</div>
		<?php endif; ?>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Continue reading<span class="sr-only"> "%s"</span>', 'systemify' ),
						[ 'span' => [ 'class' => [] ] ]
					),
					wp_kses_post( get_the_title() )
				)
			);
			wp_link_pages( [
				'before' => '<nav class="page-links">',
				'after'  => '</nav>',
			] );
			?>
		</div>

		<footer class="entry-footer" style="margin-top:var(--space-lg);padding-top:var(--space-md);border-top:1px solid var(--color-border);">
			<?php
			$tags_list = get_the_tag_list( '<span class="tags-label">' . esc_html__( 'Tags: ', 'systemify' ) . '</span>', esc_html__( ', ', 'systemify' ) );
			if ( $tags_list ) {
				echo '<div class="tags-links">' . $tags_list . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
			edit_post_link( __( 'Edit Post', 'systemify' ), '<span class="edit-link">', '</span>' );
			?>
		</footer>

	</article>

	<?php
	the_post_navigation( [
		'prev_text' => '&larr; %title',
		'next_text' => '%title &rarr;',
	] );
	?>

	<?php
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	?>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>
