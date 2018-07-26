<?php get_header(); ?>
		
		<section class="content">
			<h2>Noticias</h2>

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

			<br>

			<div class="tite">

		<a href="https://globoesporte.globo.com/futebol/selecao-brasileira/noticia/tite-renova-com-a-selecao-brasileira-ate-a-copa-do-mundo-de-2022.ghtml"/><img width="300" src="<?php bloginfo('template_url'); ?>/img/tite.jpg">			
		<h1>Tite renova com a seleção brasileira até a Copa do Mundo de 2022</h1>	
		
		</div> 	

			
		
<?php get_sidebar(); ?>

<?php get_footer(); ?>