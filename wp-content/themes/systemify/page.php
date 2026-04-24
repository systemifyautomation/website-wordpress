<?php
/**
 * Generic Page Template
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
			&rsaquo; <?php the_title(); ?>
		</p>
	</div>
</div>

<div class="container section-pad">
	<div class="single-post-wrap">
		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages( [
				'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'systemify' ) . '">',
				'after'  => '</nav>',
			] );
			?>
		</div>

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit Page', 'systemify' ), '<span class="edit-link">', '</span>' ); ?>
			</footer>
		<?php endif; ?>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
