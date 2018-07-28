<?php get_header(); ?>

	
		
		<section class="content">
			

			<?php //IMPRIMIR POSTS ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h1>
						<a href="<?php echo get_attachment_link(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>
						<p><?php the_content(); ?></p>

						<p><?php comments_number('0 Comentários', '1 Comentário', "% Comentários"); ?></p>

					<?php endwhile; else : ?>
						<p><?php _e( 'Nenhum post encontrado!' ); ?></p>
					<?php endif; ?>

					</section>
				</div>

					<div class="menu-inicio">

					<h1> Aqui você encontra a maior variedade de produtos</h1>

						<img width="1000" height="500" src="<?php bloginfo('template_url'); ?>/img/produtos.png" />

					</div>


					
<?php get_sidebar(); ?>

<?php get_footer(); ?>