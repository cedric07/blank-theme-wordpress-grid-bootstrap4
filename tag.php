<?php get_header(); ?>

<main role="main">
	<div class="container">
		<h1><?php _e( 'Tag Archive: ', 'your_text_domain' );
			echo single_tag_title( '', false ); ?></h1>

		<?php get_template_part( 'loop' ); ?>

		<?php get_template_part( 'pagination' ); ?>
	</div>
</main>

<?php get_footer(); ?>
