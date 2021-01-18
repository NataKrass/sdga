<?php get_header(); ?>

<div class="row">
	<div class="small-12 large-8 columns" role="main">

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php esc_html_e('Requested Page was Not Found', 'diplomat'); ?></h1>
			</header>
			<div class="entry-content">
				<div class="error">
					<p class="bottom"><?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'diplomat'); ?></p>
				</div>
				<p><?php esc_html_e('Please try the following:', 'diplomat'); ?></p>
				<?php
				$history     = esc_html__( 'Click the', 'diplomat' ) . ' <a href="javascript:history.back()">' . esc_html__( 'Back', 'diplomat' ) . '</a> ' . esc_html__( 'button', 'diplomat' );
				$return_home = esc_html__( 'Return to the', 'diplomat' ) . ' <a href="%s">' . esc_html__( 'home page', 'diplomat' ) . '</a>';
				?>
				<ul>
					<li><?php esc_html_e('Check your spelling', 'diplomat'); ?></li>
					<li><?php printf( wp_kses_post( $return_home ), home_url() ); ?></li>
					<li><?php echo wp_kses_post( $history ); ?></li>
				</ul>
			</div>
		</article>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
