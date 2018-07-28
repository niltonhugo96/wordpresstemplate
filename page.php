<?php get_header(); ?>

	<div class="titulo-pages">
		<div>
			<h1><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<h3>Nada encontrado</h3>
			<?php endif; ?>
		</div>
	</div>


<?php get_footer(); ?>