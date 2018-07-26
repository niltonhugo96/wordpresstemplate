<!DOCTYPE html>
<html>
<head>
	<title>Tema Personalizado</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
</head>
<body>

<!--<div class="container">

		<img width="100" src="<?php bloginfo('template_url'); ?>/img/futebol.jpg">
</div> -->
	
	<header>
		<div class="container">
			
			<h1>Esportes</h1>

		</div>

	
	</header>

	<?php $defaults = array(
		'menu'			=> 'primary',
		'container'		=> 'nav',
		'menu_class'	=> 'menu-principal',
		
	);	?>

	<?php wp_nav_menu( $defaults ); ?>

	<div class="titulo">


	