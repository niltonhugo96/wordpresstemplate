<!DOCTYPE html>
<html>
<head>
	<title>Tema Personalizado</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
</head>
<body>

<header>
		<div class="container">
			
			<br>
			<h1>Informática</h1>

		</div>

	
	</header>

	<?php $defaults = array(
		'menu'			=> 'primary',
		'container'		=> 'nav',
		'menu_class'	=> 'menu-principal',
		
	);	?>

	<?php wp_nav_menu( $defaults ); ?>

	<div class="container">


	