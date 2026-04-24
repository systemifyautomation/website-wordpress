<!-- ============================================================
     SITE FOOTER
     ============================================================ -->
<footer id="colophon" role="contentinfo">
	<div class="container">
		<div class="footer-top">

			<!-- Brand column -->
			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?>">
					<span class="logo-mark" aria-hidden="true">S</span>
					<span class="logo-text">Systemify<span> AI</span></span>
				</a>
				<p><?php esc_html_e( 'AI-powered automation for service lead-based businesses. Deliver faster. Less admin. More results.', 'systemify' ); ?></p>
				<div class="footer-socials">
					<a href="https://linkedin.com/company/systemifyautomation" class="social-link" aria-label="LinkedIn" rel="noopener noreferrer" target="_blank">in</a>
					<a href="https://twitter.com/systemifyai"                  class="social-link" aria-label="Twitter / X" rel="noopener noreferrer" target="_blank">𝕏</a>
					<a href="https://instagram.com/systemifyautomation"        class="social-link" aria-label="Instagram" rel="noopener noreferrer" target="_blank">ig</a>
				</div>
			</div>

			<!-- Company links -->
			<div class="footer-col">
				<h4><?php esc_html_e( 'Company', 'systemify' ); ?></h4>
				<?php
				wp_nav_menu( [
					'theme_location' => 'footer_1',
					'menu_class'     => 'footer-links',
					'container'      => false,
					'fallback_cb'    => function() {
						echo '<ul class="footer-links">';
						echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#results' ) ) . '">' . esc_html__( 'Case Studies', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ) . '">' . esc_html__( 'Blog', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'systemify' ) . '</a></li>';
						echo '</ul>';
					},
				] );
				?>
			</div>

			<!-- Services links -->
			<div class="footer-col">
				<h4><?php esc_html_e( 'Services', 'systemify' ); ?></h4>
				<?php
				wp_nav_menu( [
					'theme_location' => 'footer_2',
					'menu_class'     => 'footer-links',
					'container'      => false,
					'fallback_cb'    => function() {
						echo '<ul class="footer-links">';
						echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'CRM Automation', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Lead Nurturing', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Client Onboarding', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'AI Workflows', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Reporting & Analytics', 'systemify' ) . '</a></li>';
						echo '</ul>';
					},
				] );
				?>
			</div>

			<!-- Legal links -->
			<div class="footer-col">
				<h4><?php esc_html_e( 'Legal', 'systemify' ); ?></h4>
				<?php
				wp_nav_menu( [
					'theme_location' => 'footer_3',
					'menu_class'     => 'footer-links',
					'container'      => false,
					'fallback_cb'    => function() {
						echo '<ul class="footer-links">';
						echo '<li><a href="' . esc_url( home_url( '/privacy-policy/' ) ) . '">' . esc_html__( 'Privacy Policy', 'systemify' ) . '</a></li>';
						echo '<li><a href="' . esc_url( home_url( '/terms-of-service/' ) ) . '">' . esc_html__( 'Terms of Service', 'systemify' ) . '</a></li>';
						echo '</ul>';
					},
				] );
				?>
			</div>

		</div><!-- .footer-top -->

		<div class="footer-bottom">
			<p class="footer-copy">
				&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?>
				<?php
				printf(
					/* translators: 1: company name, 2: country flag */
					esc_html__( '%1$s — Built with ❤️ in Morocco %2$s. All rights reserved.', 'systemify' ),
					'<a href="' . esc_url( home_url( '/' ) ) . '">Systemify Automation</a>',
					'🇲🇦'
				);
				?>
			</p>
			<nav class="footer-legal" aria-label="<?php esc_attr_e( 'Legal navigation', 'systemify' ); ?>">
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy', 'systemify' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/terms-of-service/' ) ); ?>"><?php esc_html_e( 'Terms', 'systemify' ); ?></a>
			</nav>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
